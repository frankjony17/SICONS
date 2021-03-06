<?php

namespace NomencladorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EquipoTrabajoEspecialidad
 *
 * @ORM\Table(name="equipo_trabajo_especialidad", uniqueConstraints={@ORM\UniqueConstraint(name="equipo_trabajo_especialidad_nombre_key", columns={"nombre"})})
 * @ORM\Entity
 */
class EquipoTrabajoEspecialidad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="equipo_trabajo_especialidad_id_seq", allocationSize=1, initialValue=1)
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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ProyectoBundle\Entity\EquipoTrabajo", mappedBy="equipoTrabajoEspecialidad")
     */
    private $equipoTrabajo;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->equipoTrabajo = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return EquipoTrabajoEspecialidad
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
     * @return EquipoTrabajoEspecialidad
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
     * Add equipoTrabajo
     *
     * @param \ProyectoBundle\Entity\EquipoTrabajo $equipoTrabajo
     *
     * @return EquipoTrabajoEspecialidad
     */
    public function addEquipoTrabajo(\ProyectoBundle\Entity\EquipoTrabajo $equipoTrabajo)
    {
        $this->equipoTrabajo[] = $equipoTrabajo;

        return $this;
    }

    /**
     * Remove equipoTrabajo
     *
     * @param \ProyectoBundle\Entity\EquipoTrabajo $equipoTrabajo
     */
    public function removeEquipoTrabajo(\ProyectoBundle\Entity\EquipoTrabajo $equipoTrabajo)
    {
        $this->equipoTrabajo->removeElement($equipoTrabajo);
    }

    /**
     * Get equipoTrabajo
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEquipoTrabajo()
    {
        return $this->equipoTrabajo;
    }
}
