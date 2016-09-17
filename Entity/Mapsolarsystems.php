<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mapsolarsystems
 *
 * @ORM\Table(name="mapSolarSystems", indexes={@ORM\Index(name="ix_mapSolarSystems_constellationID", columns={"constellationID"}), @ORM\Index(name="ix_mapSolarSystems_regionID", columns={"regionID"}), @ORM\Index(name="ix_mapSolarSystems_security", columns={"security"}), @ORM\Index(name="factionID", columns={"factionID"}), @ORM\Index(name="sunTypeID", columns={"sunTypeID"})})
 * @ORM\Entity
 */
class Mapsolarsystems
{
    /**
     * @var integer
     *
     * @ORM\Column(name="solarSystemID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $solarsystemid;

    /**
     * @var string
     *
     * @ORM\Column(name="solarSystemName", type="string", length=100, nullable=true)
     */
    private $solarsystemname;

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
     * @ORM\Column(name="xMin", type="float", precision=10, scale=0, nullable=true)
     */
    private $xmin;

    /**
     * @var float
     *
     * @ORM\Column(name="xMax", type="float", precision=10, scale=0, nullable=true)
     */
    private $xmax;

    /**
     * @var float
     *
     * @ORM\Column(name="yMin", type="float", precision=10, scale=0, nullable=true)
     */
    private $ymin;

    /**
     * @var float
     *
     * @ORM\Column(name="yMax", type="float", precision=10, scale=0, nullable=true)
     */
    private $ymax;

    /**
     * @var float
     *
     * @ORM\Column(name="zMin", type="float", precision=10, scale=0, nullable=true)
     */
    private $zmin;

    /**
     * @var float
     *
     * @ORM\Column(name="zMax", type="float", precision=10, scale=0, nullable=true)
     */
    private $zmax;

    /**
     * @var float
     *
     * @ORM\Column(name="luminosity", type="float", precision=10, scale=0, nullable=true)
     */
    private $luminosity;

    /**
     * @var boolean
     *
     * @ORM\Column(name="border", type="boolean", nullable=true)
     */
    private $border;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fringe", type="boolean", nullable=true)
     */
    private $fringe;

    /**
     * @var boolean
     *
     * @ORM\Column(name="corridor", type="boolean", nullable=true)
     */
    private $corridor;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hub", type="boolean", nullable=true)
     */
    private $hub;

    /**
     * @var boolean
     *
     * @ORM\Column(name="international", type="boolean", nullable=true)
     */
    private $international;

    /**
     * @var boolean
     *
     * @ORM\Column(name="regional", type="boolean", nullable=true)
     */
    private $regional;

    /**
     * @var boolean
     *
     * @ORM\Column(name="constellation", type="boolean", nullable=true)
     */
    private $constellation;

    /**
     * @var float
     *
     * @ORM\Column(name="security", type="float", precision=10, scale=0, nullable=true)
     */
    private $security;

    /**
     * @var float
     *
     * @ORM\Column(name="radius", type="float", precision=10, scale=0, nullable=true)
     */
    private $radius;

    /**
     * @var string
     *
     * @ORM\Column(name="securityClass", type="string", length=2, nullable=true)
     */
    private $securityclass;

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
     * @var \Vibs\EvesymBundle\Entity\Mapconstellations
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Mapconstellations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="constellationID", referencedColumnName="constellationID")
     * })
     */
    private $constellationid;

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
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sunTypeID", referencedColumnName="typeID")
     * })
     */
    private $suntypeid;



    /**
     * Get solarsystemid
     *
     * @return integer
     */
    public function getSolarsystemid()
    {
        return $this->solarsystemid;
    }

    /**
     * Set solarsystemname
     *
     * @param string $solarsystemname
     *
     * @return Mapsolarsystems
     */
    public function setSolarsystemname($solarsystemname)
    {
        $this->solarsystemname = $solarsystemname;

        return $this;
    }

    /**
     * Get solarsystemname
     *
     * @return string
     */
    public function getSolarsystemname()
    {
        return $this->solarsystemname;
    }

    /**
     * Set x
     *
     * @param float $x
     *
     * @return Mapsolarsystems
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
     * @return Mapsolarsystems
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
     * @return Mapsolarsystems
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
     * Set xmin
     *
     * @param float $xmin
     *
     * @return Mapsolarsystems
     */
    public function setXmin($xmin)
    {
        $this->xmin = $xmin;

        return $this;
    }

    /**
     * Get xmin
     *
     * @return float
     */
    public function getXmin()
    {
        return $this->xmin;
    }

    /**
     * Set xmax
     *
     * @param float $xmax
     *
     * @return Mapsolarsystems
     */
    public function setXmax($xmax)
    {
        $this->xmax = $xmax;

        return $this;
    }

    /**
     * Get xmax
     *
     * @return float
     */
    public function getXmax()
    {
        return $this->xmax;
    }

    /**
     * Set ymin
     *
     * @param float $ymin
     *
     * @return Mapsolarsystems
     */
    public function setYmin($ymin)
    {
        $this->ymin = $ymin;

        return $this;
    }

    /**
     * Get ymin
     *
     * @return float
     */
    public function getYmin()
    {
        return $this->ymin;
    }

    /**
     * Set ymax
     *
     * @param float $ymax
     *
     * @return Mapsolarsystems
     */
    public function setYmax($ymax)
    {
        $this->ymax = $ymax;

        return $this;
    }

    /**
     * Get ymax
     *
     * @return float
     */
    public function getYmax()
    {
        return $this->ymax;
    }

    /**
     * Set zmin
     *
     * @param float $zmin
     *
     * @return Mapsolarsystems
     */
    public function setZmin($zmin)
    {
        $this->zmin = $zmin;

        return $this;
    }

    /**
     * Get zmin
     *
     * @return float
     */
    public function getZmin()
    {
        return $this->zmin;
    }

    /**
     * Set zmax
     *
     * @param float $zmax
     *
     * @return Mapsolarsystems
     */
    public function setZmax($zmax)
    {
        $this->zmax = $zmax;

        return $this;
    }

    /**
     * Get zmax
     *
     * @return float
     */
    public function getZmax()
    {
        return $this->zmax;
    }

    /**
     * Set luminosity
     *
     * @param float $luminosity
     *
     * @return Mapsolarsystems
     */
    public function setLuminosity($luminosity)
    {
        $this->luminosity = $luminosity;

        return $this;
    }

    /**
     * Get luminosity
     *
     * @return float
     */
    public function getLuminosity()
    {
        return $this->luminosity;
    }

    /**
     * Set border
     *
     * @param boolean $border
     *
     * @return Mapsolarsystems
     */
    public function setBorder($border)
    {
        $this->border = $border;

        return $this;
    }

    /**
     * Get border
     *
     * @return boolean
     */
    public function getBorder()
    {
        return $this->border;
    }

    /**
     * Set fringe
     *
     * @param boolean $fringe
     *
     * @return Mapsolarsystems
     */
    public function setFringe($fringe)
    {
        $this->fringe = $fringe;

        return $this;
    }

    /**
     * Get fringe
     *
     * @return boolean
     */
    public function getFringe()
    {
        return $this->fringe;
    }

    /**
     * Set corridor
     *
     * @param boolean $corridor
     *
     * @return Mapsolarsystems
     */
    public function setCorridor($corridor)
    {
        $this->corridor = $corridor;

        return $this;
    }

    /**
     * Get corridor
     *
     * @return boolean
     */
    public function getCorridor()
    {
        return $this->corridor;
    }

    /**
     * Set hub
     *
     * @param boolean $hub
     *
     * @return Mapsolarsystems
     */
    public function setHub($hub)
    {
        $this->hub = $hub;

        return $this;
    }

    /**
     * Get hub
     *
     * @return boolean
     */
    public function getHub()
    {
        return $this->hub;
    }

    /**
     * Set international
     *
     * @param boolean $international
     *
     * @return Mapsolarsystems
     */
    public function setInternational($international)
    {
        $this->international = $international;

        return $this;
    }

    /**
     * Get international
     *
     * @return boolean
     */
    public function getInternational()
    {
        return $this->international;
    }

    /**
     * Set regional
     *
     * @param boolean $regional
     *
     * @return Mapsolarsystems
     */
    public function setRegional($regional)
    {
        $this->regional = $regional;

        return $this;
    }

    /**
     * Get regional
     *
     * @return boolean
     */
    public function getRegional()
    {
        return $this->regional;
    }

    /**
     * Set constellation
     *
     * @param boolean $constellation
     *
     * @return Mapsolarsystems
     */
    public function setConstellation($constellation)
    {
        $this->constellation = $constellation;

        return $this;
    }

    /**
     * Get constellation
     *
     * @return boolean
     */
    public function getConstellation()
    {
        return $this->constellation;
    }

    /**
     * Set security
     *
     * @param float $security
     *
     * @return Mapsolarsystems
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
     * Set radius
     *
     * @param float $radius
     *
     * @return Mapsolarsystems
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
     * Set securityclass
     *
     * @param string $securityclass
     *
     * @return Mapsolarsystems
     */
    public function setSecurityclass($securityclass)
    {
        $this->securityclass = $securityclass;

        return $this;
    }

    /**
     * Get securityclass
     *
     * @return string
     */
    public function getSecurityclass()
    {
        return $this->securityclass;
    }

    /**
     * Set regionid
     *
     * @param \Vibs\EvesymBundle\Entity\Mapregions $regionid
     *
     * @return Mapsolarsystems
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
     * Set constellationid
     *
     * @param \Vibs\EvesymBundle\Entity\Mapconstellations $constellationid
     *
     * @return Mapsolarsystems
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
     * Set factionid
     *
     * @param \Vibs\EvesymBundle\Entity\Chrfactions $factionid
     *
     * @return Mapsolarsystems
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

    /**
     * Set suntypeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $suntypeid
     *
     * @return Mapsolarsystems
     */
    public function setSuntypeid(\Vibs\EvesymBundle\Entity\Invtypes $suntypeid = null)
    {
        $this->suntypeid = $suntypeid;

        return $this;
    }

    /**
     * Get suntypeid
     *
     * @return \Vibs\EvesymBundle\Entity\Invtypes
     */
    public function getSuntypeid()
    {
        return $this->suntypeid;
    }
}
