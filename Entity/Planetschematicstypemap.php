<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planetschematicstypemap
 *
 * @ORM\Table(name="planetSchematicsTypeMap", indexes={@ORM\Index(name="schematicID", columns={"schematicID"}), @ORM\Index(name="typeID", columns={"typeID"})})
 * @ORM\Entity
 */
class Planetschematicstypemap
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
     * @ORM\Column(name="quantity", type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isInput", type="boolean", nullable=true)
     */
    private $isinput;

    /**
     * @var \Vibs\EvesymBundle\Entity\Planetschematics
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Planetschematics")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="schematicID", referencedColumnName="schematicID")
     * })
     */
    private $schematicid;

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
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Planetschematicstypemap
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set isinput
     *
     * @param boolean $isinput
     *
     * @return Planetschematicstypemap
     */
    public function setIsinput($isinput)
    {
        $this->isinput = $isinput;

        return $this;
    }

    /**
     * Get isinput
     *
     * @return boolean
     */
    public function getIsinput()
    {
        return $this->isinput;
    }

    /**
     * Set schematicid
     *
     * @param \Vibs\EvesymBundle\Entity\Planetschematics $schematicid
     *
     * @return Planetschematicstypemap
     */
    public function setSchematicid(\Vibs\EvesymBundle\Entity\Planetschematics $schematicid = null)
    {
        $this->schematicid = $schematicid;

        return $this;
    }

    /**
     * Get schematicid
     *
     * @return \Vibs\EvesymBundle\Entity\Planetschematics
     */
    public function getSchematicid()
    {
        return $this->schematicid;
    }

    /**
     * Set typeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $typeid
     *
     * @return Planetschematicstypemap
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
