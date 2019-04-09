<?php

namespace ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RevisionEscrita
 *
 * @ORM\Table(name="revision_escrita", indexes={@ORM\Index(name="IDX_6375752EE87EA1DA", columns={"equipo_trabajo_id"}), @ORM\Index(name="IDX_6375752E8D02887B", columns={"formato_id"})})
 * @ORM\Entity
 */
class RevisionEscrita
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="revision_escrita_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="documento", type="string", length=45, nullable=true)
     */
    private $documento;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero_hojas", type="integer", nullable=true)
     */
    private $numeroHojas;

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
     * @return RevisionEscrita
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
     * Set documento
     *
     * @param string $documento
     *
     * @return RevisionEscrita
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Get documento
     *
     * @return string
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set numeroHojas
     *
     * @param integer $numeroHojas
     *
     * @return RevisionEscrita
     */
    public function setNumeroHojas($numeroHojas)
    {
        $this->numeroHojas = $numeroHojas;

        return $this;
    }

    /**
     * Get numeroHojas
     *
     * @return integer
     */
    public function getNumeroHojas()
    {
        return $this->numeroHojas;
    }

    /**
     * Set numeroErrores
     *
     * @param integer $numeroErrores
     *
     * @return RevisionEscrita
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
     * @return RevisionEscrita
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
     * Set formato
     *
     * @param \NomencladorBundle\Entity\Formato $formato
     *
     * @return RevisionEscrita
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
