<?php

namespace ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProyetoControlCalidad
 *
 * @ORM\Table(name="proyeto_control_calidad", indexes={@ORM\Index(name="IDX_3D8620CF5C9FF33E", columns={"control_calidad_id"}), @ORM\Index(name="IDX_3D8620CFF625D1BA", columns={"proyecto_id"})})
 * @ORM\Entity
 */
class ProyetoControlCalidad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="proyeto_control_calidad_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="nombre", type="string", length=48, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="no_conformidades", type="text", nullable=true)
     */
    private $noConformidades;

    /**
     * @var \NomencladorBundle\Entity\ControlCalidad
     *
     * @ORM\ManyToOne(targetEntity="NomencladorBundle\Entity\ControlCalidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="control_calidad_id", referencedColumnName="id")
     * })
     */
    private $controlCalidad;

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
     * @return ProyetoControlCalidad
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return ProyetoControlCalidad
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set noConformidades
     *
     * @param string $noConformidades
     *
     * @return ProyetoControlCalidad
     */
    public function setNoConformidades($noConformidades)
    {
        $this->noConformidades = $noConformidades;

        return $this;
    }

    /**
     * Get noConformidades
     *
     * @return string
     */
    public function getNoConformidades()
    {
        return $this->noConformidades;
    }

    /**
     * Set controlCalidad
     *
     * @param \NomencladorBundle\Entity\ControlCalidad $controlCalidad
     *
     * @return ProyetoControlCalidad
     */
    public function setControlCalidad(\NomencladorBundle\Entity\ControlCalidad $controlCalidad = null)
    {
        $this->controlCalidad = $controlCalidad;

        return $this;
    }

    /**
     * Get controlCalidad
     *
     * @return \NomencladorBundle\Entity\ControlCalidad
     */
    public function getControlCalidad()
    {
        return $this->controlCalidad;
    }

    /**
     * Set proyecto
     *
     * @param \ProyectoBundle\Entity\Proyecto $proyecto
     *
     * @return ProyetoControlCalidad
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
