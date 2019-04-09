<?php

namespace ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProyectoEspecialidadProyecto
 *
 * @ORM\Table(name="proyecto_especialidad_proyecto", indexes={@ORM\Index(name="IDX_4F7BEC50DFF28FE1", columns={"proyecto_especialidad_id"}), @ORM\Index(name="IDX_4F7BEC50F625D1BA", columns={"proyecto_id"})})
 * @ORM\Entity
 */
class ProyectoEspecialidadProyecto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="proyecto_especialidad_proyecto_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \NomencladorBundle\Entity\ProyectoEspecialidad
     *
     * @ORM\ManyToOne(targetEntity="NomencladorBundle\Entity\ProyectoEspecialidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proyecto_especialidad_id", referencedColumnName="id")
     * })
     */
    private $proyectoEspecialidad;

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="NomencladorBundle\Entity\ControlCalidad", mappedBy="proyectoEspecialidadProyecto")
     */
    private $controlCalidad;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->controlCalidad = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set proyectoEspecialidad
     *
     * @param \NomencladorBundle\Entity\ProyectoEspecialidad $proyectoEspecialidad
     *
     * @return ProyectoEspecialidadProyecto
     */
    public function setProyectoEspecialidad(\NomencladorBundle\Entity\ProyectoEspecialidad $proyectoEspecialidad = null)
    {
        $this->proyectoEspecialidad = $proyectoEspecialidad;

        return $this;
    }

    /**
     * Get proyectoEspecialidad
     *
     * @return \NomencladorBundle\Entity\ProyectoEspecialidad
     */
    public function getProyectoEspecialidad()
    {
        return $this->proyectoEspecialidad;
    }

    /**
     * Set proyecto
     *
     * @param \ProyectoBundle\Entity\Proyecto $proyecto
     *
     * @return ProyectoEspecialidadProyecto
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

    /**
     * Add controlCalidad
     *
     * @param \NomencladorBundle\Entity\ControlCalidad $controlCalidad
     *
     * @return ProyectoEspecialidadProyecto
     */
    public function addControlCalidad(\NomencladorBundle\Entity\ControlCalidad $controlCalidad)
    {
        $this->controlCalidad[] = $controlCalidad;

        return $this;
    }

    /**
     * Remove controlCalidad
     *
     * @param \NomencladorBundle\Entity\ControlCalidad $controlCalidad
     */
    public function removeControlCalidad(\NomencladorBundle\Entity\ControlCalidad $controlCalidad)
    {
        $this->controlCalidad->removeElement($controlCalidad);
    }

    /**
     * Get controlCalidad
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getControlCalidad()
    {
        return $this->controlCalidad;
    }
}
