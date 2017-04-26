<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/convivencia')) {
            // index
            if (rtrim($pathinfo, '/') === '/convivencia') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::indexAction',  '_route' => 'index',);
            }

            // login
            if ($pathinfo === '/convivencia/login') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_login;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::loginAction',  '_route' => 'login',);
            }
            not_login:

            // convivencia_registro
            if ($pathinfo === '/convivencia/registro') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_convivencia_registro;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::registroAction',  '_route' => 'convivencia_registro',);
            }
            not_convivencia_registro:

            // logout
            if ($pathinfo === '/convivencia/logout') {
                return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::logoutAction',  '_route' => 'logout',);
            }

            if (0 === strpos($pathinfo, '/convivencia/alumno')) {
                // alumno
                if ($pathinfo === '/convivencia/alumno') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::alumnoAction',  '_route' => 'alumno',);
                }

                // verAlumno
                if (preg_match('#^/convivencia/alumno/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'verAlumno')), array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::showAlumnoAction',));
                }

            }

            // verProfesor
            if (0 === strpos($pathinfo, '/convivencia/profesor') && preg_match('#^/convivencia/profesor/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'verProfesor')), array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::showProfesorAction',));
            }

            if (0 === strpos($pathinfo, '/convivencia/admin')) {
                // admin
                if ($pathinfo === '/convivencia/admin') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::adminAction',  '_route' => 'admin',);
                }

                // admin_import
                if ($pathinfo === '/convivencia/admin/import') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::importAlumnoAction',  '_route' => 'admin_import',);
                }

            }

            // gestion_partes
            if ($pathinfo === '/convivencia/partes') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_gestion_partes;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::showGestionPartes',  '_route' => 'gestion_partes',);
            }
            not_gestion_partes:

            // gestion_sanciones
            if ($pathinfo === '/convivencia/sanciones') {
                return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::showGestionSanciones',  '_route' => 'gestion_sanciones',);
            }

            // registrarAlumno
            if ($pathinfo === '/convivencia/registrarAlumno') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_registrarAlumno;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::registrarAlumnoAction',  '_route' => 'registrarAlumno',);
            }
            not_registrarAlumno:

            if (0 === strpos($pathinfo, '/convivencia/nuev')) {
                // nuevoParte
                if ($pathinfo === '/convivencia/nuevoParte') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_nuevoParte;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::crearParteAction',  '_route' => 'nuevoParte',);
                }
                not_nuevoParte:

                // nueva_sancion
                if ($pathinfo === '/convivencia/nuevaSancion') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_nueva_sancion;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ConvivenciaController::crearSancionAction',  '_route' => 'nueva_sancion',);
                }
                not_nueva_sancion:

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/perfil')) {
            // perfil_index
            if (rtrim($pathinfo, '/') === '/perfil') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_perfil_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'perfil_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\PerfilController::indexAction',  '_route' => 'perfil_index',);
            }
            not_perfil_index:

            // perfil_show
            if (preg_match('#^/perfil/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_perfil_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'perfil_show')), array (  '_controller' => 'AppBundle\\Controller\\PerfilController::showAction',));
            }
            not_perfil_show:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
