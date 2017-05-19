<?php
/**
 * Created by PhpStorm.
 * User: maze
 * Date: 20/03/2017
 * Time: 17:01
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Usuarios;
use AppBundle\Form\RegistroFormType;
use AppBundle\Repository\DiarioAulaConvivenciaRepository;
use AppBundle\Repository\PartesRepository;
use AppBundle\Repository\SancionesRepository;
use AppBundle\Services\CrearSancionHelper;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ConvivenciaController
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
    public function logoutAction()
    {

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
        $em = $this->getDoctrine()->getManager();
        /** @var CrearSancionHelper $sancionHelper */
        $sancionHelper = $this->get('app.crearSancionHelper');
        /** @var PartesRepository $repositoryPartes */
        $repositoryPartes = $em->getRepository('AppBundle:Partes');
        /** @var SancionesRepository $repositorySanciones */
        $repositorySanciones = $em->getRepository('AppBundle:Sanciones');
        /** @var DiarioAulaConvivenciaRepository $repositoryDiario */
        $repositoryDiario = $em->getRepository('AppBundle:DiarioAulaConvivencia');
        $partesIniciados = $repositoryPartes->getPartesByEstado('Iniciado');
        $sancionesIniciadas = $repositorySanciones->getSancionesPorEstado();
        $fecha = new \DateTime();
        $hora = $sancionHelper->getHoraFromDate($fecha);
        $diarioNow = $repositoryDiario->getDiarioByFechaYHora($fecha, $hora);
        return $this->render('convivencia/admin/admin.html.twig', array(
            'partesIniciados' => count($partesIniciados),
            'sancionesIniciadas' => count($sancionesIniciadas),
            'diarioNow' => count($diarioNow),
        ));
    }

    /**
     * @Route("/diario", name="admin_diario_aula")
     */
    public function gestionDiarioAula()
    {
        return $this->render("convivencia/diarioAulaConvivencia/diarioAula.html.twig");
    }

}