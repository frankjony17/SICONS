<?php

namespace ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProyectoConsejoTecnico
 *
 * @ORM\Table(name="proyecto_consejo_tecnico", indexes={@ORM\Index(name="IDX_497ADFE73B162B6B", columns={"consejo_tecnico_id"}), @ORM\Index(name="IDX_497ADFE7F625D1BA", columns={"proyecto_id"})})
 * @ORM\Entity
 */
class ProyectoConsejoTecnico
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="proyecto_consejo_tecnico_id_seq", allocationSize=1, initialValue=1)
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
     * @ORM\Column(name="local", type="string", length=75, nullable=false)
     */
    private $local;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="text", nullable=true)
     */
    private $observacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado", type="boolean", nullable=true)
     */
    private $estado;

    /**
     * @var \NomencladorBundle\Entity\ConsejoTecnico
     *
     * @ORM\ManyToOne(targetEntity="NomencladorBundle\Entity\ConsejoTecnico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="consejo_tecnico_id", referencedColumnName="id")
     * })
     */
    private $consejoTecnico;

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
     * @ORM\ManyToMany(targetEntity="NomencladorBundle\Entity\Persona", mappedBy="proyectoConsejoTecnico")
     */
    private $persona;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->persona = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return ProyectoConsejoTecnico
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
     * Set local
     *
     * @param string $local
     *
     * @return ProyectoConsejoTecnico
     */
    public function setLocal($local)
    {
        $this->local = $local;

        return $this;
    }

    /**
     * Get local
     *
     * @return string
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return ProyectoConsejoTecnico
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set estado
     *
     * @param boolean $estado
     *
     * @return ProyectoConsejoTecnico
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
     * Set consejoTecnico
     *
     * @param \NomencladorBundle\Entity\ConsejoTecnico $consejoTecnico
     *
     * @return ProyectoConsejoTecnico
     */
    public function setConsejoTecnico(\NomencladorBundle\Entity\ConsejoTecnico $consejoTecnico = null)
    {
        $this->consejoTecnico = $consejoTecnico;

        return $this;
    }

    /**
     * Get consejoTecnico
     *
     * @return \NomencladorBundle\Entity\ConsejoTecnico
     */
    public function getConsejoTecnico()
    {
        return $this->consejoTecnico;
    }

    /**
     * Set proyecto
     *
     * @param \ProyectoBundle\Entity\Proyecto $proyecto
     *
     * @return ProyectoConsejoTecnico
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
     * Add persona
     *
     * @param \NomencladorBundle\Entity\Persona $persona
     *
     * @return ProyectoConsejoTecnico
     */
    public function addPersona(\NomencladorBundle\Entity\Persona $persona)
    {
        $this->persona[] = $persona;

        return $this;
    }

    /**
     * Remove persona
     *
     * @param \NomencladorBundle\Entity\Persona $persona
     */
    public function removePersona(\NomencladorBundle\Entity\Persona $persona)
    {
        $this->persona->removeElement($persona);
    }

    /**
     * Get persona
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * @return array
     */
    public function getPersonaArray()
    {
        $personasArray = array();
        foreach ($this->persona as $persona) {
            $personasArray[] = $persona;
        }
        return $personasArray;
    }
}
