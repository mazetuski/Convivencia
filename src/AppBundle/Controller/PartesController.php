<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Alumno;
use AppBundle\Entity\Cursos;
use AppBundle\Entity\EstadosParte;
use AppBundle\Entity\Partes;
use AppBundle\Entity\Sanciones;
use AppBundle\Form\ParteFormType;
use AppBundle\Repository\CursosRepository;
use AppBundle\Repository\PartesRepository;
use AppBundle\Repository\SancionesRepository;
use AppBundle\Services\AlumnoHelper;
use AppBundle\Services\PartesHelper;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Config\Definition\Exception\Exception;
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
        $paginator  = $this->get('knp_paginator');
        /** @var PartesRepository $repositoryPartes */
        $repositoryPartes = $em->getRepository("AppBundle:Partes");
        if ($request->query->has('like')) {
            if ($request->get('historico') != null)
                $query = $repositoryPartes->getPartesLike($request->get('like'), true);
            else
                $query = $repositoryPartes->getPartesLike($request->get('like'));
        } else {
            if ($request->get('historico') != null)
                $query = $repositoryPartes->getPartesOrdenados(true);
            else
                $query = $repositoryPartes->getPartesOrdenados();
        }
//        $partes = $paginator->paginate(
//            $query, /* query NOT result */
//            $request->query->getInt('page', 1)/*page number*/,
//            10/*limit per page*/
//        );

        $partes = $query;
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
        /** @var SancionesRepository $repositorySanciones */
        $repositorySanciones = $em->getRepository('AppBundle:Sanciones');
        /** @var Cursos $curso */
        $cursos = $repositoryACursos->getCursosGroupByCursos();
        /** @var Alumno $alumnos */
        $alumnos = $alumnoHelper->getAlumnosByRequest($request);
        $parte = $parteHelper->getParteFromRequest($request);
        $recupera = false;
        if ($parteHelper->recuperarPuntos($request) ||
            $parteHelper->changeEstado($request, $parte))
            return $this->redirectToRoute("nuevoParte", array(
                'idParte' => $parte->getId()));
//        return 'hola';
        if ($request->query->has('idParte'))
            $recupera = $parteHelper->parteRecupera($parte);

        $form = $this->createForm(ParteFormType::class, $parte, array(
            'compound' => $alumnos,
        ));
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $fechaParte = \DateTime::createFromFormat('d/m/Y', $request->get('fecha'));
            $parte->setFecha($fechaParte);
            $em->persist($parte);
            $em->flush();
            $parteHelper->createSancionFromRequest($request, $parte);
            return $this->redirectToRoute("gestion_partes");
        }

        $accion = $repositoryAccionPartes->findOneByEstado($parte->getIdEstado());
        $sanciones = $repositorySanciones->getSancionesByPartes($parte);

        return $this->render('convivencia/partes/partesForm.html.twig', array(
            'form' => $form->createView(),
            'recupera' => $recupera,
            'cursos' => $cursos,
            'accion' => $accion,
            'parte' => $parte,
            'sanciones' => $sanciones
        ));
    }

    /**
     * @Route("/borrarParte/{id}", name="borrar_parte")
     * @Method({"GET"})
     */
    public function removeSancion(Partes $parte)
    {
        try {
            $em = $this->getDoctrine()->getManager();
            $em->remove($parte);
            $this->addFlash("parte", "Se ha eliminado correctamente");
            $em->flush();
        }catch (Exception $e) {
            $this->addFlash("parteError", "No se ha podido eliminar la sanción");
        }
        return $this->redirectToRoute("gestion_partes");
    }

}
