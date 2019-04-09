<?php

namespace AdminBundle\Controller;

use AdminBundle\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class RedirectController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $security = $this->get('security.authorization_checker');

        if ($security->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('_admin');
        }
        return $this->redirectToRoute('_logout');
    }
}
