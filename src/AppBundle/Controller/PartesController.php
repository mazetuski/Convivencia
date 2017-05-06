<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Alumno;
use AppBundle\Entity\Cursos;
use AppBundle\Entity\Partes;
use AppBundle\Form\ParteFormType;
use AppBundle\Repository\CursosRepository;
use AppBundle\Repository\PartesRepository;
use AppBundle\Services\AlumnoHelper;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

class PartesController extends Controller
{

    /**
     * @Route("/partes", name="gestion_partes")
     * @Method({"GET", "POST"})
     */
    public function showGestionPartes(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var PartesRepository $repositoryPartes */
        $repositoryPartes = $em->getRepository("AppBundle:Partes");
        if ($request->query->has('like'))
            $partes = $repositoryPartes->getPartesLike($request->get('like'));
        else
            $partes = $repositoryPartes->getPartesOrdenados();
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
        $recupera = false;
        /** @var AlumnoHelper $alumnoHelper */
        $alumnoHelper = $this->get('app.alumnoHelper');

        /** @var PartesRepository $repositoryPartes */
        $repositoryPartes = $em->getRepository('AppBundle:Partes');
        /** @var CursosRepository $repositoryACursos */
        $repositoryACursos = $em->getRepository('AppBundle:Cursos');
        /** @var Cursos $curso */
        $cursos = $repositoryACursos->getCursosGroupByCursos();
        /** @var Alumno $alumnos */
        $alumnos = $alumnoHelper->getAlumnosByRequest($request);
        if ($request->get('recuperaPunto') != null) {
            /** @var Partes $parte */
            $parte = $repositoryPartes->getParteById($request->get('parteHidden'));
            $parte->setRecupera(1);
            $em->persist($parte);
            $em->flush();
            return $this->redirectToRoute("gestion_partes");
        }
        if ($request->query->has('idParte')) {
            $parte = $repositoryPartes->getParteById($request->get('idParte'));
            if ($parte->getRecupera() == 0) $recupera = true;
        } else
            $parte = new Partes();
        $form = $this->createForm(ParteFormType::class, $parte, array(
            'compound' => $alumnos,
        ));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($parte);
            $em->flush();
            return $this->redirectToRoute("gestion_partes");
        }

        return $this->render('convivencia/partes/partesForm.html.twig', array(
            'form' => $form->createView(),
            'recupera' => $recupera,
            'cursos' => $cursos,
        ));
    }

}
