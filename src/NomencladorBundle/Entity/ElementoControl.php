<?php

namespace NomencladorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ElementoControl
 *
 * @ORM\Table(name="elemento_control", uniqueConstraints={@ORM\UniqueConstraint(name="elemento_control_nombre_key", columns={"nombre"})}, indexes={@ORM\Index(name="IDX_DB5373494202A870", columns={"elemento_control_tipo_id"})})
 * @ORM\Entity
 */
class ElementoControl
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="elemento_control_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=256, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=256, nullable=true)
     */
    private $descripcion;

    /**
     * @var \ElementoControlTipo
     *
     * @ORM\ManyToOne(targetEntity="ElementoControlTipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="elemento_control_tipo_id", referencedColumnName="id")
     * })
     */
    private $elementoControlTipo;



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
     * @return ElementoControl
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
     * @return ElementoControl
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
     * Set elementoControlTipo
     *
     * @param \NomencladorBundle\Entity\ElementoControlTipo $elementoControlTipo
     *
     * @return ElementoControl
     */
    public function setElementoControlTipo(\NomencladorBundle\Entity\ElementoControlTipo $elementoControlTipo = null)
    {
        $this->elementoControlTipo = $elementoControlTipo;

        return $this;
    }

    /**
     * Get elementoControlTipo
     *
     * @return \NomencladorBundle\Entity\ElementoControlTipo
     */
    public function getElementoControlTipo()
    {
        return $this->elementoControlTipo;
    }
}
