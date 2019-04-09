<?php

namespace ProyectoBundle\Controller;

use ProyectoBundle\Entity\EquipoTrabajo;
use ProyectoBundle\Entity\ProyectoEspecialidadProyecto;
use ProyectoBundle\Entity\ProyectoFicheros;
use ProyectoBundle\Entity\ProyectoObjetos;
use ProyectoBundle\Entity\ProyectoSeguimiento;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use ProyectoBundle\Entity\Proyecto;

/**
 * @Route("proyecto/")
 */
class ProyectoController extends Controller
{
    /**
     * List All values from Proyecto
     *
     * @Route("list")
     * @param Request $rq
     * @return Response
     */
    public function listAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();

        $data = $em->getRepository('ProyectoBundle:Proyecto')->findProyectos($rq->get('limit'), $rq->get('start'));
        $cant = $em->getRepository('ProyectoBundle:Proyecto')->findCantidadProyectos();

        return new Response('({"total":"'.$cant.'","data":'.json_encode($data).'})');
    }

    /**
     * List All values from equipo trabajo
     *
     * @Route("list/equipo/trabajo")
     * @param Request $rq
     * @return Response
     */
    public function listEquipoTrabajoAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        $tm = array();
        $data = $em->getRepository('ProyectoBundle:EquipoTrabajo')->findBy(array(
            'proyecto'=> $em->getRepository('ProyectoBundle:Proyecto')->find($rq->get('id'))
        ));
        foreach ($data as $value) {
            $tm[] = array(
                'id' => $value->getPersona()->getId(),
                'nombre' => $value->getPersona()->getNombreApellidos(),
                'cargo' => $value->getPersona()->getCargo()->getNombre(),
                'responsabilidad' => $value->getEquipoTrabajoEspecialidadString(),
                'participacion' => $value->getParticipacion(),
                'espId' => $value->getEquipoTrabajoEspecialidadIds()
            );
        }
        return new Response('({"total":"'.count($tm).'","data":'.json_encode($tm).'})');
    }

    /**
     * List All values from file
     *
     * @Route("list/file")
     * @param Request $rq
     * @return Response
     */
    public function listFileAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        $tm = array();
        $data = $em->getRepository('ProyectoBundle:ProyectoFicheros')->findBy(array(
            'proyecto'=> $em->getRepository('ProyectoBundle:Proyecto')->find($rq->get('id'))
        ));
        foreach ($data as $value) {
            $tm[] = array(
                'id' => $value->getId(),
                'fecha' => $value->getFecha()->format('Y-m-d H:i:s'),
                'nombre' => $value->getNombre(),
                'size' => $value->getSize(),
                'descripcion' => $value->getDescripcion()
            );
        }
        return new Response('({"total":"'.count($tm).'","data":'.json_encode($tm).'})');
    }

    /**
     * List All values from objeto
     *
     * @Route("list/objetos/")
     * @param Request $rq
     * @return Response
     */
    public function listObjetoAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        $tm = array();
        $data = $em->getRepository('ProyectoBundle:ProyectoObjetos')->findBy(array(
            'proyecto'=> $em->getRepository('ProyectoBundle:Proyecto')->find($rq->get('id'))
        ));
        foreach ($data as $value) {
            $tm[] = array(
                'id' => $value->getObjeto()->getId(),
                'nombre' => $value->getObjeto()->getNombre(),
                'descripcion' => $value->getObjeto()->getDescripcion()
            );
        }
        return new Response('({"total":"'.count($tm).'","data":'.json_encode($tm).'})');
    }

    /**
     * List All values from ProyectoEspecialidadProyecto
     *
     * @Route("list/especialidad/")
     * @param Request $rq
     * @return Response
     */
    public function listEspecialidadAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        $tm = array();
        $data = $em->getRepository('ProyectoBundle:ProyectoEspecialidadProyecto')->findBy(array(
            'proyecto'=> $em->getRepository('ProyectoBundle:Proyecto')->find($rq->get('id'))
        ));
        foreach ($data as $value) {
            $tm[] = array(
                'id' => $value->getProyectoEspecialidad()->getId(),
                'nombre' => $value->getProyectoEspecialidad()->getNombre(),
                'descripcion' => $value->getProyectoEspecialidad()->getDescripcion()
            );
        }
        return new Response('({"total":"'.count($tm).'","data":'.json_encode($tm).'})');
    }

    /**
     * Add Proyecto.
     *
     * @Route("add-edit")
     * @param Request $rq
     * @return Response
     */
    public function addEditAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        /* Add or Edit */
        if ($rq->get('id') !== 'ADD') {
            $entity = $em->getRepository('ProyectoBundle:Proyecto')->find($rq->get('id'));
        } else {
            $entity = new Proyecto();
            $entity->setEstado(false);
        }
        $entity->setFecha(new \DateTime($rq->get('fecha')));
        $entity->setCodigo($rq->get('codigo'));
        $entity->setNombre($rq->get('nombre'));
        $entity->setGrupo($rq->get('grupo'));
        $entity->setContrato($rq->get('contrato'));
        $entity->setDescripcion($rq->get('descripcion'));
        $entity->setProyectoTipo($em->getRepository('NomencladorBundle:ProyectoTipo')->find($rq->get('tipo')));
        /* Validate errors */
        if (count($errors = $this->get('validator')->validate($entity)) > 0) {
            $errorsString = (string) $errors; // Uses a __toString method on the $errors variable
            return new Response($errorsString);
        }
        $em->persist($entity);
        $em->flush();
        return new Response($entity->getId());
    }

    /**
     * Edit estado.
     *
     * @Route("edit-estado")
     * @param Request $rq
     * @return Response
     */
    public function addEditEstadoAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ProyectoBundle:Proyecto')->find($rq->get('proyectoId'));
        $entity->setEstado($rq->get('estado'));
        $em->persist($entity);
        $em->flush();
        return new Response('');
    }

    /**
     * Edit tipo.
     *
     * @Route("tipo")
     * @param Request $rq
     * @return Response
     */
    public function tipoAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ProyectoBundle:Proyecto')->find($rq->get('proyectoId'));
        $entity->setProyectoTipo($em->getRepository('NomencladorBundle:ProyectoTipo')->find($rq->get('tipoId')));
        $em->persist($entity);
        $em->flush();
        return new Response('');
    }

    /**
     * Add Proyecto.
     *
     * @Route("add/equipo/trabajo")
     * @param Request $rq
     * @return Response
     */
    public function addEquipoTrabajoAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();

        foreach (json_decode($rq->get('data')) as $data) {
            /* Add or Edit Cargo */
            if ($rq->get('equipoTrabajoId') !== 'ADD') {
                $entity = $em->getRepository('ProyectoBundle:EquipoTrabajo')->find($rq->get('equipoTrabajoId'));
            } else {
                $entity = new EquipoTrabajo();
            }
            $entity->setParticipacion($data[1]);
            $entity->setPersona($em->getRepository('NomencladorBundle:Persona')->find($data[0]));
            $entity->setProyecto($em->getRepository('ProyectoBundle:Proyecto')->find($rq->get('proyectoId')));
            $em->persist($entity);

            foreach ($entity->getEquipoTrabajoEspecialidad() as $ete) {
                $entity->removeEquipoTrabajoEspecialidad($ete);
            }
            foreach ($data[2] as $id) {
                $entity->addEquipoTrabajoEspecialidad($em->getRepository('NomencladorBundle:EquipoTrabajoEspecialidad')->find($id));
                $em->persist($entity);
            }
        }
        $em->flush();
        return new Response($entity->getId());
    }

    /**
     * Add-Edit Proyecto.
     *
     * @Route("add-edit/equipo/trabajo")
     * @param Request $rq
     * @return Response
     */
    public function addEditEquipoTrabajoAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();

        foreach (json_decode($rq->get('data')) as $data) {
            $project = $em->getRepository('ProyectoBundle:Proyecto')->find($rq->get('proyectoId'));
            $persona = $em->getRepository('NomencladorBundle:Persona')->find($data[0]);
            $entity = $em->getRepository('ProyectoBundle:EquipoTrabajo')->findOneBy(array(
                'proyecto' => $project,
                'persona' => $persona
            ));
            if (!is_object($entity)) {
                $entity = new EquipoTrabajo();
            }
            $entity->setParticipacion($data[1]);
            $entity->setPersona($persona);
            $entity->setProyecto($project);
            $em->persist($entity);

            foreach ($entity->getEquipoTrabajoEspecialidad() as $ete) {
                $entity->removeEquipoTrabajoEspecialidad($ete);
            }
            foreach ($data[2] as $id) {
                $entity->addEquipoTrabajoEspecialidad($em->getRepository('NomencladorBundle:EquipoTrabajoEspecialidad')->find($id));
                $em->persist($entity);
            }
        }
        $em->flush();
        return new Response($entity->getId());
    }

    /**
     * Add Proyecto.
     *
     * @Route("uploaded/file")
     * @param Request $rq
     * @return Response
     */
    public function upLoadedFileAction(Request $rq)
    {
        if($_FILES["uploadedfile"]["size"] >= 134217728) {
            return new Response("size");
        }
        $em = $this->getDoctrine()->getManager();

        $type = $_FILES["uploadedfile"]["type"];
        $tmp_name = $_FILES["uploadedfile"]["tmp_name"];
        $size = $_FILES["uploadedfile"]["size"];
        $nombre = basename($_FILES["uploadedfile"]["name"]);

        $fp = fopen($tmp_name, "rb");
        $buffer = fread($fp, filesize($tmp_name));
        fclose($fp);

        $buffer=pg_escape_bytea($buffer);

        $file = new ProyectoFicheros();
        $file->setNombre($nombre);
        $file->setTipo($type);
        $file->setSize($size);
        $file->setFichero($buffer);
        $file->setFecha(new \DateTime(date('Y-m-d H:i:s')));
        $file->setDescripcion($rq->get('descripcion'));
        $file->setProyecto($em->getRepository('ProyectoBundle:Proyecto')->find($rq->get('id')));

        @$em->persist($file);
        @$em->flush();

        return new Response($file->getId());
    }

    /**
     * Add Objetos.
     *
     * @Route("add/objetos")
     * @param Request $rq
     * @return Response
     */
    public function addObjetosAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        $proyecto = $em->getRepository('ProyectoBundle:Proyecto')->find($rq->get('proyectoId'));
        foreach (json_decode($rq->get('data')) as $data) {
            $objeto = $em->getRepository('NomencladorBundle:Objetos')->find($data[0]);
            if (!is_object($em->getRepository('ProyectoBundle:ProyectoObjetos')->findOneBy(array(
                'proyecto' => $proyecto,
                'objeto' => $objeto
            )))) {
                $entity = new ProyectoObjetos();
                $entity->setProyecto($proyecto);
                $entity->setObjeto($em->getRepository('NomencladorBundle:Objetos')->find($data[0]));
                $em->persist($entity);
            }
        }
        return new Response($em->flush());
    }

    /**
     * Add Especilidad.
     *
     * @Route("add/especialidad")
     * @param Request $rq
     * @return Response
     */
    public function addEspecilidadAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        $proyecto = $em->getRepository('ProyectoBundle:Proyecto')->find($rq->get('proyectoId'));
        foreach (json_decode($rq->get('data')) as $data) {
            $pe = $em->getRepository('NomencladorBundle:ProyectoEspecialidad')->find($data[0]);
            if (!is_object($em->getRepository('ProyectoBundle:ProyectoEspecialidadProyecto')->findOneBy(array(
                'proyecto' => $proyecto,
                'proyectoEspecialidad' => $pe
            )))) {
                $entity = new ProyectoEspecialidadProyecto();
                $entity->setProyecto($proyecto);
                $entity->setProyectoEspecialidad($pe);
                $em->persist($entity);
            }
        }
        return new Response($em->flush());
    }

    /**
     * Add Seguimiento.
     *
     * @Route("add/seguimiento")
     * @param Request $rq
     * @return Response
     */
    public function addSeguimientoAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();

        foreach ($em->getRepository('ProyectoBundle:Seguimiento')->findAll() as $seguimiento) {
            $entity = new ProyectoSeguimiento();
            $entity->setEstado(false);
            $entity->setProyecto($em->getRepository('ProyectoBundle:Proyecto')->find($rq->get('proyectoId')));
            $entity->setSeguimiento($seguimiento);
            $em->persist($entity);
        }
        return new Response($em->flush());
    }

    /**
     * Add Seguimiento.
     *
     * @Route("seguimiento")
     * @param Request $rq
     * @return Response
     */
    public function seguimientoAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        $proyecto = $em->getRepository('ProyectoBundle:Proyecto')->find($rq->get('proyectoId'));
        $proyectoSeguimiento = $em->getRepository('ProyectoBundle:ProyectoSeguimiento')->findBy(array('proyecto' => $proyecto));
        foreach ($proyectoSeguimiento as $seguimiento) {
            $em->remove($seguimiento);
        }
        if ($rq->get('estado') === 'true') {
            foreach ($em->getRepository('ProyectoBundle:Seguimiento')->findAll() as $seguimiento) {
                $entity = new ProyectoSeguimiento();
                $entity->setEstado(false);
                $entity->setProyecto($proyecto);
                $entity->setSeguimiento($seguimiento);
                $em->persist($entity);
            }
        }
        $em->flush();
        return new Response('');
    }

    /**
     * Remove Equipo Trabajo
     *
     * @Route("remove/equipo/trabajo")
     * @param Request $rq
     * @return Response
     */
    public function removeAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        $project = $em->getRepository('ProyectoBundle:Proyecto')->find($rq->get('proyectoId'));
        $persona = $em->getRepository('NomencladorBundle:Persona')->find($rq->get('personaId'));
        $entity = $em->getRepository('ProyectoBundle:EquipoTrabajo')->findOneBy(array(
            'proyecto' => $project,
            'persona' => $persona
        ));
        if (is_object($entity)) {
            $em->remove($entity);
            $em->flush();
        }
        return new Response('');
    }

    /**
     * Remove File
     *
     * @Route("remove/file")
     * @param Request $rq
     * @return Response
     */
    public function removeFileAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ProyectoBundle:ProyectoFicheros')->find($rq->get('id'));
        $em->remove($entity);
        return new Response($em->flush());
    }

    /**
     * Remove Objeto
     *
     * @Route("remove/objeto")
     * @param Request $rq
     * @return Response
     */
    public function removeObjetoAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ProyectoBundle:ProyectoObjetos')->findOneBy(array(
            'objeto' => $em->getRepository('NomencladorBundle:Objetos')->find($rq->get('id')),
            'proyecto' => $em->getRepository('ProyectoBundle:Proyecto')->find($rq->get('proyectoId')),
        ));
        if (is_object($entity)) {
            $em->remove($entity);
            $em->flush();
        }
        return new Response('');
    }

    /**
     * Remove Especialidad
     *
     * @Route("remove/especialidad")
     * @param Request $rq
     * @return Response
     */
    public function removeEspecialidadAction(Request $rq)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ProyectoBundle:ProyectoEspecialidadProyecto')->findOneBy(array(
            'proyectoEspecialidad' => $em->getRepository('NomencladorBundle:ProyectoEspecialidad')->find($rq->get('id')),
            'proyecto' => $em->getRepository('ProyectoBundle:Proyecto')->find($rq->get('proyectoId')),
        ));
        if (is_object($entity)) {
            $em->remove($entity);
            $em->flush();
        }
        return new Response('');
    }
}