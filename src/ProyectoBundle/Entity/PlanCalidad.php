<?php

namespace ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanCalidad
 *
 * @ORM\Table(name="plan_calidad", indexes={@ORM\Index(name="IDX_392EA36FBDC787D3", columns={"elementos_control_id"}), @ORM\Index(name="IDX_392EA36FF625D1BA", columns={"proyecto_id"})})
 * @ORM\Entity
 */
class PlanCalidad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="plan_calidad_id_seq", allocationSize=1, initialValue=1)
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
     *   @ORM\JoinColumn(name="elementos_control_id", referencedColumnName="id")
     * })
     */
    private $elementosControl;

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
     * @return PlanCalidad
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
     * @return PlanCalidad
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
     * Set elementosControl
     *
     * @param \NomencladorBundle\Entity\ElementoControl $elementosControl
     *
     * @return PlanCalidad
     */
    public function setElementosControl(\NomencladorBundle\Entity\ElementoControl $elementosControl = null)
    {
        $this->elementosControl = $elementosControl;

        return $this;
    }

    /**
     * Get elementosControl
     *
     * @return \NomencladorBundle\Entity\ElementoControl
     */
    public function getElementosControl()
    {
        return $this->elementosControl;
    }

    /**
     * Set proyecto
     *
     * @param \ProyectoBundle\Entity\Proyecto $proyecto
     *
     * @return PlanCalidad
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
