<?php

namespace ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProyectoObjetos
 *
 * @ORM\Table(name="proyecto_objetos", indexes={@ORM\Index(name="IDX_6CBFD2FC76F5CD27", columns={"objeto_id"}), @ORM\Index(name="IDX_6CBFD2FCF625D1BA", columns={"proyecto_id"})})
 * @ORM\Entity
 */
class ProyectoObjetos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="proyecto_objetos_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \NomencladorBundle\Entity\Objetos
     *
     * @ORM\ManyToOne(targetEntity="NomencladorBundle\Entity\Objetos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="objeto_id", referencedColumnName="id")
     * })
     */
    private $objeto;

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
     * @ORM\ManyToMany(targetEntity="NomencladorBundle\Entity\ControlCalidad", mappedBy="proyectoObjetos")
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
     * Set objeto
     *
     * @param \NomencladorBundle\Entity\Objetos $objeto
     *
     * @return ProyectoObjetos
     */
    public function setObjeto(\NomencladorBundle\Entity\Objetos $objeto = null)
    {
        $this->objeto = $objeto;

        return $this;
    }

    /**
     * Get objeto
     *
     * @return \NomencladorBundle\Entity\Objetos
     */
    public function getObjeto()
    {
        return $this->objeto;
    }

    /**
     * Set proyecto
     *
     * @param \ProyectoBundle\Entity\Proyecto $proyecto
     *
     * @return ProyectoObjetos
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
     * @return ProyectoObjetos
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
