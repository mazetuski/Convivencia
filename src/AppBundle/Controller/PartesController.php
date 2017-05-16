<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Alumno;
use AppBundle\Entity\Cursos;
use AppBundle\Entity\EstadosParte;
use AppBundle\Entity\Partes;
use AppBundle\Form\ParteFormType;
use AppBundle\Repository\CursosRepository;
use AppBundle\Repository\PartesRepository;
use AppBundle\Services\AlumnoHelper;
use AppBundle\Services\PartesHelper;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

class PartesController extends Controller
{

    const ESTADO_INICIADO = 'Iniciado';

    /**
     * @Route("/partes", name="gestion_partes")
     * @Method({"GET", "POST"})
     */
    public function showGestionPartes(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        /** @var PartesRepository $repositoryPartes */
        $repositoryPartes = $em->getRepository("AppBundle:Partes");
        if ($request->query->has('like')) {
            if ($request->get('historico') != null)
                $partes = $repositoryPartes->getPartesLike($request->get('like'), true);
            else
                $partes = $repositoryPartes->getPartesLike($request->get('like'));
        } else {
            if ($request->get('historico') != null)
                $partes = $repositoryPartes->getPartesOrdenados(true);
            else
                $partes = $repositoryPartes->getPartesOrdenados();
        }
        return $this->render('convivencia/partes/partes.html.twig', array(
            'partes' => $partes,
            'user' => $this->getUser(),
        ));
    }

    /**
     * @Route("/nuevoParte", name="nuevoParte")
     * @Method({"GET", "POST"})
     */
    public function crearParteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var AlumnoHelper $alumnoHelper */
        $alumnoHelper = $this->get('app.alumnoHelper');
        /** @var PartesHelper $parteHelper */
        $parteHelper = $this->get('app.partesHelper');
        $repositoryAccionPartes = $em->getRepository('AppBundle:AccionEstadoParte');
        /** @var CursosRepository $repositoryACursos */
        $repositoryACursos = $em->getRepository('AppBundle:Cursos');
        /** @var Cursos $curso */
        $cursos = $repositoryACursos->getCursosGroupByCursos();
        /** @var Alumno $alumnos */
        $alumnos = $alumnoHelper->getAlumnosByRequest($request);
        $parte = $parteHelper->getParteFromRequest($request);
        if ($parteHelper->recuperarPuntos($request) ||
            $parteHelper->changeEstado($request, $parte))
            return $this->redirectToRoute("nuevoParte", array(
                'idParte' => $parte->getId()));
        if ($request->query->has('idParte'))
            $recupera = $parteHelper->parteRecupera($parte);

        $form = $this->createForm(ParteFormType::class, $parte, array(
            'compound' => $alumnos,
        ));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($parte);
            $em->flush();
            return $this->redirectToRoute("gestion_partes");
        }

        $accion = $repositoryAccionPartes->findOneByEstado($parte->getIdEstado());

        return $this->render('convivencia/partes/partesForm.html.twig', array(
            'form' => $form->createView(),
            'recupera' => $recupera,
            'cursos' => $cursos,
            'accion' => $accion,
            'parte' => $parte,
        ));
    }

}
