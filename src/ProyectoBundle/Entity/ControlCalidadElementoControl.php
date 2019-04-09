<?php

namespace ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ControlCalidadElementoControl
 *
 * @ORM\Table(name="control_calidad_elemento_control", indexes={@ORM\Index(name="IDX_61DD94E55C9FF33E", columns={"control_calidad_id"}), @ORM\Index(name="IDX_61DD94E5EF7A59DF", columns={"elemento_control_id"})})
 * @ORM\Entity
 */
class ControlCalidadElementoControl
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="control_calidad_elemento_control_id_seq", allocationSize=1, initialValue=1)
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
     * @var \NomencladorBundle\ControlCalidad
     *
     * @ORM\ManyToOne(targetEntity="NomencladorBundle\ControlCalidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="control_calidad_id", referencedColumnName="id")
     * })
     */
    private $controlCalidad;

    /**
     * @var \NomencladorBundle\ElementoControl
     *
     * @ORM\ManyToOne(targetEntity="NomencladorBundle\ElementoControl")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="elemento_control_id", referencedColumnName="id")
     * })
     */
    private $elementoControl;

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
     * @return ControlCalidadElementoControl
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
     * @return ControlCalidadElementoControl
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
     * Set controlCalidad
     *
     * @param \NomencladorBundle\ControlCalidad $controlCalidad
     *
     * @return ControlCalidadElementoControl
     */
    public function setControlCalidad(\NomencladorBundle\ControlCalidad $controlCalidad = null)
    {
        $this->controlCalidad = $controlCalidad;

        return $this;
    }

    /**
     * Get controlCalidad
     *
     * @return \NomencladorBundle\ControlCalidad
     */
    public function getControlCalidad()
    {
        return $this->controlCalidad;
    }

    /**
     * Set elementoControl
     *
     * @param \NomencladorBundle\ElementoControl $elementoControl
     *
     * @return ControlCalidadElementoControl
     */
    public function setElementoControl(\NomencladorBundle\ElementoControl $elementoControl = null)
    {
        $this->elementoControl = $elementoControl;

        return $this;
    }

    /**
     * Get elementoControl
     *
     * @return \NomencladorBundle\ElementoControl
     */
    public function getElementoControl()
    {
        return $this->elementoControl;
    }
}
