<?php

namespace ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RevisionGrafica
 *
 * @ORM\Table(name="revision_grafica", indexes={@ORM\Index(name="IDX_9F8EA09CE87EA1DA", columns={"equipo_trabajo_id"}), @ORM\Index(name="IDX_9F8EA09CED8CDAB9", columns={"escala_id"}), @ORM\Index(name="IDX_9F8EA09C8D02887B", columns={"formato_id"})})
 * @ORM\Entity
 */
class RevisionGrafica
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="revision_grafica_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="numero_plano", type="string", length=25, nullable=true)
     */
    private $numeroPlano;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero_errores", type="integer", nullable=true)
     */
    private $numeroErrores;

    /**
     * @var \EquipoTrabajo
     *
     * @ORM\ManyToOne(targetEntity="EquipoTrabajo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="equipo_trabajo_id", referencedColumnName="id")
     * })
     */
    private $equipoTrabajo;

    /**
     * @var \NomencladorBundle\Entity\Escalas
     *
     * @ORM\ManyToOne(targetEntity="NomencladorBundle\Entity\Escalas")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="escala_id", referencedColumnName="id")
     * })
     */
    private $escala;

    /**
     * @var \NomencladorBundle\Entity\Formato
     *
     * @ORM\ManyToOne(targetEntity="NomencladorBundle\Entity\Formato")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="formato_id", referencedColumnName="id")
     * })
     */
    private $formato;

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
     * @return RevisionGrafica
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
     * Set numeroPlano
     *
     * @param string $numeroPlano
     *
     * @return RevisionGrafica
     */
    public function setNumeroPlano($numeroPlano)
    {
        $this->numeroPlano = $numeroPlano;

        return $this;
    }

    /**
     * Get numeroPlano
     *
     * @return string
     */
    public function getNumeroPlano()
    {
        return $this->numeroPlano;
    }

    /**
     * Set numeroErrores
     *
     * @param integer $numeroErrores
     *
     * @return RevisionGrafica
     */
    public function setNumeroErrores($numeroErrores)
    {
        $this->numeroErrores = $numeroErrores;

        return $this;
    }

    /**
     * Get numeroErrores
     *
     * @return integer
     */
    public function getNumeroErrores()
    {
        return $this->numeroErrores;
    }

    /**
     * Set equipoTrabajo
     *
     * @param \ProyectoBundle\Entity\EquipoTrabajo $equipoTrabajo
     *
     * @return RevisionGrafica
     */
    public function setEquipoTrabajo(\ProyectoBundle\Entity\EquipoTrabajo $equipoTrabajo = null)
    {
        $this->equipoTrabajo = $equipoTrabajo;

        return $this;
    }

    /**
     * Get equipoTrabajo
     *
     * @return \ProyectoBundle\Entity\EquipoTrabajo
     */
    public function getEquipoTrabajo()
    {
        return $this->equipoTrabajo;
    }

    /**
     * Set escala
     *
     * @param \NomencladorBundle\Entity\Escalas $escala
     *
     * @return RevisionGrafica
     */
    public function setEscala(\NomencladorBundle\Entity\Escalas $escala = null)
    {
        $this->escala = $escala;

        return $this;
    }

    /**
     * Get escala
     *
     * @return \NomencladorBundle\Entity\Escalas
     */
    public function getEscala()
    {
        return $this->escala;
    }

    /**
     * Set formato
     *
     * @param \NomencladorBundle\Entity\Formato $formato
     *
     * @return RevisionGrafica
     */
    public function setFormato(\NomencladorBundle\Entity\Formato $formato = null)
    {
        $this->formato = $formato;

        return $this;
    }

    /**
     * Get formato
     *
     * @return \NomencladorBundle\Entity\Formato
     */
    public function getFormato()
    {
        return $this->formato;
    }
}
