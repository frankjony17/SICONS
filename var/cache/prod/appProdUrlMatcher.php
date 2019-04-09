<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

            if (0 === strpos($pathinfo, '/admin/users')) {
                // admin_admin_listusers
                if ($pathinfo === '/admin/users/list') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::listUsersAction',  '_route' => 'admin_admin_listusers',);
                }

                // admin_admin_loadnewusers
                if ($pathinfo === '/admin/users/add') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\AdminController::loadNewUsersAction',  '_route' => 'admin_admin_loadnewusers',);
                }

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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
