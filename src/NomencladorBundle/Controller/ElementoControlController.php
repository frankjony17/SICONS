<?php

namespace NomencladorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use NomencladorBundle\Entity\ElementoControl;

/**
 * @Route("nomenclador/elemento_control/")
 */
class ElementoControlController extends Controller
{
    /**
     * List All values from ElementoControl
     *
     * @Route("list")
     */
    public function listAction()
    {
        $data = array();

        foreach($this->getDoctrine()->getManager()->getRepository('NomencladorBundle:ElementoControl')->findAll() as $value ) {
            $data[] = array(
                'id' => $value->getId(), 
                'nombre' => $value->getNombre(), 
                'descripcion' => $value->getDescripcion(), 
                'elemento_control_tipo_id' => $value->getElementoControlTipo()->getNombre()
            );
        }
        return new Response('({"total":"'.count($data).'","data":'.json_encode($data).'})');
    }

    /**
     * Add or Edit ElementoControl.
     *
     * @Route("add-edit")
     * @param Request $rq
     * @return Response
     */
    public function addEditAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        /* Add or Edit ElementoControl */
        if ($rq->get('id')) {
            $entity = $em->getRepository('NomencladorBundle:ElementoControl')->find($rq->get('id'));
        } else {
            $entity = new ElementoControl();
        }
        /* Sets */
        $entity->setNombre($rq->get('nombre'));
        $entity->setDescripcion($rq->get('descripcion'));
        if (is_numeric($rq->get('elemento_control_tipo_id'))) {
            $entity->setElementoControlTipo($em->getRepository('NomencladorBundle:ElementoControlTipo')->find($rq->get('elemento_control_tipo_id')));
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
        /* Delete ElementoControl */
        foreach (json_decode($rq->get('ids')) as $id) {
            $entity = $em->getRepository('NomencladorBundle:ElementoControl')->find($id);
            $em->remove($entity);
        }
        return new Response($em->flush());
    }
}