<?php

namespace ProyectoBundle\Controller;

use ProyectoBundle\Entity\RevisionContrato;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("revision/contrato/")
 */
class RevisionContratoController extends Controller
{
    /**
     * List All values
     *
     * @Route("list")
     * @param Request $rq
     * @return Response
     */
    public function listAction(Request $rq)
    {
        $tm = array();
        $em = $this->getDoctrine()->getManager();
        $pr = $em->getRepository('ProyectoBundle:Proyecto')->find($rq->get('proyectoId'));
        $revisionContrato = $em->getRepository('ProyectoBundle:RevisionContrato')->findBy(array('proyecto' => $pr));
        if (count($revisionContrato) === 0) {
            foreach ($em->getRepository('NomencladorBundle:AspectosRevizar')->findAll() as $ar) {
                $entity = new RevisionContrato();
                $entity->setEstado(false);
                $entity->setAspectosRevizar($ar);
                $entity->setProyecto($pr);
                $entity->setFecha(new \DateTime(date("Y-m-d")));
                $em->persist($entity);
            }
            $em->flush();
            $revisionContrato = $em->getRepository('ProyectoBundle:RevisionContrato')->findBy(array('proyecto' => $pr));
        }
        foreach ($revisionContrato as $val) {
            if ($val->getEstado()) {
                $estado_inicial_si = false; $estado_inicial_no = true; $estado_final_si = true; $estado_final_no = false;
            } else {
                $estado_inicial_si = true; $estado_inicial_no = false; $estado_final_si = false; $estado_final_no = true;
            }
            $tm[] = array(
                'id' => $val->getId(),
                'fecha' => $val->getFecha()->format('Y-m-d'),
                'aspecto_revisar' => $val->getAspectosRevizar()->getNombre(),
                'estado_inicial_si' => $estado_inicial_si,
                'estado_inicial_no' => $estado_inicial_no,
                'observacion' => $val->getObservacion(),
                'estado_final_si' => $estado_final_si,
                'estado_final_no' => $estado_final_no,
                'proyecto_id' => $val->getProyecto()->getId()
            );
        }
        return new Response('({"total":"'.count($tm).'","data":'.json_encode($tm).'})');
    }

    /**
     * Editar Revisión Contrato
     *
     * @Route("edit-revision-contrato")
     * @param Request $rq
     * @return Response
     */
    public function editRevisionContratoAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        $revisionContrato = $em->getRepository('ProyectoBundle:RevisionContrato')->find($rq->get('id'));
        $revisionContrato->setEstado($rq->get('estado') === "true" ? true : false);
        $revisionContrato->setObservacion($rq->get('observacion'));
        $em->persist($revisionContrato);
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