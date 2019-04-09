<?php

namespace ProyectoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acuerdos
 *
 * @ORM\Table(name="acuerdos", indexes={@ORM\Index(name="IDX_6C81117E7C9C42AE", columns={"proyecto_consejo_tecnico_id"})})
 * @ORM\Entity
 */
class Acuerdos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="acuerdos_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=false)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="acuerdo", type="text", nullable=false)
     */
    private $acuerdo;

    /**
     * @var \ProyectoConsejoTecnico
     *
     * @ORM\ManyToOne(targetEntity="ProyectoConsejoTecnico")
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
     * Set numero
     *
     * @param integer $numero
     *
     * @return Acuerdos
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set acuerdo
     *
     * @param string $acuerdo
     *
     * @return Acuerdos
     */
    public function setAcuerdo($acuerdo)
    {
        $this->acuerdo = $acuerdo;

        return $this;
    }

    /**
     * Get acuerdo
     *
     * @return string
     */
    public function getAcuerdo()
    {
        return $this->acuerdo;
    }

    /**
     * Set proyectoConsejoTecnico
     *
     * @param \ProyectoBundle\Entity\ProyectoConsejoTecnico $proyectoConsejoTecnico
     *
     * @return Acuerdos
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
