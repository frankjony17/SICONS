<?php

namespace ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Intervencion
 *
 * @ORM\Table(name="intervencion", indexes={@ORM\Index(name="IDX_1CD67B8DF5F88DB9", columns={"persona_id"}), @ORM\Index(name="IDX_1CD67B8D7C9C42AE", columns={"proyecto_consejo_tecnico_id"})})
 * @ORM\Entity
 */
class Intervencion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="intervencion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="planteamiento", type="text", nullable=false)
     */
    private $planteamiento;

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
     * @var \ProyectoBundle\Entity\ProyectoConsejoTecnico
     *
     * @ORM\ManyToOne(targetEntity="ProyectoBundle\Entity\ProyectoConsejoTecnico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="proyecto_consejo_tecnico_id", referencedColumnName="id")
     * })
     */
    private $proyectoConsejoTecnico;

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
     * Set planteamiento
     *
     * @param string $planteamiento
     *
     * @return Intervencion
     */
    public function setPlanteamiento($planteamiento)
    {
        $this->planteamiento = $planteamiento;

        return $this;
    }

    /**
     * Get planteamiento
     *
     * @return string
     */
    public function getPlanteamiento()
    {
        return $this->planteamiento;
    }

    /**
     * Set persona
     *
     * @param \NomencladorBundle\Entity\Persona $persona
     *
     * @return Intervencion
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
     * Set proyectoConsejoTecnico
     *
     * @param \ProyectoBundle\Entity\ProyectoConsejoTecnico $proyectoConsejoTecnico
     *
     * @return Intervencion
     */
    public function setProyectoConsejoTecnico(\ProyectoBundle\Entity\ProyectoConsejoTecnico $proyectoConsejoTecnico = null)
    {
        $this->proyectoConsejoTecnico = $proyectoConsejoTecnico;

        return $this;
    }

    /**
     * Get proyectoConsejoTecnico
     *
     * @return \ProyectoBundle\Entity\ProyectoConsejoTecnico
     */
    public function getProyectoConsejoTecnico()
    {
        return $this->proyectoConsejoTecnico;
    }
}
