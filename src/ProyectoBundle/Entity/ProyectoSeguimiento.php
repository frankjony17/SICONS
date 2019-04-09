<?php

namespace ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProyectoSeguimiento
 *
 * @ORM\Table(name="proyecto_seguimiento", indexes={@ORM\Index(name="IDX_361A6156F625D1BA", columns={"proyecto_id"}), @ORM\Index(name="IDX_361A6156D5CBBFEB", columns={"seguimiento_id"})})
 * @ORM\Entity
 */
class ProyectoSeguimiento
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="proyecto_seguimiento_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado", type="boolean", nullable=false)
     */
    private $estado;

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
     * @var \Seguimiento
     *
     * @ORM\ManyToOne(targetEntity="Seguimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="seguimiento_id", referencedColumnName="id")
     * })
     */
    private $seguimiento;

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
     * Set estado
     *
     * @param boolean $estado
     *
     * @return ProyectoSeguimiento
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
     * Set proyecto
     *
     * @param \ProyectoBundle\Entity\Proyecto $proyecto
     *
     * @return ProyectoSeguimiento
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
     * Set seguimiento
     *
     * @param \ProyectoBundle\Entity\Seguimiento $seguimiento
     *
     * @return ProyectoSeguimiento
     */
    public function setSeguimiento(\ProyectoBundle\Entity\Seguimiento $seguimiento = null)
    {
        $this->seguimiento = $seguimiento;

        return $this;
    }

    /**
     * Get seguimiento
     *
     * @return \ProyectoBundle\Entity\Seguimiento
     */
    public function getSeguimiento()
    {
        return $this->seguimiento;
    }
}