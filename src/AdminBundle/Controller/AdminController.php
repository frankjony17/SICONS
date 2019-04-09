<?php

namespace AdminBundle\Controller;

use AdminBundle\Entity\Roles;
use AdminBundle\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("admin/")
 */
class AdminController extends Controller
{
    /**
     * @Route("", name="_admin")
     * @Template()
     */
    public function indexAction()
    {
        return array('session' => $this->get('session'));
    }

    /**
     * @Route("roles/list")
     */
    public function listRoleAction()
    {
        $em = $this->getDoctrine()->getManager();
        $roles = $this->get('scs.util')->toArray($em->getRepository('AdminBundle:Roles')->findAll());

        if (count($roles) === 0) {
            $roles = array(
                array('name' => 'admin', 'role' => 'ROLE_ADMIN')
            );
            foreach ($roles as $value) {
                $role = new Roles();
                $role->setName($value['name']);
                $role->setRole($value['role']);
                $em->persist($role);
            }
            $em->flush();
            $roles = $this->get('scs.util')->toArray($em->getRepository('AdminBundle:Roles')->findAll());
        }
        return new Response('({"total":"'.count($roles).'","data":'.json_encode($roles).'})');
    }

    /**
     * @Route("users/list")
     */
    public function listUsersAction()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $this->get('scs.util')->toArray($em->getRepository('AdminBundle:Users')->findAll());
        return new Response('({"total":"'.count($users).'","data":'.json_encode($users).'})');
    }

    /**
     * @Route("roles/list_roles_users")
     * @param Request $rq
     * @return Response
     */
    public function listRoleUsersAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();

        $roles = $em->getRepository('AdminBundle:Roles')->findAll();
        $users = $em->getRepository('AdminBundle:Users')->find($rq->get("Id"));

        $users_roles = array();

        foreach ($roles as $rol) {
            $estado = \FALSE;

            if(in_array($rol->getRole(), $users->getRoles())) {
                $estado = \TRUE;
            }
            $users_roles[] = array(
                'id'     => $rol->getId(),
                'name'   => strtoupper($rol->getName()),
                'role'   => $rol->getRole(),
                'estado' => $estado
            );
        }
        return new Response('({"total":"'.count($users_roles).'","data":'.json_encode($users_roles).'})');
    }

    /**
     * @Route("users/add")
     * @param Request $rq
     * @return Response
     */
    public function loadNewUsersAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();

        $users = new Users();

        $encoder = $this->container->get('security.password_encoder');
        $encoded = $encoder->encodePassword($users, $rq->get('password'));

        $users->setUsername($rq->get('username'));
        $users->setPassword($encoded);
        $users->setEmail($rq->get('email'));
        $users->setIsActive($rq->get('is_active'));

        $em->persist($users);

        return new Response($em->flush());
    }

    /**
     * @Route("users/active_users")
     * @param Request $rq
     * @return Response
     */
    public function activeUsersAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        $us = $em->getRepository('AdminBundle:Users')->find($rq->get("Id"));

        if ($us->getIsActive()) {
            $us->setIsActive(\FALSE);
        } else {
            $us->setIsActive(\TRUE);
        }
        $em->persist($us);

        return new Response($em->flush());
    }

    /**
     * @Route("users/edit_users")
     * @param Request $rq
     * @return Response
     */
    public function editUsersAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        $us = $em->getRepository('AdminBundle:Users')->find($rq->get("Id"));

        $us->setUsername($rq->get("Alias"));
        $us->setEmail($rq->get("Correo"));

        $val = $em->getRepository('AdminBundle:Users')->countUsers($rq->get("Id"), $rq->get("Alias"), $rq->get("Correo"));

        if (count($val) > 0) {
            return new Response('Unico');
        }
        return new Response($em->flush($us));
    }

    /**
     * @Route("users/add_roles_users")
     * @param Request $rq
     * @return Response
     */
    public function addRolesUsersAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        $us = $em->getRepository('AdminBundle:Users')->find($rq->get("Id"));

        foreach (json_decode($rq->get('Roles')) as $val)
        {
            $rol = $em->getRepository('AdminBundle:Roles')->find($val->id);

            if ($val->estado == true) {
                if (!in_array($rol->getRole(), $us->getRoles())) {
                    $us->addRole($rol);
                }
            }
            else {
                if (in_array($rol->getRole(), $us->getRoles())) {
                    $us->removeRole($rol);
                }
            }
        }
        return new Response($em->flush());
    }
}