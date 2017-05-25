<?php

namespace AppBundle\Controller;


use AppBundle\Entity\Alumno;
use AppBundle\Form\ImportFormType;
use AppBundle\Form\PerfilAlumnoFormType;
use AppBundle\Repository\AlumnoRepository;
use AppBundle\Repository\PartesRepository;
use AppBundle\Services\AlumnoHelper;
use AppBundle\Services\ImportHelper;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class AlumnoController extends Controller
{

    /**
     * @Route("/alumno", name="alumno")
     */
    public function alumnoAction()
    {

        /** @var AlumnoHelper $alumnoHelper */
        $alumnoHelper = $this->get('app.alumnoHelper');

        if (in_array("ROLE_ADMIN", $this->getUser()->getRoles()))
            return $this->redirectToRoute("admin");

        if (!$alumnoHelper->alumnoExists($this->getUser()))
            return $this->redirectToRoute('registrarAlumno');

        $userData = $alumnoHelper->getUserData(
            $alumnoHelper->getAlumnoLogueado($this->getUser()));
        return $this->render('convivencia/alumno/alumno.html.twig', array(
                'alumnoData' => $userData,
            )
        );
    }

    /**
     * @Route("/alumno/{id}", name="verAlumno", requirements={"id": "\d+"})
     */
    public function showAlumnoAction($id)
    {
        /** @var AlumnoHelper $alumnoHelper */
        $alumnoHelper = $this->get('app.alumnoHelper');
        if (!in_array("ROLE_ADMIN", $this->getUser()->getRoles()) && !in_array("ROLE_CONVIVENCIA", $this->getUser()->getRoles()))
            return $this->redirectToRoute("index");
        $em = $this->getDoctrine()->getManager();
        $alumno = $em->getRepository("AppBundle:Alumno")->findOneById($id);
        $userData = $alumnoHelper->getUserData($alumno);
        return $this->render('convivencia/alumno/alumno.html.twig', array(
                'alumnoData' => $userData,
                'userAdmin' => $this->getUser(),
            )
        );
    }

    /**
     * @Route("/admin/import", name="admin_import")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function importAlumnoAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(ImportFormType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var File $file */
            $file = $form['importar']->getData();
            /** @var ImportHelper $importHelper */
            $importHelper = $this->get('app.importHelper');
            $importHelper->importarAlumnos($file);
            $this->addFlash(
                'alumnos',
                'El fichero ha sido importado!'
            );
        }

        return $this->render('convivencia/admin/gestionAlumnos.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/registrarAlumno", name="registrarAlumno")
     * @Method({"GET", "POST"})
     */
    public function registrarAlumnoAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var AlumnoHelper $alumnoHelper */
        $alumnoHelper = $this->get('app.alumnoHelper');
        if ($alumnoHelper->alumnoExists($this->getUser()))
            $alumno = $alumnoHelper->getAlumnoLogueado($this->getUser());
        else
            $alumno = new Alumno();
        $form = $this->createForm(PerfilAlumnoFormType::class, $alumno);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            if (!$alumnoHelper->alumnoExists($this->getUser())) {
                $alumno->setIdUsuario($this->getUser());
                $alumno->setPuntos(12);
            } else
                $alumno->setPuntos($alumnoHelper->getPuntosAlumnoLogin($this->getUser()));
            $em->persist($alumno);
            $em->flush();
            return $this->redirectToRoute('alumno');
        }

        return $this->render('convivencia/alumno/registroAlumno.html.twig', array(
            'alumno' => $this->getUser(),
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/carnets", name="show_carnets")
     * @Method({"GET", "POST"})
     */
    public function showCarnets(Request $request)
    {
        $emConvivencia = $this->getDoctrine()->getManager();
        $paginator  = $this->get('knp_paginator');
        /** @var AlumnoRepository $repositoryAlumnos */
        $repositoryAlumnos = $emConvivencia->getRepository('AppBundle:Alumno');
        if ($request->get('like')!=null AND $request->get('like')!='')
            $alumnos = $repositoryAlumnos->getAlumnosLike($request->get('like'));
        else
            $alumnos = $repositoryAlumnos->getAlumnoOrderByPuntos();

        /** @var AlumnoHelper $alumnoHelper */
        $alumnoHelper = $this->get('app.alumnoHelper');
        $arrayCarnetData = $alumnoHelper->getArrayCarnetsData($alumnos);
        $arrayCarnetDataPaginator = $paginator->paginate(
            $arrayCarnetData, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            13/*limit per page*/
        );
            return $this->render('convivencia/alumno/carnets.html.twig', array(
                'arrayCarnetData' => $arrayCarnetDataPaginator,
            ));
        }

    }
