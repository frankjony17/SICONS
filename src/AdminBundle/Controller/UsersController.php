<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use AdminBundle\Entity\Users;

/**
 * @Route("admin/users/")
 */
class UsersController extends Controller
{
    /**
     * List All values from Users
     *
     * @Route("list")
     */
    public function listAction()
    {
        $data = array();

        foreach($this->getDoctrine()->getManager()->getRepository('AdminBundle:Users')->findAll() as $value ) {
            $data[] = array(
                'id' => $value->getId(), 
                'username' => $value->getUsername(), 
                'password' => $value->getPassword(), 
                'email' => $value->getEmail(), 
                'date_last_login' => $value->getDateLastLogin(), 
                'is_active' => $value->getIsActive()
            );
        }
        return new Response('({"total":"'.count($data).'","data":'.json_encode($data).'})');
    }

    /**
     * Add or Edit Users.
     *
     * @Route("add-edit")
     * @param Request $rq
     * @return Response
     */
    public function addEditAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        /* Add or Edit Users */
        if ($rq->get('id')) {
            $entity = $em->getRepository('AdminBundle:Users')->find($rq->get('id'));
        } else {
            $entity = new Users();
        }
        /* Sets */
        $entity->setUsername($rq->get('username'));
        $entity->setPassword($rq->get('password'));
        $entity->setEmail($rq->get('email'));
        $entity->setDateLastLogin($rq->get('date_last_login'));
        $entity->setIsActive($rq->get('is_active'));
        /* Validate errors */
        if (count($errors = $this->get('validator')->validate($entity)) > 0) {
            $errorsString = (string) $errors; // Uses a __toString method on the $errors variable
            return new Response($errorsString);
        }
        $em->persist($entity);
        return new Response($em->flush());
    }
    
    /**
     * Remove
     *
     * @Route("remove")
     * @param Request $rq
     * @return Response
     */
    public function removeAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        /* Delete Users */
        foreach (json_decode($rq->get('ids')) as $id) {
            $entity = $em->getRepository('AdminBundle:Users')->find($id);
            $em->remove($entity);
        }
        return new Response($em->flush());
    }
}