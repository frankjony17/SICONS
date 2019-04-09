<?php

namespace ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EquipoTrabajo
 *
 * @ORM\Table(name="equipo_trabajo", uniqueConstraints={@ORM\UniqueConstraint(name="equipo_trabajo_persona_id_proyecto_id_key", columns={"persona_id", "proyecto_id"})}, indexes={@ORM\Index(name="IDX_B0F82E28F5F88DB9", columns={"persona_id"}), @ORM\Index(name="IDX_B0F82E28F625D1BA", columns={"proyecto_id"})})
 * @ORM\Entity
 */
class EquipoTrabajo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="equipo_trabajo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="participacion", type="float", precision=10, scale=0, nullable=true)
     */
    private $participacion;

    /**
     * @var \NomencladorBundle\Entity\Persona
     *
     * @ORM\ManyToOne(targetEntity="NomencladorBundle\Entity\Persona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="persona_id", referencedColumnName="id")
     * })
     */
    private $persona;

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
     * @ORM\ManyToMany(targetEntity="NomencladorBundle\Entity\EquipoTrabajoEspecialidad", inversedBy="equipoTrabajo")
     * @ORM\JoinTable(name="equipo_trabajo_responsabilidad",
     *   joinColumns={
     *     @ORM\JoinColumn(name="equipo_trabajo_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="equipo_trabajo_especialidad_id", referencedColumnName="id")
     *   }
     * )
     */
    private $equipoTrabajoEspecialidad;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->equipoTrabajoEspecialidad = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set participacion
     *
     * @param float $participacion
     *
     * @return EquipoTrabajo
     */
    public function setParticipacion($participacion)
    {
        $this->participacion = $participacion;

        return $this;
    }

    /**
     * Get participacion
     *
     * @return float
     */
    public function getParticipacion()
    {
        return $this->participacion;
    }

    /**
     * Set persona
     *
     * @param \NomencladorBundle\Entity\Persona $persona
     *
     * @return EquipoTrabajo
     */
    public function setPersona(\NomencladorBundle\Entity\Persona $persona = null)
    {
        $this->persona = $persona;

        return $this;
    }

    /**
     * Get persona
     *
     * @return \NomencladorBundle\Entity\Persona
     */
    public function getPersona()
    {
        return $this->persona;
    }

    /**
     * Set proyecto
     *
     * @param \ProyectoBundle\Entity\Proyecto $proyecto
     *
     * @return EquipoTrabajo
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
     * Add equipoTrabajoEspecialidad
     *
     * @param \NomencladorBundle\Entity\EquipoTrabajoEspecialidad $equipoTrabajoEspecialidad
     *
     * @return EquipoTrabajo
     */
    public function addEquipoTrabajoEspecialidad(\NomencladorBundle\Entity\EquipoTrabajoEspecialidad $equipoTrabajoEspecialidad)
    {
        $this->equipoTrabajoEspecialidad[] = $equipoTrabajoEspecialidad;

        return $this;
    }

    /**
     * Remove equipoTrabajoEspecialidad
     *
     * @param \NomencladorBundle\Entity\EquipoTrabajoEspecialidad $equipoTrabajoEspecialidad
     */
    public function removeEquipoTrabajoEspecialidad(\NomencladorBundle\Entity\EquipoTrabajoEspecialidad $equipoTrabajoEspecialidad)
    {
        $this->equipoTrabajoEspecialidad->removeElement($equipoTrabajoEspecialidad);
    }

    /**
     * Get equipoTrabajoEspecialidad
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEquipoTrabajoEspecialidad()
    {
        return $this->equipoTrabajoEspecialidad;
    }

    public function getEquipoTrabajoEspecialidadArray()
    {
        $especialidades = array();

        foreach ($this->equipoTrabajoEspecialidad as $ete) {
            $especialidades[] = $ete->getNombre();
        }
        return $especialidades;
    }

    public function getEquipoTrabajoEspecialidadString()
    {
        $especialidades = "";

        foreach ($this->equipoTrabajoEspecialidad as $ete) {
            $especialidades .= $ete->getNombre() .", ";
        }
        return rtrim($especialidades, ", ");
    }

    public function getEquipoTrabajoEspecialidadIds()
    {
        $especialidades = array();

        foreach ($this->equipoTrabajoEspecialidad as $ete) {
            $especialidades[] = $ete->getId();
        }
        return $especialidades;
    }
}
