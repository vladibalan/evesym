<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invmarketgroups
 *
 * @ORM\Table(name="invMarketGroups", indexes={@ORM\Index(name="parentGroupID", columns={"parentGroupID"}), @ORM\Index(name="iconID", columns={"iconID"})})
 * @ORM\Entity
 */
class Invmarketgroups
{
    /**
     * @var integer
     *
     * @ORM\Column(name="marketGroupID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $marketgroupid;

    /**
     * @var string
     *
     * @ORM\Column(name="marketGroupName", type="string", length=100, nullable=true)
     */
    private $marketgroupname;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=3000, nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hasTypes", type="boolean", nullable=true)
     */
    private $hastypes;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invmarketgroups
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invmarketgroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parentGroupID", referencedColumnName="marketGroupID")
     * })
     */
    private $parentgroupid;

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
     * Get marketgroupid
     *
     * @return integer
     */
    public function getMarketgroupid()
    {
        return $this->marketgroupid;
    }

    /**
     * Set marketgroupname
     *
     * @param string $marketgroupname
     *
     * @return Invmarketgroups
     */
    public function setMarketgroupname($marketgroupname)
    {
        $this->marketgroupname = $marketgroupname;

        return $this;
    }

    /**
     * Get marketgroupname
     *
     * @return string
     */
    public function getMarketgroupname()
    {
        return $this->marketgroupname;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Invmarketgroups
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
     * Set hastypes
     *
     * @param boolean $hastypes
     *
     * @return Invmarketgroups
     */
    public function setHastypes($hastypes)
    {
        $this->hastypes = $hastypes;

        return $this;
    }

    /**
     * Get hastypes
     *
     * @return boolean
     */
    public function getHastypes()
    {
        return $this->hastypes;
    }

    /**
     * Set parentgroupid
     *
     * @param \Vibs\EvesymBundle\Entity\Invmarketgroups $parentgroupid
     *
     * @return Invmarketgroups
     */
    public function setParentgroupid(\Vibs\EvesymBundle\Entity\Invmarketgroups $parentgroupid = null)
    {
        $this->parentgroupid = $parentgroupid;

        return $this;
    }

    /**
     * Get parentgroupid
     *
     * @return \Vibs\EvesymBundle\Entity\Invmarketgroups
     */
    public function getParentgroupid()
    {
        return $this->parentgroupid;
    }

    /**
     * Set iconid
     *
     * @param \Vibs\EvesymBundle\Entity\Eveicons $iconid
     *
     * @return Invmarketgroups
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
}
