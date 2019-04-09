<?php

namespace ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RevisionContrato
 *
 * @ORM\Table(name="revision_contrato", indexes={@ORM\Index(name="IDX_2C35A5AC9531668A", columns={"aspectos_revizar_id"}), @ORM\Index(name="IDX_2C35A5ACF625D1BA", columns={"proyecto_id"})})
 * @ORM\Entity
 */
class RevisionContrato
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="revision_contrato_id_seq", allocationSize=1, initialValue=1)
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
     * @var \NomencladorBundle\Entity\AspectosRevizar
     *
     * @ORM\ManyToOne(targetEntity="NomencladorBundle\Entity\AspectosRevizar")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aspectos_revizar_id", referencedColumnName="id")
     * })
     */
    private $aspectosRevizar;

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
     * @return RevisionContrato
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
     * Set observacion
     *
     * @param string $observacion
     *
     * @return RevisionContrato
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
     * @return RevisionContrato
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
     * Set aspectosRevizar
     *
     * @param \NomencladorBundle\Entity\AspectosRevizar $aspectosRevizar
     *
     * @return RevisionContrato
     */
    public function setAspectosRevizar(\NomencladorBundle\Entity\AspectosRevizar $aspectosRevizar = null)
    {
        $this->aspectosRevizar = $aspectosRevizar;

        return $this;
    }

    /**
     * Get aspectosRevizar
     *
     * @return \NomencladorBundle\Entity\AspectosRevizar
     */
    public function getAspectosRevizar()
    {
        return $this->aspectosRevizar;
    }

    /**
     * Set proyecto
     *
     * @param \ProyectoBundle\Entity\Proyecto $proyecto
     *
     * @return RevisionContrato
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
