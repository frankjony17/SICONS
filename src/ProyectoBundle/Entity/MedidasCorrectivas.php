<?php

namespace ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MedidasCorrectivas
 *
 * @ORM\Table(name="medidas_correctivas", indexes={@ORM\Index(name="IDX_D0F65E631B159AFB", columns={"proyecto_control_calidad_id"})})
 * @ORM\Entity
 */
class MedidasCorrectivas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="medidas_correctivas_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="descripcion", type="text", nullable=false)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_cumplimiento", type="date", nullable=false)
     */
    private $fechaCumplimiento;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado", type="boolean", nullable=true)
     */
    private $estado;

    /**
     * @var \ProyetoControlCalidad
     *
     * @ORM\ManyToOne(targetEntity="ProyetoControlCalidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proyecto_control_calidad_id", referencedColumnName="id")
     * })
     */
    private $proyectoControlCalidad;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="NomencladorBundle\Entity\Persona", mappedBy="medidasCorrectivas")
     */
    private $persona;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->persona = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @return MedidasCorrectivas
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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return MedidasCorrectivas
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set fechaCumplimiento
     *
     * @param \DateTime $fechaCumplimiento
     *
     * @return MedidasCorrectivas
     */
    public function setFechaCumplimiento($fechaCumplimiento)
    {
        $this->fechaCumplimiento = $fechaCumplimiento;

        return $this;
    }

    /**
     * Get fechaCumplimiento
     *
     * @return \DateTime
     */
    public function getFechaCumplimiento()
    {
        return $this->fechaCumplimiento;
    }

    /**
     * Set estado
     *
     * @param boolean $estado
     *
     * @return MedidasCorrectivas
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
     * Set proyectoControlCalidad
     *
     * @param \ProyectoBundle\Entity\ProyetoControlCalidad $proyectoControlCalidad
     *
     * @return MedidasCorrectivas
     */
    public function setProyectoControlCalidad(\ProyectoBundle\Entity\ProyetoControlCalidad $proyectoControlCalidad = null)
    {
        $this->proyectoControlCalidad = $proyectoControlCalidad;

        return $this;
    }

    /**
     * Get proyectoControlCalidad
     *
     * @return \ProyectoBundle\Entity\ProyetoControlCalidad
     */
    public function getProyectoControlCalidad()
    {
        return $this->proyectoControlCalidad;
    }

    /**
     * Add persona
     *
     * @param \NomencladorBundle\Persona $persona
     *
     * @return MedidasCorrectivas
     */
    public function addPersona(\NomencladorBundle\Persona $persona)
    {
        $this->persona[] = $persona;

        return $this;
    }

    /**
     * Remove persona
     *
     * @param \NomencladorBundle\Persona $persona
     */
    public function removePersona(\NomencladorBundle\Persona $persona)
    {
        $this->persona->removeElement($persona);
    }

    /**
     * Get persona
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPersona()
    {
        return $this->persona;
    }
}
