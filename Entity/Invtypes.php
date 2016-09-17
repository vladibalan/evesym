<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invtypes
 *
 * @ORM\Table(name="invTypes", indexes={@ORM\Index(name="ix_invTypes_groupID", columns={"groupID"}), @ORM\Index(name="marketGroupID", columns={"marketGroupID"}), @ORM\Index(name="soundID", columns={"soundID"}), @ORM\Index(name="graphicID", columns={"graphicID"}), @ORM\Index(name="iconID", columns={"iconID"}), @ORM\Index(name="raceID", columns={"raceID"})})
 * @ORM\Entity
 */
class Invtypes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="typeID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $typeid;

    /**
     * @var string
     *
     * @ORM\Column(name="typeName", type="string", length=100, nullable=true)
     */
    private $typename;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="mass", type="float", precision=10, scale=0, nullable=true)
     */
    private $mass;

    /**
     * @var float
     *
     * @ORM\Column(name="volume", type="float", precision=10, scale=0, nullable=true)
     */
    private $volume;

    /**
     * @var float
     *
     * @ORM\Column(name="capacity", type="float", precision=10, scale=0, nullable=true)
     */
    private $capacity;

    /**
     * @var integer
     *
     * @ORM\Column(name="portionSize", type="integer", nullable=true)
     */
    private $portionsize;

    /**
     * @var string
     *
     * @ORM\Column(name="basePrice", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $baseprice;

    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean", nullable=true)
     */
    private $published;

    /**
     * @var integer
     *
     * @ORM\Column(name="soundID", type="integer", nullable=true)
     */
    private $soundid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invgroups
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invgroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="groupID", referencedColumnName="groupID")
     * })
     */
    private $groupid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Eveicons
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Eveicons")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iconID", referencedColumnName="iconID")
     * })
     */
    private $iconid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Evegraphics
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Evegraphics")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="graphicID", referencedColumnName="graphicID")
     * })
     */
    private $graphicid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invmarketgroups
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invmarketgroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="marketGroupID", referencedColumnName="marketGroupID")
     * })
     */
    private $marketgroupid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Chrraces
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Chrraces")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="raceID", referencedColumnName="raceID")
     * })
     */
    private $raceid;



    /**
     * Get typeid
     *
     * @return integer
     */
    public function getTypeid()
    {
        return $this->typeid;
    }

    /**
     * Set typename
     *
     * @param string $typename
     *
     * @return Invtypes
     */
    public function setTypename($typename)
    {
        $this->typename = $typename;

        return $this;
    }

    /**
     * Get typename
     *
     * @return string
     */
    public function getTypename()
    {
        return $this->typename;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Invtypes
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set mass
     *
     * @param float $mass
     *
     * @return Invtypes
     */
    public function setMass($mass)
    {
        $this->mass = $mass;

        return $this;
    }

    /**
     * Get mass
     *
     * @return float
     */
    public function getMass()
    {
        return $this->mass;
    }

    /**
     * Set volume
     *
     * @param float $volume
     *
     * @return Invtypes
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Get volume
     *
     * @return float
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set capacity
     *
     * @param float $capacity
     *
     * @return Invtypes
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return float
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set portionsize
     *
     * @param integer $portionsize
     *
     * @return Invtypes
     */
    public function setPortionsize($portionsize)
    {
        $this->portionsize = $portionsize;

        return $this;
    }

    /**
     * Get portionsize
     *
     * @return integer
     */
    public function getPortionsize()
    {
        return $this->portionsize;
    }

    /**
     * Set baseprice
     *
     * @param string $baseprice
     *
     * @return Invtypes
     */
    public function setBaseprice($baseprice)
    {
        $this->baseprice = $baseprice;

        return $this;
    }

    /**
     * Get baseprice
     *
     * @return string
     */
    public function getBaseprice()
    {
        return $this->baseprice;
    }

    /**
     * Set published
     *
     * @param boolean $published
     *
     * @return Invtypes
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set soundid
     *
     * @param integer $soundid
     *
     * @return Invtypes
     */
    public function setSoundid($soundid)
    {
        $this->soundid = $soundid;

        return $this;
    }

    /**
     * Get soundid
     *
     * @return integer
     */
    public function getSoundid()
    {
        return $this->soundid;
    }

    /**
     * Set groupid
     *
     * @param \Vibs\EvesymBundle\Entity\Invgroups $groupid
     *
     * @return Invtypes
     */
    public function setGroupid(\Vibs\EvesymBundle\Entity\Invgroups $groupid = null)
    {
        $this->groupid = $groupid;

        return $this;
    }

    /**
     * Get groupid
     *
     * @return \Vibs\EvesymBundle\Entity\Invgroups
     */
    public function getGroupid()
    {
        return $this->groupid;
    }

    /**
     * Set iconid
     *
     * @param \Vibs\EvesymBundle\Entity\Eveicons $iconid
     *
     * @return Invtypes
     */
    public function setIconid(\Vibs\EvesymBundle\Entity\Eveicons $iconid = null)
    {
        $this->iconid = $iconid;

        return $this;
    }

    /**
     * Get iconid
     *
     * @return \Vibs\EvesymBundle\Entity\Eveicons
     */
    public function getIconid()
    {
        return $this->iconid;
    }

    /**
     * Set graphicid
     *
     * @param \Vibs\EvesymBundle\Entity\Evegraphics $graphicid
     *
     * @return Invtypes
     */
    public function setGraphicid(\Vibs\EvesymBundle\Entity\Evegraphics $graphicid = null)
    {
        $this->graphicid = $graphicid;

        return $this;
    }

    /**
     * Get graphicid
     *
     * @return \Vibs\EvesymBundle\Entity\Evegraphics
     */
    public function getGraphicid()
    {
        return $this->graphicid;
    }

    /**
     * Set marketgroupid
     *
     * @param \Vibs\EvesymBundle\Entity\Invmarketgroups $marketgroupid
     *
     * @return Invtypes
     */
    public function setMarketgroupid(\Vibs\EvesymBundle\Entity\Invmarketgroups $marketgroupid = null)
    {
        $this->marketgroupid = $marketgroupid;

        return $this;
    }

    /**
     * Get marketgroupid
     *
     * @return \Vibs\EvesymBundle\Entity\Invmarketgroups
     */
    public function getMarketgroupid()
    {
        return $this->marketgroupid;
    }

    /**
     * Set raceid
     *
     * @param \Vibs\EvesymBundle\Entity\Chrraces $raceid
     *
     * @return Invtypes
     */
    public function setRaceid(\Vibs\EvesymBundle\Entity\Chrraces $raceid = null)
    {
        $this->raceid = $raceid;

        return $this;
    }

    /**
     * Get raceid
     *
     * @return \Vibs\EvesymBundle\Entity\Chrraces
     */
    public function getRaceid()
    {
        return $this->raceid;
    }
}
