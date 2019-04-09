<?php

namespace ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ValidacionProyecto
 *
 * @ORM\Table(name="validacion_proyecto", indexes={@ORM\Index(name="IDX_410F0A61F625D1BA", columns={"proyecto_id"})})
 * @ORM\Entity
 */
class ValidacionProyecto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="validacion_proyecto_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="forma_validacion", type="text", nullable=false)
     */
    private $formaValidacion;

    /**
     * @var string
     *
     * @ORM\Column(name="resultado_validacion", type="text", nullable=false)
     */
    private $resultadoValidacion;

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
     * Set formaValidacion
     *
     * @param string $formaValidacion
     *
     * @return ValidacionProyecto
     */
    public function setFormaValidacion($formaValidacion)
    {
        $this->formaValidacion = $formaValidacion;

        return $this;
    }

    /**
     * Get formaValidacion
     *
     * @return string
     */
    public function getFormaValidacion()
    {
        return $this->formaValidacion;
    }

    /**
     * Set resultadoValidacion
     *
     * @param string $resultadoValidacion
     *
     * @return ValidacionProyecto
     */
    public function setResultadoValidacion($resultadoValidacion)
    {
        $this->resultadoValidacion = $resultadoValidacion;

        return $this;
    }

    /**
     * Get resultadoValidacion
     *
     * @return string
     */
    public function getResultadoValidacion()
    {
        return $this->resultadoValidacion;
    }

    /**
     * Set proyecto
     *
     * @param \ProyectoBundle\Entity\Proyecto $proyecto
     *
     * @return ValidacionProyecto
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
