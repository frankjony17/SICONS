<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $checker = $this->get('security.authorization_checker');

        if ($checker->isGranted('ROLE_ADMIN')) {
            return new RedirectResponse($this->generateUrl('_admin'));
        }
        if ($checker->isGranted('ROLE_JEFE_DISENNO')) {
            return $this->render('ProyectoBundle:JefeDisenno:index.html.twig');
        }
        if ($checker->isGranted('ROLE_EQUIPO_TRABAJO')) {
            return $this->render('ProyectoBundle:EquipoTrabajo:index.html.twig');
        }
        if ($checker->isGranted('ROLE_ESPECIALISTA_CALIDAD')) {
            return $this->render('ProyectoBundle:EspecialistaCalidad:index.html.twig');
        }
    }
}
