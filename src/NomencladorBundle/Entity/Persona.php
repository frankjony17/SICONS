<?php

namespace NomencladorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Persona
 *
 * @ORM\Table(name="persona", indexes={@ORM\Index(name="IDX_51E5B69B813AC380", columns={"cargo_id"}), @ORM\Index(name="IDX_51E5B69B6CA204EF", columns={"entidad_id"}), @ORM\Index(name="IDX_51E5B69BAFDA3166", columns={"persona_tipo_id"})})
 * @ORM\Entity
 */
class Persona
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="persona_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_apellidos", type="string", length=128, nullable=false)
     */
    private $nombreApellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="telefonos", type="string", length=48, nullable=true)
     */
    private $telefonos;

    /**
     * @var string
     *
     * @ORM\Column(name="correo_electronico", type="string", length=128, nullable=true)
     */
    private $correoElectronico;

    /**
     * @var \Cargo
     *
     * @ORM\ManyToOne(targetEntity="Cargo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cargo_id", referencedColumnName="id")
     * })
     */
    private $cargo;

    /**
     * @var \Entidad
     *
     * @ORM\ManyToOne(targetEntity="Entidad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="entidad_id", referencedColumnName="id")
     * })
     */
    private $entidad;

    /**
     * @var \PersonaTipo
     *
     * @ORM\ManyToOne(targetEntity="PersonaTipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="persona_tipo_id", referencedColumnName="id")
     * })
     */
    private $personaTipo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ProyectoBundle\Entity\MedidasCorrectivas", inversedBy="persona")
     * @ORM\JoinTable(name="medidas_correctivas_persona",
     *   joinColumns={
     *     @ORM\JoinColumn(name="persona_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="medidas_correctivas_id", referencedColumnName="id")
     *   }
     * )
     */
    private $medidasCorrectivas;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ProyectoBundle\Entity\ProyectoConsejoTecnico", inversedBy="persona")
     * @ORM\JoinTable(name="participantes",
     *   joinColumns={
     *     @ORM\JoinColumn(name="persona_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="proyecto_consejo_tecnico_id", referencedColumnName="id")
     *   }
     * )
     */
    private $proyectoConsejoTecnico;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->medidasCorrectivas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->proyectoConsejoTecnico = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombreApellidos
     *
     * @param string $nombreApellidos
     *
     * @return Persona
     */
    public function setNombreApellidos($nombreApellidos)
    {
        $this->nombreApellidos = $nombreApellidos;

        return $this;
    }

    /**
     * Get nombreApellidos
     *
     * @return string
     */
    public function getNombreApellidos()
    {
        return $this->nombreApellidos;
    }

    /**
     * Set telefonos
     *
     * @param string $telefonos
     *
     * @return Persona
     */
    public function setTelefonos($telefonos)
    {
        $this->telefonos = $telefonos;

        return $this;
    }

    /**
     * Get telefonos
     *
     * @return string
     */
    public function getTelefonos()
    {
        return $this->telefonos;
    }

    /**
     * Set correoElectronico
     *
     * @param string $correoElectronico
     *
     * @return Persona
     */
    public function setCorreoElectronico($correoElectronico)
    {
        $this->correoElectronico = $correoElectronico;

        return $this;
    }

    /**
     * Get correoElectronico
     *
     * @return string
     */
    public function getCorreoElectronico()
    {
        return $this->correoElectronico;
    }

    /**
     * Set cargo
     *
     * @param \NomencladorBundle\Entity\Cargo $cargo
     *
     * @return Persona
     */
    public function setCargo(\NomencladorBundle\Entity\Cargo $cargo = null)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get cargo
     *
     * @return \NomencladorBundle\Entity\Cargo
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set entidad
     *
     * @param \NomencladorBundle\Entity\Entidad $entidad
     *
     * @return Persona
     */
    public function setEntidad(\NomencladorBundle\Entity\Entidad $entidad = null)
    {
        $this->entidad = $entidad;

        return $this;
    }

    /**
     * Get entidad
     *
     * @return \NomencladorBundle\Entity\Entidad
     */
    public function getEntidad()
    {
        return $this->entidad;
    }

    /**
     * Set personaTipo
     *
     * @param \NomencladorBundle\Entity\PersonaTipo $personaTipo
     *
     * @return Persona
     */
    public function setPersonaTipo(\NomencladorBundle\Entity\PersonaTipo $personaTipo = null)
    {
        $this->personaTipo = $personaTipo;

        return $this;
    }

    /**
     * Get personaTipo
     *
     * @return \NomencladorBundle\Entity\PersonaTipo
     */
    public function getPersonaTipo()
    {
        return $this->personaTipo;
    }

    /**
     * Add medidasCorrectiva
     *
     * @param \ProyectoBundle\Entity\MedidasCorrectivas $medidasCorrectiva
     *
     * @return Persona
     */
    public function addMedidasCorrectiva(\ProyectoBundle\Entity\MedidasCorrectivas $medidasCorrectiva)
    {
        $this->medidasCorrectivas[] = $medidasCorrectiva;

        return $this;
    }

    /**
     * Remove medidasCorrectiva
     *
     * @param \ProyectoBundle\Entity\MedidasCorrectivas $medidasCorrectiva
     */
    public function removeMedidasCorrectiva(\ProyectoBundle\Entity\MedidasCorrectivas $medidasCorrectiva)
    {
        $this->medidasCorrectivas->removeElement($medidasCorrectiva);
    }

    /**
     * Get medidasCorrectivas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMedidasCorrectivas()
    {
        return $this->medidasCorrectivas;
    }

    /**
     * Add proyectoConsejoTecnico
     *
     * @param \ProyectoBundle\Entity\ProyectoConsejoTecnico $proyectoConsejoTecnico
     *
     * @return Persona
     */
    public function addProyectoConsejoTecnico(\ProyectoBundle\Entity\ProyectoConsejoTecnico $proyectoConsejoTecnico)
    {
        $this->proyectoConsejoTecnico[] = $proyectoConsejoTecnico;

        return $this;
    }

    /**
     * Remove proyectoConsejoTecnico
     *
     * @param \ProyectoBundle\Entity\ProyectoConsejoTecnico $proyectoConsejoTecnico
     */
    public function removeProyectoConsejoTecnico(\ProyectoBundle\Entity\ProyectoConsejoTecnico $proyectoConsejoTecnico)
    {
        $this->proyectoConsejoTecnico->removeElement($proyectoConsejoTecnico);
    }

    /**
     * Get proyectoConsejoTecnico
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProyectoConsejoTecnico()
    {
        return $this->proyectoConsejoTecnico;
    }
}
