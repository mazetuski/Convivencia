<?php
/**
 * Created by PhpStorm.
 * User: maze
 * Date: 20/03/2017
 * Time: 17:01
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Alumno;
use AppBundle\Entity\Perfil;
use AppBundle\Entity\Usuarios;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ConvivenciaController
 * @Route("convivencia")
 */
class ConvivenciaController extends Controller
{
    /**
     * Lists all perfil entities.
     *
     * @Route("/login", name="login")
     * @Method({"GET", "POST"})
     */
    public function indexAction(Request $request)
    {

        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->redirectToRoute("loginCorrecto");
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
            'error'         => $error,
        ));
        /*
        $em = $this->getDoctrine()->getManager();

        $usuario = new Usuarios();

        $form = $this->createFormBuilder($usuario)
            ->add("Usuario")
            ->add("Password", PasswordType::class, array('required' => false))
            ->add("registro", SubmitType::class)
            ->add("login", SubmitType::class)
            ->getForm();



        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $usuario = $form->getData();
            if($form->get("registro")->isClicked())
                return $this->redirectToRoute("convivencia_registro");
            else{
                $usuarioLogeado = $em->getRepository("AppBundle:Usuarios")
                    ->getUsuario($usuario->getUsuario(), $usuario->getPassword());
                $perfil = $em->getRepository("AppBundle:Perfil")
                    ->getPerfil($usuarioLogeado->getIdPerfil());
                return $this->render('convivencia/loginCorrecto.html.twig', array(
                    'perfil' => $perfil,
                    'usuario' => $usuario
                ));
            }
        }

        return $this->render('convivencia/index.html.twig', array(
            'form' => $form->createView(),
        ));
        */
    }

    /**
     * @Route("/registro", name="convivencia_registro")
     * @Method({"GET", "POST"})
     */
    public function registroAction(Request $request)
    {

        $usuario = new Usuarios();
        $form = $this->createFormBuilder($usuario)
            ->add('Usuario')
            ->add('plainPassword', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array('label' => 'Password'),
                'second_options' => array('label' => 'Repeat Password'),
            ))
            ->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            // Codificamos la contraseña en texto plano accediendo al 'encoder' que habíamos indicado en la configuración
            $password = $this->get('security.password_encoder')
                ->encodePassword($usuario, $usuario->getPlainPassword());

            // Establecemos la contraseña real ya codificada al usuario
            $usuario->setPassword($password);

            // Persistimos la entidad como cualquier otra
            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush();

            // Redigirimos a la pantalla de login para que acceda el nuevo usuario
            return $this->redirectToRoute('login');
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
     * @Route("/loginCorrecto", name="loginCorrecto")
     */
    public function loginCorrectoAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        /** @var  $alumno */
        $alumno = $em->getRepository('AppBundle:Alumno')
            ->getAlumno($this->getUser()->getIdUsuario());

        return $this->render('convivencia/loginCorrecto.html.twig', array(
                'alumno' =>$alumno,
            )
        );
    }
}