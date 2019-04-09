<?php

namespace ProyectoBundle\Controller;

use ProyectoBundle\Entity\PlanCalidad;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("plan/calidad/")
 */
class PlanCalidadController extends Controller
{
    /**
     * List All values from Plan de Calidad
     *
     * @Route("list")
     * @param Request $rq
     * @return Response
     */
    public function listAction(Request $rq)
    {
        $tm = array();
        $em = $this->getDoctrine()->getManager();

        $data = $em->getRepository('ProyectoBundle:PlanCalidad')->findBy(array(
           'proyecto' => $em->getRepository('ProyectoBundle:Proyecto')->find($rq->get('proyectoId'))
        ));
        foreach ($data as $val) {
            $tm[] = array(
                'id' => $val->getId(),
                'plan' => $val->getElementosControl()->getNombre(),
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
     * List All values from Plan de Calidad Proyecto
     *
     * @Route("nomenclador/plan/list")
     * @param Request $rq
     * @return Response
     */
    public function listPlanCalidadProyectoAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();

        $data = $em->getRepository('ProyectoBundle:Proyecto')->findPlanCalidadProyectos($rq->get('limit'), $rq->get('start'));
        $cant = $em->getRepository('ProyectoBundle:Proyecto')->findCantidadPlanCalidadProyectos();

        return new Response('({"total":"'.$cant.'","data":'.json_encode($data).'})');
    }

    /**
     * Editar Plan de Calidad
     *
     * @Route("edit-plan-calidad")
     * @param Request $rq
     * @return Response
     */
    public function editPlanCalidadAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        $planProyeccion = $em->getRepository('ProyectoBundle:PlanCalidad')->find($rq->get('id'));
        $planProyeccion->setEstado($rq->get('estado'));
        $planProyeccion->setObservacion($rq->get('observacion'));
        $em->persist($planProyeccion);
        $em->flush();
        return new Response('');
    }

    /**
     * Asignar Plan de Calidad to Proyecto
     *
     * @Route("add-plan-proyecto")
     * @param Request $rq
     * @return Response
     */
    public function addPlanCalidadProyectoAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        $proyecto = $em->getRepository('ProyectoBundle:Proyecto')->find($rq->get('id'));
        $elementosControl = $em->getRepository('NomencladorBundle:ElementoControl')->findBy(array(
            'elementoControlTipo' => $em->getRepository('NomencladorBundle:ElementoControlTipo')->findOneBy(array(
                'nombre' => $proyecto->getProyectoTipo()->getNombre() === "agricola" ? "plan_calidad_agricola" : "plan_calidad_ingenieria"
            ))
        ));
        foreach ($elementosControl as $elemento) {
            if (!is_object($em->getRepository('ProyectoBundle:PlanCalidad')->findOneBy(array(
                'proyecto' => $proyecto,
                'elementosControl' => $elemento)
            ))) {
                $entity = new PlanCalidad();
                $entity->setEstado(false);
                $entity->setProyecto($proyecto);
                $entity->setElementosControl($elemento);
                $em->persist($entity);
            }
        }
        $em->flush();
        return new Response('');
    }

    /**
     * Remove plan calidad (asociacion)
     *
     * @Route("remove-plan-asociacion")
     * @param Request $rq
     * @return Response
     */
    public function removeTareaAsociacionAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        /* Delete Cargo */
        foreach (json_decode($rq->get('ids')) as $id) {
            $entity = $em->getRepository('ProyectoBundle:PlanCalidad')->find($id);
            $em->remove($entity);
        }
        return new Response($em->flush());
    }
}