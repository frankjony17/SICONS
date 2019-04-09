<?php

namespace ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResultadoVerificacion
 *
 * @ORM\Table(name="resultado_verificacion", indexes={@ORM\Index(name="IDX_EC687FEF625D1BA", columns={"proyecto_id"})})
 * @ORM\Entity
 */
class ResultadoVerificacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="resultado_verificacion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="resultado", type="string", nullable=false)
     */
    private $resultado;

    /**
     * @var string
     *
     * @ORM\Column(name="acciones_recomendas", type="string", nullable=false)
     */
    private $accionesRecomendas;

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
     * Set resultado
     *
     * @param string $resultado
     *
     * @return ResultadoVerificacion
     */
    public function setResultado($resultado)
    {
        $this->resultado = $resultado;

        return $this;
    }

    /**
     * Get resultado
     *
     * @return string
     */
    public function getResultado()
    {
        return $this->resultado;
    }

    /**
     * Set accionesRecomendas
     *
     * @param string $accionesRecomendas
     *
     * @return ResultadoVerificacion
     */
    public function setAccionesRecomendas($accionesRecomendas)
    {
        $this->accionesRecomendas = $accionesRecomendas;

        return $this;
    }

    /**
     * Get accionesRecomendas
     *
     * @return string
     */
    public function getAccionesRecomendas()
    {
        return $this->accionesRecomendas;
    }

    /**
     * Set proyecto
     *
     * @param \ProyectoBundle\Entity\Proyecto $proyecto
     *
     * @return ResultadoVerificacion
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
