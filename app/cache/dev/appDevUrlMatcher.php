<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/software')) {
            // software
            if (rtrim($pathinfo, '/') === '/software') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'software');
                }

                return array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\softwareController::indexAction',  '_route' => 'software',);
            }

            // software_show
            if (preg_match('#^/software/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'software_show')), array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\softwareController::showAction',));
            }

            // software_edit
            if (preg_match('#^/software/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'software_edit')), array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\softwareController::editAction',));
            }

            // software_update
            if (preg_match('#^/software/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_software_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'software_update')), array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\softwareController::updateAction',));
            }
            not_software_update:

            // software_delete
            if (preg_match('#^/software/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_software_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'software_delete')), array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\softwareController::deleteAction',));
            }
            not_software_delete:

            if (0 === strpos($pathinfo, '/software/linkSoftware')) {
                // software_buscar_maquina
                if ($pathinfo === '/software/linkSoftware') {
                    return array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\softwareController::buscarMaquinaAction',  '_route' => 'software_buscar_maquina',);
                }

                // software_responder_maquina
                if ($pathinfo === '/software/linkSoftwareRespuesta') {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_software_responder_maquina;
                    }

                    return array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\softwareController::responderMaquinaAction',  '_route' => 'software_responder_maquina',);
                }
                not_software_responder_maquina:

            }

            if (0 === strpos($pathinfo, '/software/conSeguridad')) {
                // software_new
                if ($pathinfo === '/software/conSeguridad/new') {
                    return array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\softwareController::newAction',  '_route' => 'software_new',);
                }

                // software_create
                if ($pathinfo === '/software/conSeguridad/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_software_create;
                    }

                    return array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\softwareController::createAction',  '_route' => 'software_create',);
                }
                not_software_create:

            }

        }

        if (0 === strpos($pathinfo, '/maquinasvirtuales')) {
            // maquinasvirtuales
            if (rtrim($pathinfo, '/') === '/maquinasvirtuales') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'maquinasvirtuales');
                }

                return array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\maquinasvirtualesController::indexAction',  '_route' => 'maquinasvirtuales',);
            }

            // maquinasvirtuales_show
            if (preg_match('#^/maquinasvirtuales/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'maquinasvirtuales_show')), array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\maquinasvirtualesController::showAction',));
            }

            // maquinasvirtuales_edit
            if (preg_match('#^/maquinasvirtuales/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'maquinasvirtuales_edit')), array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\maquinasvirtualesController::editAction',));
            }

            // maquinasvirtuales_update
            if (preg_match('#^/maquinasvirtuales/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_maquinasvirtuales_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'maquinasvirtuales_update')), array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\maquinasvirtualesController::updateAction',));
            }
            not_maquinasvirtuales_update:

            // maquinasvirtuales_delete
            if (preg_match('#^/maquinasvirtuales/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_maquinasvirtuales_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'maquinasvirtuales_delete')), array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\maquinasvirtualesController::deleteAction',));
            }
            not_maquinasvirtuales_delete:

            if (0 === strpos($pathinfo, '/maquinasvirtuales/conSeguridad')) {
                // maquinasvirtuales_new
                if ($pathinfo === '/maquinasvirtuales/conSeguridad/new') {
                    return array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\maquinasvirtualesController::newAction',  '_route' => 'maquinasvirtuales_new',);
                }

                // maquinasvirtuales_create
                if ($pathinfo === '/maquinasvirtuales/conSeguridad/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_maquinasvirtuales_create;
                    }

                    return array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\maquinasvirtualesController::createAction',  '_route' => 'maquinasvirtuales_create',);
                }
                not_maquinasvirtuales_create:

            }

        }

        if (0 === strpos($pathinfo, '/hardware')) {
            // hardware
            if (rtrim($pathinfo, '/') === '/hardware') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'hardware');
                }

                return array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\hardwareController::indexAction',  '_route' => 'hardware',);
            }

            // hardware_show
            if (preg_match('#^/hardware/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hardware_show')), array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\hardwareController::showAction',));
            }

            // hardware_edit
            if (preg_match('#^/hardware/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hardware_edit')), array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\hardwareController::editAction',));
            }

            // hardware_update
            if (preg_match('#^/hardware/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_hardware_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hardware_update')), array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\hardwareController::updateAction',));
            }
            not_hardware_update:

            // hardware_delete
            if (preg_match('#^/hardware/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_hardware_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'hardware_delete')), array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\hardwareController::deleteAction',));
            }
            not_hardware_delete:

            // hardware_buscar_hardware
            if ($pathinfo === '/hardware/linkHardware') {
                return array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\hardwareController::buscarHardwareAction',  '_route' => 'hardware_buscar_hardware',);
            }

            // hardware_responder_hardware
            if ($pathinfo === '/hardware/responderhardware') {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_hardware_responder_hardware;
                }

                return array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\hardwareController::responderHardwareAction',  '_route' => 'hardware_responder_hardware',);
            }
            not_hardware_responder_hardware:

            if (0 === strpos($pathinfo, '/hardware/conSeguridad')) {
                // hardware_new
                if ($pathinfo === '/hardware/conSeguridad/new') {
                    return array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\hardwareController::newAction',  '_route' => 'hardware_new',);
                }

                // hardware_create
                if ($pathinfo === '/hardware/conSeguridad/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_hardware_create;
                    }

                    return array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\hardwareController::createAction',  '_route' => 'hardware_create',);
                }
                not_hardware_create:

            }

        }

        if (0 === strpos($pathinfo, '/sistemas')) {
            // sistemas
            if (rtrim($pathinfo, '/') === '/sistemas') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sistemas');
                }

                return array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\sistemasController::indexAction',  '_route' => 'sistemas',);
            }

            // sistemas_show
            if (preg_match('#^/sistemas/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sistemas_show')), array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\sistemasController::showAction',));
            }

            // sistemas_new
            if ($pathinfo === '/sistemas/new') {
                return array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\sistemasController::newAction',  '_route' => 'sistemas_new',);
            }

            // sistemas_create
            if ($pathinfo === '/sistemas/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_sistemas_create;
                }

                return array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\sistemasController::createAction',  '_route' => 'sistemas_create',);
            }
            not_sistemas_create:

            // sistemas_edit
            if (preg_match('#^/sistemas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sistemas_edit')), array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\sistemasController::editAction',));
            }

            // sistemas_update
            if (preg_match('#^/sistemas/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_sistemas_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sistemas_update')), array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\sistemasController::updateAction',));
            }
            not_sistemas_update:

            // sistemas_delete
            if (preg_match('#^/sistemas/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_sistemas_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sistemas_delete')), array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\sistemasController::deleteAction',));
            }
            not_sistemas_delete:

            // sistemas_crear
            if ($pathinfo === '/sistemas/crear') {
                return array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\sistemasController::crearAction',  '_route' => 'sistemas_crear',);
            }

        }

        // uni_sistemas_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'uni_sistemas_homepage')), array (  '_controller' => 'uniSistemas\\Bundle\\Controller\\DefaultController::indexAction',));
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
