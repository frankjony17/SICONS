<?php

namespace NomencladorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use NomencladorBundle\Entity\AspectosServicioIndicadores;

/**
 * @Route("nomenclador/aspectos_servicio_indicadores/")
 */
class AspectosServicioIndicadoresController extends Controller
{
    /**
     * List All values from AspectosServicioIndicadores
     *
     * @Route("list")
     */
    public function listAction()
    {
        $data = array();

        foreach($this->getDoctrine()->getManager()->getRepository('NomencladorBundle:AspectosServicioIndicadores')->findAll() as $value ) {
            $data[] = array(
                'id' => $value->getId(), 
                'aspectos' => $value->getAspectos(), 
                'cumplimiento' => $value->getCumplimiento(), 
                'puntos' => $value->getPuntos()
            );
        }
        return new Response('({"total":"'.count($data).'","data":'.json_encode($data).'})');
    }

    /**
     * Add or Edit AspectosServicioIndicadores.
     *
     * @Route("add-edit")
     * @param Request $rq
     * @return Response
     */
    public function addEditAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        /* Add or Edit AspectosServicioIndicadores */
        if ($rq->get('id')) {
            $entity = $em->getRepository('NomencladorBundle:AspectosServicioIndicadores')->find($rq->get('id'));
        } else {
            $entity = new AspectosServicioIndicadores();
        }
        /* Sets */
        $entity->setAspectos($rq->get('aspectos'));
        $entity->setCumplimiento($rq->get('cumplimiento'));
        $entity->setPuntos($rq->get('puntos'));
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
        /* Delete AspectosServicioIndicadores */
        foreach (json_decode($rq->get('ids')) as $id) {
            $entity = $em->getRepository('NomencladorBundle:AspectosServicioIndicadores')->find($id);
            $em->remove($entity);
        }
        return new Response($em->flush());
    }
}