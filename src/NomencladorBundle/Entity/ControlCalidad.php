<?php

namespace NomencladorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ControlCalidad
 *
 * @ORM\Table(name="control_calidad", uniqueConstraints={@ORM\UniqueConstraint(name="control_calidad_nombre_key", columns={"nombre"})}, indexes={@ORM\Index(name="IDX_278E68CB15A1504E", columns={"control_calidad_tipo_id"})})
 * @ORM\Entity
 */
class ControlCalidad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="control_calidad_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=48, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=128, nullable=true)
     */
    private $descripcion;

    /**
     * @var \ControlCalidadTipo
     *
     * @ORM\ManyToOne(targetEntity="ControlCalidadTipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="control_calidad_tipo_id", referencedColumnName="id")
     * })
     */
    private $controlCalidadTipo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ProyectoBundle\Entity\ProyectoObjetos", inversedBy="controlCalidad")
     * @ORM\JoinTable(name="control_calidad_proyecto_objetos",
     *   joinColumns={
     *     @ORM\JoinColumn(name="control_calidad_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="proyecto_objetos_id", referencedColumnName="id")
     *   }
     * )
     */
    private $proyectoObjetos;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ProyectoBundle\Entity\ProyectoEspecialidadProyecto", inversedBy="controlCalidad")
     * @ORM\JoinTable(name="control_calidad_proyecto_especialidad",
     *   joinColumns={
     *     @ORM\JoinColumn(name="control_calidad_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="proyecto_especialidad_proyecto_id", referencedColumnName="id")
     *   }
     * )
     */
    private $proyectoEspecialidadProyecto;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->proyectoObjetos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->proyectoEspecialidadProyecto = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return ControlCalidad
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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return ControlCalidad
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
     * Set controlCalidadTipo
     *
     * @param \NomencladorBundle\Entity\ControlCalidadTipo $controlCalidadTipo
     *
     * @return ControlCalidad
     */
    public function setControlCalidadTipo(\NomencladorBundle\Entity\ControlCalidadTipo $controlCalidadTipo = null)
    {
        $this->controlCalidadTipo = $controlCalidadTipo;

        return $this;
    }

    /**
     * Get controlCalidadTipo
     *
     * @return \NomencladorBundle\Entity\ControlCalidadTipo
     */
    public function getControlCalidadTipo()
    {
        return $this->controlCalidadTipo;
    }

    /**
     * Add proyectoEspecialidadProyecto
     *
     * @param \ProyectoBundle\Entity\ProyectoEspecialidadProyecto $proyectoEspecialidadProyecto
     *
     * @return ControlCalidad
     */
    public function addProyectoEspecialidadProyecto(\ProyectoBundle\Entity\ProyectoEspecialidadProyecto $proyectoEspecialidadProyecto)
    {
        $this->proyectoEspecialidadProyecto[] = $proyectoEspecialidadProyecto;

        return $this;
    }

    /**
     * Remove proyectoEspecialidadProyecto
     *
     * @param \ProyectoBundle\Entity\ProyectoEspecialidadProyecto $proyectoEspecialidadProyecto
     */
    public function removeProyectoEspecialidadProyecto(\ProyectoBundle\Entity\ProyectoEspecialidadProyecto $proyectoEspecialidadProyecto)
    {
        $this->proyectoEspecialidadProyecto->removeElement($proyectoEspecialidadProyecto);
    }

    /**
     * Get proyectoEspecialidadProyecto
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProyectoEspecialidadProyecto()
    {
        return $this->proyectoEspecialidadProyecto;
    }

    /**
     * Add proyectoObjeto
     *
     * @param \ProyectoBundle\Entity\ProyectoObjetos $proyectoObjeto
     *
     * @return ControlCalidad
     */
    public function addProyectoObjeto(\ProyectoBundle\Entity\ProyectoObjetos $proyectoObjeto)
    {
        $this->proyectoObjetos[] = $proyectoObjeto;

        return $this;
    }

    /**
     * Remove proyectoObjeto
     *
     * @param \ProyectoBundle\Entity\ProyectoObjetos $proyectoObjeto
     */
    public function removeProyectoObjeto(\ProyectoBundle\Entity\ProyectoObjetos $proyectoObjeto)
    {
        $this->proyectoObjetos->removeElement($proyectoObjeto);
    }

    /**
     * Get proyectoObjetos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProyectoObjetos()
    {
        return $this->proyectoObjetos;
    }
}
