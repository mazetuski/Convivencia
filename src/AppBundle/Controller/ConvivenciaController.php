<?php
/**
 * Created by PhpStorm.
 * User: maze
 * Date: 20/03/2017
 * Time: 17:01
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Alumno;
use AppBundle\Entity\Cursos;
use AppBundle\Entity\Partes;
use AppBundle\Entity\Sanciones;
use AppBundle\Entity\Usuarios;
use AppBundle\Form\ImportFormType;
use AppBundle\Form\ParteFormType;
use AppBundle\Form\PerfilAlumnoFormType;
use AppBundle\Form\RegistroFormType;
use AppBundle\Form\SancionFormType;
use AppBundle\Repository\CursosRepository;
use AppBundle\Repository\PartesRepository;
use AppBundle\Repository\SancionesRepository;
use AppBundle\Repository\UsuariosRepository;
use AppBundle\Services\AlumnoHelper;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Encoder\CsvEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Class ConvivenciaController
 * @Route("convivencia")
 */
class ConvivenciaController extends Controller
{

    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        if (in_array("ROLE_ADMIN", $this->getUser()->getRoles()))
            return $this->redirectToRoute("admin");
        if (in_array("ROLE_USER", $this->getUser()->getRoles()))
            return $this->redirectToRoute("alumno");
    }

    /**
     * Lists all perfil entities.
     *
     * @Route("/login", name="login")
     * @Method({"GET", "POST"})
     */
    public function loginAction()
    {

        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->redirectToRoute("alumno");
        }

        // Recupera el servicio de autenticación
        $authenticationUtils = $this->get('security.authentication_utils');

        // Recupera, si existe, el último error al intentar hacer login
        $error = $authenticationUtils->getLastAuthenticationError();

        // Recupera el último nombre de usuario introducido
        $lastUsername = $authenticationUtils->getLastUsername();

        // Renderiza la plantilla, enviándole, si existen, el último error y nombre de usuario
        return $this->render('convivencia/index.html.twig', array(
            'last_username' => $lastUsername,
            'error' => $error,
        ));

    }

    /**
     * @Route("/registro", name="convivencia_registro")
     * @Method({"GET", "POST"})
     */
    public function registroAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $usuario = new Usuarios();
        $form = $this->createForm(RegistroFormType::class, $usuario);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Codificamos la contraseña en texto plano accediendo al 'encoder' que habíamos indicado en la configuración
            $password = $this->get('security.password_encoder')
                ->encodePassword($usuario, $usuario->getPlainPassword());
            // Establecemos la contraseña real ya codificada al usuario
            $usuario->setPassword($password);

            // Persistimos la entidad como cualquier otra
            $em->persist($usuario);
            $em->flush();

            // Redigirimos a la pantalla del admin
            return $this->redirectToRoute('admin');
        }

        return $this->render('convivencia/registro.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction(Request $request)
    {

    }

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

        return $this->render('convivencia/alumno/alumno.html.twig', array(
                'alumno' => $alumnoHelper->getAlumnoLogueado($this->getUser()),
            )
        );
    }

    /**
     * @Route("/alumno/{id}", name="verAlumno", requirements={"id": "\d+"})
     */
    public function showAlumnoAction($id)
    {

        if (!in_array("ROLE_ADMIN", $this->getUser()->getRoles()) && !in_array("ROLE_CONVIVENCIA", $this->getUser()->getRoles()))
            return $this->redirectToRoute("index");
        $em = $this->getDoctrine()->getManager();
        $alumno = $em->getRepository("AppBundle:Alumno")->findOneById($id);
        return $this->render('convivencia/alumno/alumno.html.twig', array(
                'alumno' => $alumno,
                'userAdmin' => $this->getUser(),
            )
        );
    }

    /**
     * @Route("/profesor/{id}", name="verProfesor", requirements={"id": "\d+"})
     */
    public function showProfesorAction($id)
    {
        if (!in_array("ROLE_ADMIN", $this->getUser()->getRoles()) && !in_array("ROLE_CONVIVENCIA", $this->getUser()->getRoles()))
            return $this->redirectToRoute("index");
        $em = $this->getDoctrine()->getManager();
        $profesor = $em->getRepository("AppBundle:Profesores")->findOneById($id);
        return $this->render('convivencia/profesor/profesor.html.twig', array(
                'profesor' => $profesor,
                'userAdmin' => $this->getUser(),
            )
        );
    }

    /**
     * @Route("/admin", name="admin")
     */
    public function adminAction()
    {
        return $this->render('convivencia/admin/admin.html.twig');
    }

    /**
     * @Route("/admin/import", name="admin_import")
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function importAlumnoAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(ImportFormType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            /** @var File $file */
            $file = $form['importar']->getData();
            /** @var CursosRepository $repositoryCurso */
            $repositoryCurso = $em->getRepository('AppBundle:Cursos');
            /** @var UsuariosRepository $repositoryUsuarios */
            $repositoryUsuarios = $em->getRepository('AppBundle:Usuarios');
            if (($handle = fopen($file->getRealPath(), "r")) !== FALSE) {
                while(($row = fgetcsv($handle)) !== FALSE) {
                    if(count($row)>1) {
                        $alumno = new Alumno();
                        $alumno->setApellido1($row[0]);
                        $alumno->setApellido2($row[1]);
                        $alumno->setNombre($row[2]);
                        //TODO: BUSCAR REPOSITORIO CURSO Y ASIGNAR ID.

                        /** @var Cursos $curso */
                        $curso = $repositoryCurso->findOneByCurso($row[3]);
                        if ($curso != null) $alumno->setIdCurso($curso);
                        $alumno->setTelefono($row[4]);
                        $alumno->setEmail($row[5]);
                        $alumno->setDireccion($row[8]);
                        $alumno->setCodigoPostal($row[9]);
                        $alumno->setPuntos(0);
                        $alumno->setFoto('');
                        $user = new Usuarios();
                        $userNombre = substr($alumno->getNombre(), 0, 2) . substr($alumno->getApellido1(), 0, 2) . substr($alumno->getApellido2(), 0, 2);
                        $userNombre = strtr($userNombre, 'ÁÀÂÄÃÅÇÉÈÊËÍÏÎÌÑÓÒÔÖÕÚÙÛÜÝ', 'AAAAAACEEEEEIIIINOOOOOUUUUY');
                        $userNombre = strtr($userNombre, 'áàâäãåçéèêëíìîïñóòôöõúùûüýÿ', 'aaaaaaceeeeiiiinooooouuuuyy');
                        $user->setUsuario(mb_strtolower($userNombre));
                        $password = $this->get('security.password_encoder')
                            ->encodePassword($user, 'usuario');
                        $user->setPassword($password);
                        $user->setRoles(['ROLE_USER']);

                        if($repositoryUsuarios->findOneByUsuario($user->getUsuario()) == null) {
                            $em->persist($user);
                            $em->flush();
                            $alumno->setIdUsuario($user);
                            $em->persist($alumno);
                            $em->flush();
                        }
                    }
                }
            }
        }

        return $this->render('convivencia/admin/gestionAlumnos.html.twig', array(
            'form' =>$form->createView(),
        ));
    }

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
     * @Route("/nuevoParte", name="nuevoParte")
     * @Method({"GET", "POST"})
     */
    public function crearParteAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var PartesRepository $repositoryPartes */
        $repositoryPartes = $em->getRepository('AppBundle:Partes');
        if ($request->query->has('idParte'))
            $parte = $repositoryPartes->getParteById($request->get('idParte'));
        else
            $parte = new Partes();
        $form = $this->createForm(ParteFormType::class, $parte);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($parte);
            $em->flush();
            return $this->redirectToRoute("gestion_partes");
        }

        return $this->render('convivencia/partes/partesForm.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/nuevaSancion", name="nueva_sancion")
     * @Method({"GET", "POST"})
     */
    public function crearSancionAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        /** @var SancionesRepository $repositorySancion */
        $repositorySancion = $em->getRepository("AppBundle:Sanciones");
        if ($request->query->has('idSancion'))
            $sancion = $repositorySancion->findOneById($request->get('idSancion'));
        else
            $sancion = new Sanciones();
        $form = $this->createForm(SancionFormType::class, $sancion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($sancion);
            $em->flush();
            return $this->redirectToRoute("gestion_sanciones");
        }

        return $this->render("convivencia/sanciones/sancionesForm.html.twig", array(
            "form" => $form->createView(),
        ));
    }
}