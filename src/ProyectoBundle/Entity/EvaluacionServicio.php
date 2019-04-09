<?php

namespace ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EvaluacionServicio
 *
 * @ORM\Table(name="evaluacion_servicio", indexes={@ORM\Index(name="IDX_FBC2B8E7BBC44E4", columns={"aspectos_servicios_indicadores_id"}), @ORM\Index(name="IDX_FBC2B8E5DBF73DB", columns={"evaluacion_servicio_estado_id"}), @ORM\Index(name="IDX_FBC2B8EF625D1BA", columns={"proyecto_id"})})
 * @ORM\Entity
 */
class EvaluacionServicio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="evaluacion_servicio_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="grupo", type="string", nullable=false)
     */
    private $grupo;

    /**
     * @var float
     *
     * @ORM\Column(name="calificacion", type="float", precision=10, scale=0, nullable=false)
     */
    private $calificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="deficiencias", type="text", nullable=true)
     */
    private $deficiencias;

    /**
     * @var string
     *
     * @ORM\Column(name="recomendaciones", type="text", nullable=true)
     */
    private $recomendaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="obsevacion", type="text", nullable=true)
     */
    private $obsevacion;

    /**
     * @var \NomencladorBundle\AspectosServicioIndicadores
     *
     * @ORM\ManyToOne(targetEntity="NomencladorBundle\AspectosServicioIndicadores")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aspectos_servicios_indicadores_id", referencedColumnName="id")
     * })
     */
    private $aspectosServiciosIndicadores;

    /**
     * @var \EvaluacionServicioEstado
     *
     * @ORM\ManyToOne(targetEntity="EvaluacionServicioEstado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="evaluacion_servicio_estado_id", referencedColumnName="id")
     * })
     */
    private $evaluacionServicioEstado;

    /**
     * @var \Proyecto
     *
     * @ORM\ManyToOne(targetEntity="Proyecto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proyecto_id", referencedColumnName="id")
     * })
     */
    private $proyecto;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return EvaluacionServicio
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set grupo
     *
     * @param string $grupo
     *
     * @return EvaluacionServicio
     */
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return string
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Set calificacion
     *
     * @param float $calificacion
     *
     * @return EvaluacionServicio
     */
    public function setCalificacion($calificacion)
    {
        $this->calificacion = $calificacion;

        return $this;
    }

    /**
     * Get calificacion
     *
     * @return float
     */
    public function getCalificacion()
    {
        return $this->calificacion;
    }

    /**
     * Set deficiencias
     *
     * @param string $deficiencias
     *
     * @return EvaluacionServicio
     */
    public function setDeficiencias($deficiencias)
    {
        $this->deficiencias = $deficiencias;

        return $this;
    }

    /**
     * Get deficiencias
     *
     * @return string
     */
    public function getDeficiencias()
    {
        return $this->deficiencias;
    }

    /**
     * Set recomendaciones
     *
     * @param string $recomendaciones
     *
     * @return EvaluacionServicio
     */
    public function setRecomendaciones($recomendaciones)
    {
        $this->recomendaciones = $recomendaciones;

        return $this;
    }

    /**
     * Get recomendaciones
     *
     * @return string
     */
    public function getRecomendaciones()
    {
        return $this->recomendaciones;
    }

    /**
     * Set obsevacion
     *
     * @param string $obsevacion
     *
     * @return EvaluacionServicio
     */
    public function setObsevacion($obsevacion)
    {
        $this->obsevacion = $obsevacion;

        return $this;
    }

    /**
     * Get obsevacion
     *
     * @return string
     */
    public function getObsevacion()
    {
        return $this->obsevacion;
    }

    /**
     * Set aspectosServiciosIndicadores
     *
     * @param \NomencladorBundle\AspectosServicioIndicadores $aspectosServiciosIndicadores
     *
     * @return EvaluacionServicio
     */
    public function setAspectosServiciosIndicadores(\NomencladorBundle\AspectosServicioIndicadores $aspectosServiciosIndicadores = null)
    {
        $this->aspectosServiciosIndicadores = $aspectosServiciosIndicadores;

        return $this;
    }

    /**
     * Get aspectosServiciosIndicadores
     *
     * @return \NomencladorBundle\AspectosServicioIndicadores
     */
    public function getAspectosServiciosIndicadores()
    {
        return $this->aspectosServiciosIndicadores;
    }

    /**
     * Set evaluacionServicioEstado
     *
     * @param \ProyectoBundle\Entity\EvaluacionServicioEstado $evaluacionServicioEstado
     *
     * @return EvaluacionServicio
     */
    public function setEvaluacionServicioEstado(\ProyectoBundle\Entity\EvaluacionServicioEstado $evaluacionServicioEstado = null)
    {
        $this->evaluacionServicioEstado = $evaluacionServicioEstado;

        return $this;
    }

    /**
     * Get evaluacionServicioEstado
     *
     * @return \ProyectoBundle\Entity\EvaluacionServicioEstado
     */
    public function getEvaluacionServicioEstado()
    {
        return $this->evaluacionServicioEstado;
    }

    /**
     * Set proyecto
     *
     * @param \ProyectoBundle\Entity\Proyecto $proyecto
     *
     * @return EvaluacionServicio
     */
    public function setProyecto(\ProyectoBundle\Entity\Proyecto $proyecto = null)
    {
        $this->proyecto = $proyecto;

        return $this;
    }

    /**
     * Get proyecto
     *
     * @return \ProyectoBundle\Entity\Proyecto
     */
    public function getProyecto()
    {
        return $this->proyecto;
    }
}
