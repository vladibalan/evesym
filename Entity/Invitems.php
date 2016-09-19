<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invitems
 *
 * @ORM\Table(name="invItems", indexes={@ORM\Index(name="ix_invItems_locationID", columns={"locationID"}), @ORM\Index(name="items_IX_OwnerLocation", columns={"ownerID", "locationID"}), @ORM\Index(name="typeID", columns={"typeID"}), @ORM\Index(name="flagID", columns={"flagID"}), @ORM\Index(name="itemID", columns={"itemID"}), @ORM\Index(name="IDX_4A898CC9DB30DDED", columns={"ownerID"})})
 * @ORM\Entity
 */
class Invitems
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
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

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
     * @var \Vibs\EvesymBundle\Entity\Invflags
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invflags")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="flagID", referencedColumnName="flagID")
     * })
     */
    private $flagid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invnames
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invnames")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="itemID", referencedColumnName="itemID")
     * })
     */
    private $itemid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invnames
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invnames")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="locationID", referencedColumnName="itemID")
     * })
     */
    private $locationid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invnames
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invnames")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ownerID", referencedColumnName="itemID")
     * })
     */
    private $ownerid;



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
     * @return Invitems
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
     * Set typeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $typeid
     *
     * @return Invitems
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

    /**
     * Set flagid
     *
     * @param \Vibs\EvesymBundle\Entity\Invflags $flagid
     *
     * @return Invitems
     */
    public function setFlagid(\Vibs\EvesymBundle\Entity\Invflags $flagid = null)
    {
        $this->flagid = $flagid;

        return $this;
    }

    /**
     * Get flagid
     *
     * @return \Vibs\EvesymBundle\Entity\Invflags
     */
    public function getFlagid()
    {
        return $this->flagid;
    }

    /**
     * Set itemid
     *
     * @param \Vibs\EvesymBundle\Entity\Invnames $itemid
     *
     * @return Invitems
     */
    public function setItemid(\Vibs\EvesymBundle\Entity\Invnames $itemid = null)
    {
        $this->itemid = $itemid;

        return $this;
    }

    /**
     * Get itemid
     *
     * @return \Vibs\EvesymBundle\Entity\Invnames
     */
    public function getItemid()
    {
        return $this->itemid;
    }

    /**
     * Set locationid
     *
     * @param \Vibs\EvesymBundle\Entity\Invnames $locationid
     *
     * @return Invitems
     */
    public function setLocationid(\Vibs\EvesymBundle\Entity\Invnames $locationid = null)
    {
        $this->locationid = $locationid;

        return $this;
    }

    /**
     * Get locationid
     *
     * @return \Vibs\EvesymBundle\Entity\Invnames
     */
    public function getLocationid()
    {
        return $this->locationid;
    }

    /**
     * Set ownerid
     *
     * @param \Vibs\EvesymBundle\Entity\Invnames $ownerid
     *
     * @return Invitems
     */
    public function setOwnerid(\Vibs\EvesymBundle\Entity\Invnames $ownerid = null)
    {
        $this->ownerid = $ownerid;

        return $this;
    }

    /**
     * Get ownerid
     *
     * @return \Vibs\EvesymBundle\Entity\Invnames
     */
    public function getOwnerid()
    {
        return $this->ownerid;
    }
}
