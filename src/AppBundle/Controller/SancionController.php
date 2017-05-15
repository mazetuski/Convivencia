<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Cursos;
use AppBundle\Entity\Sanciones;
use AppBundle\Form\SancionFormType;
use AppBundle\Repository\CursosRepository;
use AppBundle\Repository\SancionesRepository;
use AppBundle\Services\AlumnoHelper;
use AppBundle\Services\CrearSancionHelper;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

class SancionController extends Controller
{
    /**
     * @Route("/nuevaSancion", name="nueva_sancion")
     * @Method({"GET", "POST"})
     */
    public function crearSancionAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var CrearSancionHelper $crearSancionHelper */
        $crearSancionHelper = $this->get('app.crearSancionHelper');
        /** @var AlumnoHelper $alumnoHelper */
        $alumnoHelper = $this->get('app.alumnoHelper');
        /** @var CursosRepository $repositoryACursos */
        $repositoryACursos = $em->getRepository('AppBundle:Cursos');
        /** @var Cursos $curso */
        $cursos = $repositoryACursos->getCursosGroupByCursos();

        $alumnos = $alumnoHelper->getAlumnosByRequest($request);
        $sancion = $crearSancionHelper->getSancionFromRequest($request);
        $form = $this->createForm(SancionFormType::class, $sancion, array(
            'compound' => $alumnos,
        ));
        $form->handleRequest($request);
        $detalles = $crearSancionHelper->getDiarioFromSancion($sancion);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($sancion);
            $em->flush();
            $crearSancionHelper->creaDiarioFromSancion($sancion, $request);
            return $this->redirectToRoute("gestion_sanciones");
        }

        return $this->render("convivencia/sanciones/sancionesForm.html.twig", array(
            'form' => $form->createView(),
            'detalles' => $detalles,
            'horas' => $crearSancionHelper::HORAS_CLASE,
            'cursos' => $cursos,
        ));
    }

    /**
     * @Route("/sanciones", name="gestion_sanciones")
     * @Method({"GET", "POST"})
     */
    public function showGestionSanciones(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        /** @var SancionesRepository $sancionesRepository */
        $sancionesRepository = $em->getRepository('AppBundle:Sanciones');
        if ($request->query->has('like')) {
            if ($request->get('historico') != null)
                $sanciones = $sancionesRepository->getSancionesLike($request->get('like'), true);
            else
                $sanciones = $sancionesRepository->getSancionesLike($request->get('like'));
        } else {
            if ($request->get('historico') != null)
                $sanciones = $sancionesRepository->getSancionesOrdenadas(true);
            else
                $sanciones = $sancionesRepository->getSancionesOrdenadas();
        }

        return $this->render("convivencia/sanciones/sanciones.html.twig", array(
            'sanciones' => $sanciones,
            'user' => $this->getUser(),
        ));
    }
}
