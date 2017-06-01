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
use Symfony\Component\Config\Definition\Exception\Exception;
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
        $repositoryAccionSanciones = $em->getRepository('AppBundle:AccionEstadoSancion');
        $repositoryPartes = $em->getRepository('AppBundle:Partes');
        /** @var Cursos $curso */
        $cursos = $repositoryACursos->getCursosGroupByCursos();

        $alumnos = $alumnoHelper->getAlumnosByRequest($request);
        $sancion = $crearSancionHelper->getSancionFromRequest($request);
        if ($crearSancionHelper->changeEstado($request, $sancion))
            $this->redirectToRoute("nueva_sancion", array('idSancion' => $sancion->getId()));
        $form = $this->createForm(SancionFormType::class, $sancion, array(
            'compound' => $alumnos,
        ));
        $form->handleRequest($request);
        $detalles = $crearSancionHelper->getDiarioFromSancion($sancion);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($request->get('idParte') != null) {
                $parte = $repositoryPartes->findOneById($request->get('idParte'));
                $sancion->setIdParte([$parte]);
            }
            $fechaSancion = \DateTime::createFromFormat('d/m/Y', $request->get('fecha'));
            $sancion->setFecha($fechaSancion);
            $fechaSancion = \DateTime::createFromFormat('d/m/Y', $request->get('fechaInicio'));
            $sancion->setFechaInicio($fechaSancion);
            $fechaSancion = \DateTime::createFromFormat('d/m/Y', $request->get('fechaFinal'));
            $sancion->setFechaFinal($fechaSancion);
            $em->persist($sancion);
            $em->flush();
            $crearSancionHelper->creaDiarioFromSancion($sancion, $request);
            return $this->redirectToRoute("gestion_sanciones");
        }
        $accion = $repositoryAccionSanciones->findOneByEstado($sancion->getIdEstado());

        return $this->render("convivencia/sanciones/sancionesForm.html.twig", array(
            'form' => $form->createView(),
            'detalles' => $detalles,
            'horas' => $crearSancionHelper::HORAS_CLASE,
            'cursos' => $cursos,
            'accion' => $accion,
            'sancion' => $sancion,
        ));
    }

    /**
     * @Route("/sanciones", name="gestion_sanciones")
     * @Method({"GET", "POST"})
     */
    public function showGestionSanciones(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $paginator = $this->get('knp_paginator');
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

        $sancionesPagination = $paginator->paginate(
            $sanciones, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );

        return $this->render("convivencia/sanciones/sanciones.html.twig", array(
            'sanciones' => $sancionesPagination,
            'user' => $this->getUser(),
        ));
    }

    /**
     * @Route("/borrarSancion/{id}", name="borrar_sancion")
     * @Method({"GET"})
     */
    public function removeSancion(Sanciones $sancion)
    {
        try {
            $em = $this->getDoctrine()->getManager();
            $em->remove($sancion);
            $this->addFlash("sancion", "Se ha eliminado correctamente");
            $em->flush();
        }catch (Exception $e) {
            $this->addFlash("sancionError", "No se ha podido eliminar la sanción");
        }
        return $this->redirectToRoute("gestion_sanciones");
    }
}
