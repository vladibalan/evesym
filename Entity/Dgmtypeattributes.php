<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dgmtypeattributes
 *
 * @ORM\Table(name="dgmTypeAttributes", indexes={@ORM\Index(name="ix_dgmTypeAttributes_attributeID", columns={"attributeID"}), @ORM\Index(name="typeID", columns={"typeID"})})
 * @ORM\Entity
 */
class Dgmtypeattributes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="valueInt", type="integer", nullable=true)
     */
    private $valueint;

    /**
     * @var float
     *
     * @ORM\Column(name="valueFloat", type="float", precision=10, scale=0, nullable=true)
     */
    private $valuefloat;

    /**
     * @var \Vibs\EvesymBundle\Entity\Dgmattributetypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Dgmattributetypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="attributeID", referencedColumnName="attributeID")
     * })
     */
    private $attributeid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="typeID", referencedColumnName="typeID")
     * })
     */
    private $typeid;



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
     * Set valueint
     *
     * @param integer $valueint
     *
     * @return Dgmtypeattributes
     */
    public function setValueint($valueint)
    {
        $this->valueint = $valueint;

        return $this;
    }

    /**
     * Get valueint
     *
     * @return integer
     */
    public function getValueint()
    {
        return $this->valueint;
    }

    /**
     * Set valuefloat
     *
     * @param float $valuefloat
     *
     * @return Dgmtypeattributes
     */
    public function setValuefloat($valuefloat)
    {
        $this->valuefloat = $valuefloat;

        return $this;
    }

    /**
     * Get valuefloat
     *
     * @return float
     */
    public function getValuefloat()
    {
        return $this->valuefloat;
    }

    /**
     * Set attributeid
     *
     * @param \Vibs\EvesymBundle\Entity\Dgmattributetypes $attributeid
     *
     * @return Dgmtypeattributes
     */
    public function setAttributeid(\Vibs\EvesymBundle\Entity\Dgmattributetypes $attributeid = null)
    {
        $this->attributeid = $attributeid;

        return $this;
    }

    /**
     * Get attributeid
     *
     * @return \Vibs\EvesymBundle\Entity\Dgmattributetypes
     */
    public function getAttributeid()
    {
        return $this->attributeid;
    }

    /**
     * Set typeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $typeid
     *
     * @return Dgmtypeattributes
     */
    public function setTypeid(\Vibs\EvesymBundle\Entity\Invtypes $typeid = null)
    {
        $this->typeid = $typeid;

        return $this;
    }

    /**
     * Get typeid
     *
     * @return \Vibs\EvesymBundle\Entity\Invtypes
     */
    public function getTypeid()
    {
        return $this->typeid;
    }
}
