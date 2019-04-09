<?php

namespace ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proyecto
 *
 * @ORM\Table(name="proyecto", uniqueConstraints={@ORM\UniqueConstraint(name="proyecto_codigo_key", columns={"codigo"}), @ORM\UniqueConstraint(name="proyecto_nombre_fecha_key", columns={"nombre", "fecha"})}, indexes={@ORM\Index(name="IDX_6FD202B9C7DD0E0C", columns={"proyecto_tipo_id"})})
 * @ORM\Entity(repositoryClass="ProyectoBundle\Entity\ProyectoRepository")
 */
class Proyecto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="proyecto_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="codigo", type="string", length=50, nullable=false)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=78, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="grupo", type="string", length=128, nullable=true)
     */
    private $grupo;

    /**
     * @var string
     *
     * @ORM\Column(name="contrato", type="string", length=128, nullable=true)
     */
    private $contrato;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", nullable=true)
     */
    private $descripcion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado", type="boolean", nullable=true)
     */
    private $estado;

    /**
     * @var \NomencladorBundle\ProyectoTipo
     *
     * @ORM\ManyToOne(targetEntity="NomencladorBundle\Entity\ProyectoTipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proyecto_tipo_id", referencedColumnName="id")
     * })
     */
    private $proyectoTipo;

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
     * @return Proyecto
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
     * Set codigo
     *
     * @param string $codigo
     *
     * @return Proyecto
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Proyecto
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
     * Set grupo
     *
     * @param string $grupo
     *
     * @return Proyecto
     */
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;

        return $this;
    }

    /**
     * Get grupo
     *
     * @return string
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * Set contrato
     *
     * @param string $contrato
     *
     * @return Proyecto
     */
    public function setContrato($contrato)
    {
        $this->contrato = $contrato;

        return $this;
    }

    /**
     * Get contrato
     *
     * @return string
     */
    public function getContrato()
    {
        return $this->contrato;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Proyecto
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
     * Set estado
     *
     * @param boolean $estado
     *
     * @return Proyecto
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
     * Set proyectoTipo
     *
     * @param \NomencladorBundle\Entity\ProyectoTipo $proyectoTipo
     *
     * @return Proyecto
     */
    public function setProyectoTipo(\NomencladorBundle\Entity\ProyectoTipo $proyectoTipo = null)
    {
        $this->proyectoTipo = $proyectoTipo;

        return $this;
    }

    /**
     * Get proyectoTipo
     *
     * @return \NomencladorBundle\Entity\ProyectoTipo
     */
    public function getProyectoTipo()
    {
        return $this->proyectoTipo;
    }
}
