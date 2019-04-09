<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // reporte_default_index
        if (rtrim($pathinfo, '/') === '/reporte') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'reporte_default_index');
            }

            return array (  '_controller' => 'ReporteBundle\\Controller\\DefaultController::indexAction',  '_route' => 'reporte_default_index',);
        }

        // proyecto_default_index
        if (rtrim($pathinfo, '/') === '/proyecto') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'proyecto_default_index');
            }

            return array (  '_controller' => 'ProyectoBundle\\Controller\\DefaultController::indexAction',  '_route' => 'proyecto_default_index',);
        }

        // nomenclador_default_index
        if (rtrim($pathinfo, '/') === '/nomenclador') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'nomenclador_default_index');
            }

            return array (  '_controller' => 'NomencladorBundle\\Controller\\DefaultController::indexAction',  '_route' => 'nomenclador_default_index',);
        }

        if (0 === strpos($pathinfo, '/admin')) {
            // _admin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_admin');
                }

                return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::indexAction',  '_route' => '_admin',);
            }

            // admin_admin_listrole
            if ($pathinfo === '/admin/roles/list') {
                return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::listRoleAction',  '_route' => 'admin_admin_listrole',);
            }

            // admin_admin_listusers
            if ($pathinfo === '/admin/users/list') {
                return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::listUsersAction',  '_route' => 'admin_admin_listusers',);
            }

            // admin_admin_d
            if ($pathinfo === '/admin/qqq') {
                return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::d',  '_route' => 'admin_admin_d',);
            }

        }

        // admin_redirect_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_redirect_index');
            }

            return array (  '_controller' => 'AdminBundle\\Controller\\RedirectController::indexAction',  '_route' => 'admin_redirect_index',);
        }

        if (0 === strpos($pathinfo, '/admin/roles')) {
            // admin_roles_list
            if ($pathinfo === '/admin/roles/list') {
                return array (  '_controller' => 'AdminBundle\\Controller\\RolesController::listAction',  '_route' => 'admin_roles_list',);
            }

            // admin_roles_addedit
            if ($pathinfo === '/admin/roles/add-edit') {
                return array (  '_controller' => 'AdminBundle\\Controller\\RolesController::addEditAction',  '_route' => 'admin_roles_addedit',);
            }

            // admin_roles_remove
            if ($pathinfo === '/admin/roles/remove') {
                return array (  '_controller' => 'AdminBundle\\Controller\\RolesController::removeAction',  '_route' => 'admin_roles_remove',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // _login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\SecuredController::loginAction',  '_route' => '_login',);
                }

                // _security_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                }

            }

            // _logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'AdminBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/admin/users')) {
            // admin_users_list
            if ($pathinfo === '/admin/users/list') {
                return array (  '_controller' => 'AdminBundle\\Controller\\UsersController::listAction',  '_route' => 'admin_users_list',);
            }

            // admin_users_addedit
            if ($pathinfo === '/admin/users/add-edit') {
                return array (  '_controller' => 'AdminBundle\\Controller\\UsersController::addEditAction',  '_route' => 'admin_users_addedit',);
            }

            // admin_users_remove
            if ($pathinfo === '/admin/users/remove') {
                return array (  '_controller' => 'AdminBundle\\Controller\\UsersController::removeAction',  '_route' => 'admin_users_remove',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
