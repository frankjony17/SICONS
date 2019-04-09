<?php

namespace ProyectoBundle\Entity;

use Doctrine\DBAL\DBALException;
use Doctrine\ORM\EntityRepository;
use Doctrine\Orm\NoResultException;

class ProyectoRepository extends EntityRepository
{
    /**
     * Contar los proyectos que existen.
     *
     * @return int
     */
    public function findCantidadProyectos()
    {
        $query = $this
            ->getEntityManager()
            ->createQuery('SELECT COUNT(p) AS cantidad FROM ProyectoBundle:Proyecto p');
        try {
            $result = $query->getSingleResult();
            return $result['cantidad'];
        } catch (NoResultException $ex) {
            return 0;
        }
    }

    /**
     * Encontrar Proyectos.
     *
     * @param type $limit
     * @param type $start
     *
     * @return array
     */
    public function findProyectos($limit, $start)
    {
        $data = array();
        try {
            $query = 'SELECT proyecto.id AS id, proyecto.fecha, codigo, proyecto.nombre AS proyecto, grupo, contrato, proyecto.descripcion AS descripcion, estado, proyecto_tipo_id, proyecto_tipo.nombre AS tipo, ';
            $query .='array_to_string(ARRAY(SELECT proyecto_ficheros.nombre FROM proyecto_ficheros WHERE proyecto_ficheros.proyecto_id = proyecto.id), \', \') AS ficheros, ';
            $query .='(SELECT COUNT(estado) FROM proyecto_seguimiento WHERE proyecto_id = proyecto.id) AS seguimiento ';
            $query .='FROM proyecto INNER JOIN proyecto_tipo ON (proyecto.proyecto_tipo_id = proyecto_tipo.id) ';
            $query .='LIMIT '. $limit .' OFFSET '. $start .';';
            $fetchAll = $this->getEntityManager()->getConnection()->fetchAll($query);
            foreach($fetchAll as $value) {
                $tmp = "<table><thead><tr><th>Grupo</th><th>Contrato</th><th>Tipo</th><th>Fecha</th></tr></thead>";
                $tmp .="<tbody><tr><td>".$value['grupo']."</td><td>".$value['contrato']."</td><td>".$value['tipo']."</td><td>".$value['fecha']."</td></tr></tbody></table>";
                $tmp .="<br>";
                $tmp .="<table><tr><td>Ficheros</td><td>".$value['ficheros']."</td></tr></table>";
                $tmp .="<br>";
                $equipoTrabajo = $this->getEntityManager()->getRepository('ProyectoBundle:EquipoTrabajo')->findBy(array(
                    'proyecto' => $this->find($value['id'])
                ));
                $html = "";
                foreach ($equipoTrabajo as $eq) {
                    $html .= "<tr><td>".$eq->getPersona()->getNombreApellidos()."</td><td>".$eq->getPersona()->getCargo()->getNombre()."</td><td>".$eq->getEquipoTrabajoEspecialidadString()."</td><td>".$eq->getParticipacion()."</td></tr>";
                }
                if ($html !== "") {
                    $tmp .= "<table><thead><tr><th>Nombre</th><th>Especialidad</th><th>Responsabilidad</th><th>%</th></tr></thead><tbody>";
                    $tmp .= $html . "</tbody></table>";
                    $tmp .= "<br>";
                }
                $data[] = array(
                    'id' => $value['id'],
                    'fecha' => $value['fecha'],
                    'codigo' => $value['codigo'],
                    'nombre' => $value['proyecto'],
                    'grupo' => $value['grupo'],
                    'contrato' => $value['contrato'],
                    'descripcion' => $value['descripcion'],
                    'estado' => $value['estado'],
                    'tipo' => $value['tipo'],
                    'proyecto_tipo_id' => $value['proyecto_tipo_id'],
                    'seguimiento' => $value['seguimiento'],
                    'data' => $tmp
                );
            }
            return $data;
        } catch (DBALException $ex) {
            return $ex->getMessage();
        }
    }

    /**
     * @return int
     */
    public function findCantidadTareaProyeccionProyectos()
    {
        $query = $this
            ->getEntityManager()
            ->createQuery('SELECT COUNT(tp) AS cantidad FROM ProyectoBundle:TareaProyeccion tp');
        try {
            $result = $query->getSingleResult();
            return $result['cantidad'];
        } catch (NoResultException $ex) {
            return 0;
        }
    }

    /**
     * Encontrar Proyectos.
     *
     * @param type $limit
     * @param type $start
     *
     * @return array
     */
    public function findTareaProyeccionProyectos($limit, $start)
    {
        try {
            $query = 'SELECT tarea_proyeccion.id, elemento_control.nombre AS tarea, proyecto_tipo.nombre AS tipo, ';
            $query .='proyecto.codigo, proyecto.nombre AS proyecto, proyecto.id AS proyecto_id ';
            $query .='FROM tarea_proyeccion INNER JOIN elemento_control ON (elemento_control.id = tarea_proyeccion.elemento_control_id) ';
            $query .='INNER JOIN elemento_control_tipo ON (elemento_control_tipo.id = elemento_control.elemento_control_tipo_id) ';
            $query .='INNER JOIN proyecto ON (proyecto.id = tarea_proyeccion.proyecto_id) ';
            $query .='INNER JOIN proyecto_tipo ON (proyecto_tipo.id = proyecto.proyecto_tipo_id) ';
            $query .='LIMIT '. $limit .' OFFSET '. $start .';';

            $data = array();

            foreach($this->getEntityManager()->getConnection()->fetchAll($query) as $value) {
                $data[] = array(
                    'id' => $value['id'],
                    'tarea' => $value['tarea'],
                    'tipo' => $value['tipo'],
                    'proyecto' => "<div id='row-grouping-header'>". strtoupper($value['codigo'] ." || ". $value['proyecto']) ."</div>",
                    'proyecto_id' => $value['proyecto_id']
                );
            }
            return $data;
        } catch (DBALException $ex) {
            return $ex->getMessage();
        }
    }

    /**
     * @return int
     */
    public function findCantidadPlanCalidadProyectos()
    {
        $query = $this
            ->getEntityManager()
            ->createQuery('SELECT COUNT(pc) AS cantidad FROM ProyectoBundle:PlanCalidad pc');
        try {
            $result = $query->getSingleResult();
            return $result['cantidad'];
        } catch (NoResultException $ex) {
            return 0;
        }
    }

    /**
     * @param type $limit
     * @param type $start
     *
     * @return array
     */
    public function findPlanCalidadProyectos($limit, $start)
    {
        try {
            $query = 'SELECT plan_calidad.id, elemento_control.nombre AS plan, proyecto_tipo.nombre AS tipo, ';
            $query .='proyecto.codigo, proyecto.nombre AS proyecto, proyecto.id AS proyecto_id ';
            $query .='FROM plan_calidad INNER JOIN elemento_control ON (elemento_control.id = plan_calidad.elementos_control_id) ';
            $query .='INNER JOIN elemento_control_tipo ON (elemento_control_tipo.id = elemento_control.elemento_control_tipo_id) ';
            $query .='INNER JOIN proyecto ON (proyecto.id = plan_calidad.proyecto_id) ';
            $query .='INNER JOIN proyecto_tipo ON (proyecto_tipo.id = proyecto.proyecto_tipo_id) ';
            $query .='LIMIT '. $limit .' OFFSET '. $start .';';

            $data = array();

            foreach($this->getEntityManager()->getConnection()->fetchAll($query) as $value) {
                $data[] = array(
                    'id' => $value['id'],
                    'plan' => $value['plan'],
                    'tipo' => $value['tipo'],
                    'proyecto' => "<div id='row-grouping-header'>". strtoupper($value['codigo'] ." || ". $value['proyecto']) ."</div>",
                    'proyecto_id' => $value['proyecto_id']
                );
            }
            return $data;
        } catch (DBALException $ex) {
            return $ex->getMessage();
        }
    }

    public function findMaxNumberFromAcuerdo($id) {
        $fetch = $this->getEntityManager()->getConnection()->fetchAll(
            "SELECT MAX(numero) AS numero FROM acuerdos WHERE proyecto_consejo_tecnico_id = ". $id .";"
        );
        return $fetch[0]['numero'] + 1;
    }
}