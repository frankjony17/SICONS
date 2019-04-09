<?php

namespace NomencladorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use NomencladorBundle\Entity\Persona;

/**
 * @Route("nomenclador/persona/")
 */
class PersonaController extends Controller
{
    /**
     * List All values from Persona
     *
     * @Route("list")
     */
    public function listAction()
    {
        $data = array();

        foreach($this->getDoctrine()->getManager()->getRepository('NomencladorBundle:Persona')->findAll() as $value ) {
            $data[] = array(
                'id' => $value->getId(), 
                'nombre_apellidos' => $value->getNombreApellidos(), 
                'telefonos' => $value->getTelefonos(), 
                'correo_electronico' => $value->getCorreoElectronico(), 
                'cargo_id' => $value->getCargo()->getId(),
                'entidad_id' => $value->getEntidad()->getId(),
                'persona_tipo_id' => $value->getPersonaTipo()->getId()
            );
        }
        return new Response('({"total":"'.count($data).'","data":'.json_encode($data).'})');
    }

    /**
     * Add or Edit Persona.
     *
     * @Route("add-edit")
     * @param Request $rq
     * @return Response
     */
    public function addEditAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        /* Add or Edit Persona */
        if ($rq->get('id')) {
            $entity = $em->getRepository('NomencladorBundle:Persona')->find($rq->get('id'));
        } else {
            $entity = new Persona();
        }
        /* Sets */
        $entity->setNombreApellidos($rq->get('nombre_apellidos'));
        $entity->setTelefonos($rq->get('telefonos'));
        $entity->setCorreoElectronico($rq->get('correo_electronico'));
        if (is_numeric($rq->get('cargo_id'))) {
            $entity->setCargo($em->getRepository('NomencladorBundle:Cargo')->find($rq->get('cargo_id')));
        }
        if (is_numeric($rq->get('entidad_id'))) {
            $entity->setEntidad($em->getRepository('NomencladorBundle:Entidad')->find($rq->get('entidad_id')));
        }
        if (is_numeric($rq->get('persona_tipo_id'))) {
            $entity->setPersonaTipo($em->getRepository('NomencladorBundle:PersonaTipo')->find($rq->get('persona_tipo_id')));
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
        /* Delete Persona */
        foreach (json_decode($rq->get('ids')) as $id) {
            $entity = $em->getRepository('NomencladorBundle:Persona')->find($id);
            $em->remove($entity);
        }
        return new Response($em->flush());
    }
}