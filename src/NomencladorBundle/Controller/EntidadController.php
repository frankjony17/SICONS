<?php

namespace NomencladorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use NomencladorBundle\Entity\Entidad;

/**
 * @Route("nomenclador/entidad/")
 */
class EntidadController extends Controller
{
    /**
     * List All values from Entidad
     *
     * @Route("list")
     */
    public function listAction()
    {
        $data = array();

        foreach($this->getDoctrine()->getManager()->getRepository('NomencladorBundle:Entidad')->findAll() as $value ) {
            $data[] = array(
                'id' => $value->getId(), 
                'nombre' => $value->getNombre(), 
                'telefonos' => $value->getTelefonos(), 
                'correo_electronico' => $value->getCorreoElectronico(), 
                'direccion' => $value->getDireccion(), 
                'fax' => $value->getFax()
            );
        }
        return new Response('({"total":"'.count($data).'","data":'.json_encode($data).'})');
    }

    /**
     * Add or Edit Entidad.
     *
     * @Route("add-edit")
     * @param Request $rq
     * @return Response
     */
    public function addEditAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        /* Add or Edit Entidad */
        if ($rq->get('id')) {
            $entity = $em->getRepository('NomencladorBundle:Entidad')->find($rq->get('id'));
        } else {
            $entity = new Entidad();
        }
        /* Sets */
        $entity->setNombre($rq->get('nombre'));
        $entity->setTelefonos($rq->get('telefonos'));
        $entity->setCorreoElectronico($rq->get('correo_electronico'));
        $entity->setDireccion($rq->get('direccion'));
        $entity->setFax($rq->get('fax'));
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
        /* Delete Entidad */
        foreach (json_decode($rq->get('ids')) as $id) {
            $entity = $em->getRepository('NomencladorBundle:Entidad')->find($id);
            $em->remove($entity);
        }
        return new Response($em->flush());
    }
}