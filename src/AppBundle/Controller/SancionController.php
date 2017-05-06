<?php

namespace AppBundle\Controller;

use AppBundle\Form\SancionFormType;
use AppBundle\Repository\SancionesRepository;
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

        $sancion = $crearSancionHelper->getSancionFromRequest($request);
        $form = $this->createForm(SancionFormType::class, $sancion);
        $form->handleRequest($request);
        $detalles = $crearSancionHelper->getDetallesFromSancion($sancion);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($sancion);
            $em->flush();
            $crearSancionHelper->creaDetallesFromSancion($sancion, $request);
            return $this->redirectToRoute("gestion_sanciones");
        }

        return $this->render("convivencia/sanciones/sancionesForm.html.twig", array(
            'form' => $form->createView(),
            'detalles' => $detalles,
            'horas' => $crearSancionHelper::HORAS_CLASE,
        ));
    }

    /**
     * @Route("/sanciones", name="gestion_sanciones")
     */
    public function showGestionSanciones()
    {

        $em = $this->getDoctrine()->getManager();
        /** @var SancionesRepository $sancionesRepository */
        $sancionesRepository = $em->getRepository('AppBundle:Sanciones');
        $sanciones = $sancionesRepository->findAll();

        return $this->render("convivencia/sanciones/sanciones.html.twig", array(
            'sanciones' => $sanciones,
            'user' => $this->getUser(),
        ));
    }
}
