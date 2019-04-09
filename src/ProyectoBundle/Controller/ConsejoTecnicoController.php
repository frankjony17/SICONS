<?php

namespace ProyectoBundle\Controller;

use ProyectoBundle\Entity\Acuerdos;
use ProyectoBundle\Entity\Intervencion;
use ProyectoBundle\Entity\ProyectoConsejoTecnico;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("consejo/tecnico/")
 */
class ConsejoTecnicoController extends Controller
{
    /**
     * List intervenciones
     *
     * @Route("intervenciones/list")
     * @param Request $rq
     * @return Response
     */
    public function listIntervencionesAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager(); $data = array();
        if ($rq->get('id')) {
            $intervencion = $em->getRepository('ProyectoBundle:Intervencion')->findBy(array(
                'proyectoConsejoTecnico' => $em->getRepository('ProyectoBundle:ProyectoConsejoTecnico')->find($rq->get('id'))
            ));
            foreach ($intervencion as $in) {
                $data[] = array(
                    'id' => $in->getId(),
                    'persona' => $in->getPersona()->getNombreApellidos(),
                    'persona_id' => $in->getPersona()->getId(),
                    'planteamiento' => $in->getPlanteamiento()
                );
            }
        }
        return new Response('({"total":"'.count($data).'","data":'.json_encode($data).'})');
    }

    /**
     * List Acuerdos
     *
     * @Route("acuerdo/list")
     * @param Request $rq
     * @return Response
     */
    public function listAcuerdosAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager(); $data = array();
        if ($rq->get('id')) {
            $acuerdo = $em->getRepository('ProyectoBundle:Acuerdos')->findBy(array(
                'proyectoConsejoTecnico' => $em->getRepository('ProyectoBundle:ProyectoConsejoTecnico')->find($rq->get('id'))
            ));
            foreach ($acuerdo as $ac) {
                $data[] = array(
                    'id' => $ac->getId(),
                    'numero' => $ac->getNumero(),
                    'acuerdo' => $ac->getAcuerdo()
                );
            }
        }
        return new Response('({"total":"'.count($data).'","data":'.json_encode($data).'})');
    }

    /**
     * List Participantes
     *
     * @Route("participantes/list")
     * @param Request $rq
     * @return Response
     */
    public function listParticipantesAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager(); $data = array();
        if ($rq->get('id')) {
            $proyectoConsejoTecnico = $em->getRepository('ProyectoBundle:ProyectoConsejoTecnico')->find($rq->get('id'));
            foreach ($proyectoConsejoTecnico->getPersona() as $persona) {
                $data[] = array(
                    'persona' => $persona->getNombreApellidos(),
                    'cargo' => $persona->getCargo()->getNombre(),
                    'persona_id' => $persona->getId(),
                    'proyecto_consejo_tecnico_id' => $proyectoConsejoTecnico->getId()
                );
            }
        }
        return new Response('({"total":"'.count($data).'","data":'.json_encode($data).'})');
    }

    /**
     * List Consejo Técnico por Proyecto
     *
     * @Route("proyecto/list")
     * @param Request $rq
     * @return Response
     */
    public function listConsejoTecnicoProyectoAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager(); $data = array();
        $proyectoConsejoTecnico = $em->getRepository('ProyectoBundle:ProyectoConsejoTecnico')->findBy(array(
            'proyecto' => $em->getRepository('ProyectoBundle:Proyecto')->find($rq->get('proyectoId'))
        ));
        foreach ($proyectoConsejoTecnico as $pct) {
            $data[] = array(
                'id' => $pct->getId(),
                'fecha' => $pct->getFecha(),
                'nombre' => $pct->getConsejoTecnico()->getNombre(),
                'descripcion' => $pct->getConsejoTecnico()->getDescripcion(),
                'local' => $pct->getLocal(),
                'observacion' => $pct->getObservacion(),
                'consejo_tecnico_id' => $pct->getConsejoTecnico()->getId()
            );
        }
        return new Response('({"total":"'.count($data).'","data":'.json_encode($data).'})');
    }

    /**
     * List Data for Consejo Técnico
     *
     * @Route("get-data")
     * @param Request $rq
     * @return Response
     */
    public function listDataConsejoTecnicoAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        $proyectoConsejoTecnico = $em->getRepository('ProyectoBundle:ProyectoConsejoTecnico')->findOneBy(array(
            'proyecto' => $em->getRepository('ProyectoBundle:Proyecto')->find($rq->get('proyectoId')),
            'consejoTecnico' => $em->getRepository('NomencladorBundle:ConsejoTecnico')->find($rq->get('consejoTecnicoId'))
        ));
        if (count($proyectoConsejoTecnico) > 0) {
            $data = array(
                'id' => $proyectoConsejoTecnico->getId(),
                'local' => $proyectoConsejoTecnico->getLocal(),
                'observacion' => $proyectoConsejoTecnico->getObservacion()
            );
            return new Response(json_encode($data));
        }
        return new Response('FALSE');
    }

    /**
     * Add Consejo Técnico
     *
     * @Route("add")
     * @param Request $rq
     * @return Response
     */
    public function addConsejoTecnicoAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        if (is_numeric($rq->get('id'))) {
            $entity = $em->getRepository('ProyectoBundle:ProyectoConsejoTecnico')->find($rq->get('id'));
        } else {
            $entity = new ProyectoConsejoTecnico();
            $entity->setProyecto($em->getRepository('ProyectoBundle:Proyecto')->find($rq->get('proyectoId')));
            $entity->setConsejoTecnico($em->getRepository('NomencladorBundle:ConsejoTecnico')->find($rq->get('consejoTecnicoId')));
            $entity->setEstado(false);
            $entity->setFecha(new \DateTime(date('Y-m-d')));
        }
        $entity->setLocal($rq->get('local'));
        $entity->setObservacion($rq->get('observacion'));
        $em->persist($entity);
        $em->flush();
        return new Response($entity->getId());
    }

    /**
     * Add Intervención
     *
     * @Route("intervencion/add")
     * @param Request $rq
     * @return Response
     */
    public function addIntervencionAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();

        $persona = $em->getRepository('NomencladorBundle:Persona')->find($rq->get('personaId'));
        $proyectoConsejoTecnico = $em->getRepository('ProyectoBundle:ProyectoConsejoTecnico')->find($rq->get('proyectoConsejoTecnicoId'));

        $intervencion = $em->getRepository('ProyectoBundle:Intervencion')->findOneBy(array(
           'persona' => $persona,
            'proyectoConsejoTecnico' => $proyectoConsejoTecnico
        ));
        if (!is_object($intervencion)) {
            $entity = new Intervencion();
            $entity->setPersona($persona);
            $entity->setProyectoConsejoTecnico($proyectoConsejoTecnico);
            $em->persist($entity);
            $em->flush();
        }
        return new Response('');
    }

    /**
     * Edit Intervención
     *
     * @Route("intervencion/edit")
     * @param Request $rq
     * @return Response
     */
    public function editIntervencionAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        $intervencion = $em->getRepository('ProyectoBundle:Intervencion')->find($rq->get('id'));
        $intervencion->setPlanteamiento($rq->get('planteamiento'));
        $em->persist($intervencion);
        $em->flush();
        return new Response('');
    }

    /**
     * Remove Intervención
     *
     * @Route("intervencion/remove")
     * @param Request $rq
     * @return Response
     */
    public function removeIntervencionAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        $intervencion = $em->getRepository('ProyectoBundle:Intervencion')->find($rq->get('id'));
        $em->remove($intervencion);
        $em->flush();
        return new Response('');
    }

    /**
     * Add Acuerdo
     *
     * @Route("acuerdo/add")
     * @param Request $rq
     * @return Response
     */
    public function addAcuerdoAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = new Acuerdos();
        $entity->setNumero($em->getRepository('ProyectoBundle:Proyecto')->findMaxNumberFromAcuerdo($rq->get('proyectoConsejoTecnicoId')));
        $entity->setAcuerdo($rq->get('acuerdo'));
        $entity->setProyectoConsejoTecnico($em->getRepository('ProyectoBundle:ProyectoConsejoTecnico')->find($rq->get('proyectoConsejoTecnicoId')));
        $em->persist($entity);
        $em->flush();
        return new Response('');
    }

    /**
     * Edit Acuerdo
     *
     * @Route("acuerdo/edit")
     * @param Request $rq
     * @return Response
     */
    public function editAcuerdoAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        $acuerdo = $em->getRepository('ProyectoBundle:Acuerdos')->find($rq->get('id'));
        $acuerdo->setAcuerdo($rq->get('acuerdo'));
        $em->persist($acuerdo);
        $em->flush();
        return new Response('');
    }

    /**
     * Remove Acuerdo
     *
     * @Route("acuerdo/remove")
     * @param Request $rq
     * @return Response
     */
    public function removeAcuerdoAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        $acuerdo = $em->getRepository('ProyectoBundle:Acuerdos')->find($rq->get('id'));
        $em->remove($acuerdo);
        $em->flush();
        return new Response('');
    }

    /**
     * Add Participantes
     *
     * @Route("participantes/add")
     * @param Request $rq
     * @return Response
     */
    public function addParticipantesAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        $persona = $em->getRepository('NomencladorBundle:Persona')->find($rq->get('personaId'));
        $proyectoConsejoTecnico = $em->getRepository('ProyectoBundle:ProyectoConsejoTecnico')->find($rq->get('proyectoConsejoTecnicoId'));
        if (!in_array($persona, $proyectoConsejoTecnico->getPersonaArray())) {
            $persona->addProyectoConsejoTecnico($proyectoConsejoTecnico);
            $em->persist($persona);
            $em->flush();
        }
        return new Response('');
    }

    /**
     * Remove Participantes
     *
     * @Route("participantes/remove")
     * @param Request $rq
     * @return Response
     */
    public function removeParticipantesAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        $persona = $em->getRepository('NomencladorBundle:Persona')->find($rq->get('persona_id'));
        $persona->removeProyectoConsejoTecnico($em->getRepository('ProyectoBundle:ProyectoConsejoTecnico')->find($rq->get('proyecto_consejo_tecnico_id')));
        $em->persist($persona);
        $em->flush();
        return new Response('');
    }

    /**
     * Remove Consejo Técnico Proyecto
     *
     * @Route("remove")
     * @param Request $rq
     * @return Response
     */
    public function removeConsejoTecnicoProyectoAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ProyectoBundle:ProyectoConsejoTecnico')->find($rq->get('id'));
        $em->remove($entity);
        $em->flush();
        return new Response('');
    }
}