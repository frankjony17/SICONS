<?php

namespace ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TareaProyeccion
 *
 * @ORM\Table(name="tarea_proyeccion", indexes={@ORM\Index(name="IDX_A43374C5EF7A59DF", columns={"elemento_control_id"}), @ORM\Index(name="IDX_A43374C5F625D1BA", columns={"proyecto_id"})})
 * @ORM\Entity
 */
class TareaProyeccion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tarea_proyeccion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="text", nullable=true)
     */
    private $observacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado", type="boolean", nullable=true)
     */
    private $estado;

    /**
     * @var \NomencladorBundle\Entity\ElementoControl
     *
     * @ORM\ManyToOne(targetEntity="NomencladorBundle\Entity\ElementoControl")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="elemento_control_id", referencedColumnName="id")
     * })
     */
    private $elementoControl;

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
     * Set observacion
     *
     * @param string $observacion
     *
     * @return TareaProyeccion
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set estado
     *
     * @param boolean $estado
     *
     * @return TareaProyeccion
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return boolean
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set elementoControl
     *
     * @param \NomencladorBundle\Entity\ElementoControl $elementoControl
     *
     * @return TareaProyeccion
     */
    public function setElementoControl(\NomencladorBundle\Entity\ElementoControl $elementoControl = null)
    {
        $this->elementoControl = $elementoControl;

        return $this;
    }

    /**
     * Get elementoControl
     *
     * @return \NomencladorBundle\Entity\ElementoControl
     */
    public function getElementoControl()
    {
        return $this->elementoControl;
    }

    /**
     * Set proyecto
     *
     * @param \ProyectoBundle\Entity\Proyecto $proyecto
     *
     * @return TareaProyeccion
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
