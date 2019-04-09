<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use AdminBundle\Entity\Roles;

/**
 * @Route("admin/roles/")
 */
class RolesController extends Controller
{
    /**
     * List All values from Roles
     *
     * @Route("list")
     */
    public function listAction()
    {
        $data = array();

        foreach($this->getDoctrine()->getManager()->getRepository('AdminBundle:Roles')->findAll() as $value ) {
            $data[] = array(
                'id' => $value->getId(), 
                'name' => $value->getName(), 
                'role' => $value->getRole()
            );
        }
        return new Response('({"total":"'.count($data).'","data":'.json_encode($data).'})');
    }

    /**
     * Add or Edit Roles.
     *
     * @Route("add-edit")
     * @param Request $rq
     * @return Response
     */
    public function addEditAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        /* Add or Edit Roles */
        if ($rq->get('id')) {
            $entity = $em->getRepository('AdminBundle:Roles')->find($rq->get('id'));
        } else {
            $entity = new Roles();
        }
        /* Sets */
        $entity->setName($rq->get('name'));
        $entity->setRole($rq->get('role'));
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
        /* Delete Roles */
        foreach (json_decode($rq->get('ids')) as $id) {
            $entity = $em->getRepository('AdminBundle:Roles')->find($id);
            $em->remove($entity);
        }
        return new Response($em->flush());
    }
}
