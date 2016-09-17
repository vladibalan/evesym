<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mapdenormalize
 *
 * @ORM\Table(name="mapDenormalize", indexes={@ORM\Index(name="ix_mapDenormalize_regionID", columns={"regionID"}), @ORM\Index(name="mapDenormalize_IX_groupConstellation", columns={"groupID", "constellationID"}), @ORM\Index(name="ix_mapDenormalize_solarSystemID", columns={"solarSystemID"}), @ORM\Index(name="ix_mapDenormalize_orbitID", columns={"orbitID"}), @ORM\Index(name="mapDenormalize_IX_groupSystem", columns={"groupID", "solarSystemID"}), @ORM\Index(name="ix_mapDenormalize_constellationID", columns={"constellationID"}), @ORM\Index(name="mapDenormalize_IX_groupRegion", columns={"groupID", "regionID"}), @ORM\Index(name="ix_mapDenormalize_typeID", columns={"typeID"}), @ORM\Index(name="IDX_64B77626D6EFA878", columns={"groupID"})})
 * @ORM\Entity
 */
class Mapdenormalize
{
    /**
     * @var float
     *
     * @ORM\Column(name="x", type="float", precision=10, scale=0, nullable=true)
     */
    private $x;

    /**
     * @var float
     *
     * @ORM\Column(name="y", type="float", precision=10, scale=0, nullable=true)
     */
    private $y;

    /**
     * @var float
     *
     * @ORM\Column(name="z", type="float", precision=10, scale=0, nullable=true)
     */
    private $z;

    /**
     * @var float
     *
     * @ORM\Column(name="radius", type="float", precision=10, scale=0, nullable=true)
     */
    private $radius;

    /**
     * @var string
     *
     * @ORM\Column(name="itemName", type="string", length=100, nullable=true)
     */
    private $itemname;

    /**
     * @var float
     *
     * @ORM\Column(name="security", type="float", precision=10, scale=0, nullable=true)
     */
    private $security;

    /**
     * @var integer
     *
     * @ORM\Column(name="celestialIndex", type="integer", nullable=true)
     */
    private $celestialindex;

    /**
     * @var integer
     *
     * @ORM\Column(name="orbitIndex", type="integer", nullable=true)
     */
    private $orbitindex;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invnames
     *
     * @ORM\OneToOne(targetEntity="Vibs\EvesymBundle\Entity\Invnames")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="itemID", referencedColumnName="itemID", unique=true)
     * })
     */
    private $itemid;

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
     * @var \Vibs\EvesymBundle\Entity\Invgroups
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invgroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="groupID", referencedColumnName="groupID")
     * })
     */
    private $groupid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Mapsolarsystems
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Mapsolarsystems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="solarSystemID", referencedColumnName="solarSystemID")
     * })
     */
    private $solarsystemid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Mapconstellations
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Mapconstellations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="constellationID", referencedColumnName="constellationID")
     * })
     */
    private $constellationid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Mapregions
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Mapregions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="regionID", referencedColumnName="regionID")
     * })
     */
    private $regionid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Mapcelestialstatistics
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Mapcelestialstatistics")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="orbitID", referencedColumnName="celestialID")
     * })
     */
    private $orbitid;



    /**
     * Set x
     *
     * @param float $x
     *
     * @return Mapdenormalize
     */
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get x
     *
     * @return float
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set y
     *
     * @param float $y
     *
     * @return Mapdenormalize
     */
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }

    /**
     * Get y
     *
     * @return float
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set z
     *
     * @param float $z
     *
     * @return Mapdenormalize
     */
    public function setZ($z)
    {
        $this->z = $z;

        return $this;
    }

    /**
     * Get z
     *
     * @return float
     */
    public function getZ()
    {
        return $this->z;
    }

    /**
     * Set radius
     *
     * @param float $radius
     *
     * @return Mapdenormalize
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;

        return $this;
    }

    /**
     * Get radius
     *
     * @return float
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * Set itemname
     *
     * @param string $itemname
     *
     * @return Mapdenormalize
     */
    public function setItemname($itemname)
    {
        $this->itemname = $itemname;

        return $this;
    }

    /**
     * Get itemname
     *
     * @return string
     */
    public function getItemname()
    {
        return $this->itemname;
    }

    /**
     * Set security
     *
     * @param float $security
     *
     * @return Mapdenormalize
     */
    public function setSecurity($security)
    {
        $this->security = $security;

        return $this;
    }

    /**
     * Get security
     *
     * @return float
     */
    public function getSecurity()
    {
        return $this->security;
    }

    /**
     * Set celestialindex
     *
     * @param integer $celestialindex
     *
     * @return Mapdenormalize
     */
    public function setCelestialindex($celestialindex)
    {
        $this->celestialindex = $celestialindex;

        return $this;
    }

    /**
     * Get celestialindex
     *
     * @return integer
     */
    public function getCelestialindex()
    {
        return $this->celestialindex;
    }

    /**
     * Set orbitindex
     *
     * @param integer $orbitindex
     *
     * @return Mapdenormalize
     */
    public function setOrbitindex($orbitindex)
    {
        $this->orbitindex = $orbitindex;

        return $this;
    }

    /**
     * Get orbitindex
     *
     * @return integer
     */
    public function getOrbitindex()
    {
        return $this->orbitindex;
    }

    /**
     * Set itemid
     *
     * @param \Vibs\EvesymBundle\Entity\Invnames $itemid
     *
     * @return Mapdenormalize
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
     * Set typeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $typeid
     *
     * @return Mapdenormalize
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
     * Set groupid
     *
     * @param \Vibs\EvesymBundle\Entity\Invgroups $groupid
     *
     * @return Mapdenormalize
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
     * Set solarsystemid
     *
     * @param \Vibs\EvesymBundle\Entity\Mapsolarsystems $solarsystemid
     *
     * @return Mapdenormalize
     */
    public function setSolarsystemid(\Vibs\EvesymBundle\Entity\Mapsolarsystems $solarsystemid = null)
    {
        $this->solarsystemid = $solarsystemid;

        return $this;
    }

    /**
     * Get solarsystemid
     *
     * @return \Vibs\EvesymBundle\Entity\Mapsolarsystems
     */
    public function getSolarsystemid()
    {
        return $this->solarsystemid;
    }

    /**
     * Set constellationid
     *
     * @param \Vibs\EvesymBundle\Entity\Mapconstellations $constellationid
     *
     * @return Mapdenormalize
     */
    public function setConstellationid(\Vibs\EvesymBundle\Entity\Mapconstellations $constellationid = null)
    {
        $this->constellationid = $constellationid;

        return $this;
    }

    /**
     * Get constellationid
     *
     * @return \Vibs\EvesymBundle\Entity\Mapconstellations
     */
    public function getConstellationid()
    {
        return $this->constellationid;
    }

    /**
     * Set regionid
     *
     * @param \Vibs\EvesymBundle\Entity\Mapregions $regionid
     *
     * @return Mapdenormalize
     */
    public function setRegionid(\Vibs\EvesymBundle\Entity\Mapregions $regionid = null)
    {
        $this->regionid = $regionid;

        return $this;
    }

    /**
     * Get regionid
     *
     * @return \Vibs\EvesymBundle\Entity\Mapregions
     */
    public function getRegionid()
    {
        return $this->regionid;
    }

    /**
     * Set orbitid
     *
     * @param \Vibs\EvesymBundle\Entity\Mapcelestialstatistics $orbitid
     *
     * @return Mapdenormalize
     */
    public function setOrbitid(\Vibs\EvesymBundle\Entity\Mapcelestialstatistics $orbitid = null)
    {
        $this->orbitid = $orbitid;

        return $this;
    }

    /**
     * Get orbitid
     *
     * @return \Vibs\EvesymBundle\Entity\Mapcelestialstatistics
     */
    public function getOrbitid()
    {
        return $this->orbitid;
    }
}
