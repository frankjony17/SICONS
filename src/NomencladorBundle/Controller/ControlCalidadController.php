<?php

namespace NomencladorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use NomencladorBundle\Entity\ControlCalidad;

/**
 * @Route("nomenclador/control_calidad/")
 */
class ControlCalidadController extends Controller
{
    /**
     * List All values from ControlCalidad
     *
     * @Route("list")
     */
    public function listAction()
    {
        $data = array();

        foreach($this->getDoctrine()->getManager()->getRepository('NomencladorBundle:ControlCalidad')->findAll() as $value ) {
            $data[] = array(
                'id' => $value->getId(), 
                'nombre' => $value->getNombre(), 
                'descripcion' => $value->getDescripcion(), 
                'control_calidad_tipo_id' => $value->getControlCalidadTipo()->getNombre()
            );
        }
        return new Response('({"total":"'.count($data).'","data":'.json_encode($data).'})');
    }

    /**
     * Add or Edit ControlCalidad.
     *
     * @Route("add-edit")
     * @param Request $rq
     * @return Response
     */
    public function addEditAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        /* Add or Edit ControlCalidad */
        if ($rq->get('id')) {
            $entity = $em->getRepository('NomencladorBundle:ControlCalidad')->find($rq->get('id'));
        } else {
            $entity = new ControlCalidad();
        }
        /* Sets */
        $entity->setNombre($rq->get('nombre'));
        $entity->setDescripcion($rq->get('descripcion'));
        if (is_numeric($rq->get('control_calidad_tipo_id'))) {
            $entity->setControlCalidadTipo($em->getRepository('NomencladorBundle:ControlCalidadTipo')->find($rq->get('control_calidad_tipo_id')));
        }
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
        /* Delete ControlCalidad */
        foreach (json_decode($rq->get('ids')) as $id) {
            $entity = $em->getRepository('NomencladorBundle:ControlCalidad')->find($id);
            $em->remove($entity);
        }
        return new Response($em->flush());
    }
}