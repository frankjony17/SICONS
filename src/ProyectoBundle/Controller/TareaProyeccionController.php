<?php

namespace ProyectoBundle\Controller;

use ProyectoBundle\Entity\TareaProyeccion;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("tarea/proyeccion/")
 */
class TareaProyeccionController extends Controller
{
    /**
     * List All values from Tarea de Proyeccion
     *
     * @Route("list")
     * @param Request $rq
     * @return Response
     */
    public function listAction(Request $rq)
    {
        $tm = array();
        $em = $this->getDoctrine()->getManager();

        $data = $em->getRepository('ProyectoBundle:TareaProyeccion')->findBy(array(
           'proyecto' => $em->getRepository('ProyectoBundle:Proyecto')->find($rq->get('proyectoId'))
        ));
        foreach ($data as $val) {
            $tm[] = array(
                'id' => $val->getId(),
                'tarea' => $val->getElementoControl()->getNombre(),
                'observacion' => $val->getObservacion(),
                'estado' => $val->getEstado(),
                'codigo' => $val->getProyecto()->getCodigo(),
                'nombre' => $val->getProyecto()->getNombre(),
                'descripcion' => $val->getProyecto()->getDescripcion(),
                'proyecto_id' => $val->getProyecto()->getId()
            );
        }
        return new Response('({"total":"'.count($tm).'","data":'.json_encode($tm).'})');
    }

    /**
     * List All values from Tarea de Proyeccion Proyecto
     *
     * @Route("nomenclador/tarea/list")
     * @param Request $rq
     * @return Response
     */
    public function listTareaProyeccionProyectoAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();

        $data = $em->getRepository('ProyectoBundle:Proyecto')->findTareaProyeccionProyectos($rq->get('limit'), $rq->get('start'));
        $cant = $em->getRepository('ProyectoBundle:Proyecto')->findCantidadTareaProyeccionProyectos();

        return new Response('({"total":"'.$cant.'","data":'.json_encode($data).'})');
    }

    /**
     * Editar Tarea de Proyeccion
     *
     * @Route("edit-tarea-proyeccion")
     * @param Request $rq
     * @return Response
     */
    public function editTareaProyeccionAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        $tareaProyeccion = $em->getRepository('ProyectoBundle:TareaProyeccion')->find($rq->get('id'));
        $tareaProyeccion->setEstado($rq->get('estado'));
        $tareaProyeccion->setObservacion($rq->get('observacion'));
        $em->persist($tareaProyeccion);
        $em->flush();
        return new Response('');
    }

    /**
     * Asignar Tarea de Proyeccion to Proyecto
     *
     * @Route("add-tarea-proyecto")
     * @param Request $rq
     * @return Response
     */
    public function addTareaProyeccionProyectoAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        $proyecto = $em->getRepository('ProyectoBundle:Proyecto')->find($rq->get('id'));
        $elementosControl = $em->getRepository('NomencladorBundle:ElementoControl')->findBy(array(
            'elementoControlTipo' => $em->getRepository('NomencladorBundle:ElementoControlTipo')->findOneBy(array(
                'nombre' => $proyecto->getProyectoTipo()->getNombre() === "agricola" ? "tarea_proyeccion_agricola" : "tarea_proyeccion_ingenieria"
            ))
        ));
        foreach ($elementosControl as $elemento) {
            if (!is_object($em->getRepository('ProyectoBundle:TareaProyeccion')->findOneBy(array(
                'proyecto' => $proyecto,
                'elementoControl' => $elemento)
            ))) {
                $entity = new TareaProyeccion();
                $entity->setEstado(false);
                $entity->setProyecto($proyecto);
                $entity->setElementoControl($elemento);
                $em->persist($entity);
            }
        }
        $em->flush();
        return new Response('');
    }

    /**
     * Remove tarea proyeccion (asociacion)
     *
     * @Route("remove-tarea-asociacion")
     * @param Request $rq
     * @return Response
     */
    public function removeTareaAsociacionAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        /* Delete Cargo */
        foreach (json_decode($rq->get('ids')) as $id) {
            $entity = $em->getRepository('ProyectoBundle:TareaProyeccion')->find($id);
            $em->remove($entity);
        }
        return new Response($em->flush());
    }
}