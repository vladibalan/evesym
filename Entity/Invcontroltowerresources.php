<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invcontroltowerresources
 *
 * @ORM\Table(name="invControlTowerResources", indexes={@ORM\Index(name="controlTowerTypeID", columns={"controlTowerTypeID"}), @ORM\Index(name="factionID", columns={"factionID"}), @ORM\Index(name="resourceTypeID", columns={"resourceTypeID"})})
 * @ORM\Entity
 */
class Invcontroltowerresources
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
     * @ORM\Column(name="purpose", type="integer", nullable=true)
     */
    private $purpose;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @var float
     *
     * @ORM\Column(name="minSecurityLevel", type="float", precision=10, scale=0, nullable=true)
     */
    private $minsecuritylevel;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="controlTowerTypeID", referencedColumnName="typeID")
     * })
     */
    private $controltowertypeid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="resourceTypeID", referencedColumnName="typeID")
     * })
     */
    private $resourcetypeid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Chrfactions
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Chrfactions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="factionID", referencedColumnName="factionID")
     * })
     */
    private $factionid;



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
     * Set purpose
     *
     * @param integer $purpose
     *
     * @return Invcontroltowerresources
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;

        return $this;
    }

    /**
     * Get purpose
     *
     * @return integer
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Invcontroltowerresources
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
     * Set minsecuritylevel
     *
     * @param float $minsecuritylevel
     *
     * @return Invcontroltowerresources
     */
    public function setMinsecuritylevel($minsecuritylevel)
    {
        $this->minsecuritylevel = $minsecuritylevel;

        return $this;
    }

    /**
     * Get minsecuritylevel
     *
     * @return float
     */
    public function getMinsecuritylevel()
    {
        return $this->minsecuritylevel;
    }

    /**
     * Set controltowertypeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $controltowertypeid
     *
     * @return Invcontroltowerresources
     */
    public function setControltowertypeid(\Vibs\EvesymBundle\Entity\Invtypes $controltowertypeid = null)
    {
        $this->controltowertypeid = $controltowertypeid;

        return $this;
    }

    /**
     * Get controltowertypeid
     *
     * @return \Vibs\EvesymBundle\Entity\Invtypes
     */
    public function getControltowertypeid()
    {
        return $this->controltowertypeid;
    }

    /**
     * Set resourcetypeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $resourcetypeid
     *
     * @return Invcontroltowerresources
     */
    public function setResourcetypeid(\Vibs\EvesymBundle\Entity\Invtypes $resourcetypeid = null)
    {
        $this->resourcetypeid = $resourcetypeid;

        return $this;
    }

    /**
     * Get resourcetypeid
     *
     * @return \Vibs\EvesymBundle\Entity\Invtypes
     */
    public function getResourcetypeid()
    {
        return $this->resourcetypeid;
    }

    /**
     * Set factionid
     *
     * @param \Vibs\EvesymBundle\Entity\Chrfactions $factionid
     *
     * @return Invcontroltowerresources
     */
    public function setFactionid(\Vibs\EvesymBundle\Entity\Chrfactions $factionid = null)
    {
        $this->factionid = $factionid;

        return $this;
    }

    /**
     * Get factionid
     *
     * @return \Vibs\EvesymBundle\Entity\Chrfactions
     */
    public function getFactionid()
    {
        return $this->factionid;
    }
}
