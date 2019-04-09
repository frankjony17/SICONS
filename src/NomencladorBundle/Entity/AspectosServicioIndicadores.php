<?php

namespace NomencladorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AspectosServicioIndicadores
 *
 * @ORM\Table(name="aspectos_servicio_indicadores")
 * @ORM\Entity
 */
class AspectosServicioIndicadores
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="aspectos_servicio_indicadores_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="aspectos", type="string", length=128, nullable=false)
     */
    private $aspectos;

    /**
     * @var string
     *
     * @ORM\Column(name="cumplimiento", type="string", length=128, nullable=false)
     */
    private $cumplimiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="puntos", type="integer", nullable=false)
     */
    private $puntos;



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
     * Set aspectos
     *
     * @param string $aspectos
     *
     * @return AspectosServicioIndicadores
     */
    public function setAspectos($aspectos)
    {
        $this->aspectos = $aspectos;

        return $this;
    }

    /**
     * Get aspectos
     *
     * @return string
     */
    public function getAspectos()
    {
        return $this->aspectos;
    }

    /**
     * Set cumplimiento
     *
     * @param string $cumplimiento
     *
     * @return AspectosServicioIndicadores
     */
    public function setCumplimiento($cumplimiento)
    {
        $this->cumplimiento = $cumplimiento;

        return $this;
    }

    /**
     * Get cumplimiento
     *
     * @return string
     */
    public function getCumplimiento()
    {
        return $this->cumplimiento;
    }

    /**
     * Set puntos
     *
     * @param integer $puntos
     *
     * @return AspectosServicioIndicadores
     */
    public function setPuntos($puntos)
    {
        $this->puntos = $puntos;

        return $this;
    }

    /**
     * Get puntos
     *
     * @return integer
     */
    public function getPuntos()
    {
        return $this->puntos;
    }
}
