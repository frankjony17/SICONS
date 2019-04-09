<?php

namespace NomencladorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use NomencladorBundle\Entity\EquipoTrabajoEspecialidad;

/**
 * @Route("nomenclador/equipo_trabajo_especialidad/")
 */
class EquipoTrabajoEspecialidadController extends Controller
{
    /**
     * List All values from EquipoTrabajoEspecialidad
     *
     * @Route("list")
     */
    public function listAction()
    {
        $data = array();

        foreach($this->getDoctrine()->getManager()->getRepository('NomencladorBundle:EquipoTrabajoEspecialidad')->findAll() as $value ) {
            $data[] = array(
                'id' => $value->getId(), 
                'nombre' => $value->getNombre(), 
                'descripcion' => $value->getDescripcion()
            );
        }
        return new Response('({"total":"'.count($data).'","data":'.json_encode($data).'})');
    }

    /**
     * List All values from EquipoTrabajoEspecialidad
     *
     * @Route("list2")
     * @param Request $rq
     * @return Response
     */
    public function list2Action(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        $equipoTrabajo = $em->getRepository('ProyectoBundle:EquipoTrabajo')->findOneBy(array(
            'persona' => $em->getRepository('NomencladorBundle:Persona')->find($rq->get("personaId")),
            'proyecto' => $em->getRepository('ProyectoBundle:Proyecto')->find($rq->get("proyectoId"))
        ));
        $equipoTrabajoEspecialidad = $em->getRepository('NomencladorBundle:EquipoTrabajoEspecialidad')->findAll();
        $array = $equipoTrabajo ? $equipoTrabajo->getEquipoTrabajoEspecialidadArray() : array();
        $especialidades = array();
        foreach ($equipoTrabajoEspecialidad as $ete) {
            $estado = \FALSE;

            if(in_array($ete->getNombre(), $array)) {
                $estado = \TRUE;
            }
            $especialidades[] = array(
                $equipoTrabajo ? $equipoTrabajo->getId() : '',
                $ete->getId(),
                $ete->getNombre(),
                $estado
            );
        }
        return new Response(json_encode($especialidades));
    }

    /**
     * Add or Edit EquipoTrabajoEspecialidad.
     *
     * @Route("add-edit")
     * @param Request $rq
     * @return Response
     */
    public function addEditAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        /* Add or Edit EquipoTrabajoEspecialidad */
        if ($rq->get('id')) {
            $entity = $em->getRepository('NomencladorBundle:EquipoTrabajoEspecialidad')->find($rq->get('id'));
        } else {
            $entity = new EquipoTrabajoEspecialidad();
        }
        /* Sets */
        $entity->setNombre($rq->get('nombre'));
        $entity->setDescripcion($rq->get('descripcion'));
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
        /* Delete EquipoTrabajoEspecialidad */
        foreach (json_decode($rq->get('ids')) as $id) {
            $entity = $em->getRepository('NomencladorBundle:EquipoTrabajoEspecialidad')->find($id);
            $em->remove($entity);
        }
        return new Response($em->flush());
    }
}