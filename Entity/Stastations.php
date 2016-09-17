<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stastations
 *
 * @ORM\Table(name="staStations", indexes={@ORM\Index(name="ix_staStations_solarSystemID", columns={"solarSystemID"}), @ORM\Index(name="ix_staStations_operationID", columns={"operationID"}), @ORM\Index(name="ix_staStations_constellationID", columns={"constellationID"}), @ORM\Index(name="ix_staStations_stationTypeID", columns={"stationTypeID"}), @ORM\Index(name="ix_staStations_corporationID", columns={"corporationID"}), @ORM\Index(name="ix_staStations_regionID", columns={"regionID"})})
 * @ORM\Entity
 */
class Stastations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="stationID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $stationid;

    /**
     * @var integer
     *
     * @ORM\Column(name="security", type="integer", nullable=true)
     */
    private $security;

    /**
     * @var float
     *
     * @ORM\Column(name="dockingCostPerVolume", type="float", precision=10, scale=0, nullable=true)
     */
    private $dockingcostpervolume;

    /**
     * @var float
     *
     * @ORM\Column(name="maxShipVolumeDockable", type="float", precision=10, scale=0, nullable=true)
     */
    private $maxshipvolumedockable;

    /**
     * @var integer
     *
     * @ORM\Column(name="officeRentalCost", type="integer", nullable=true)
     */
    private $officerentalcost;

    /**
     * @var string
     *
     * @ORM\Column(name="stationName", type="string", length=100, nullable=true)
     */
    private $stationname;

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
     * @ORM\Column(name="reprocessingEfficiency", type="float", precision=10, scale=0, nullable=true)
     */
    private $reprocessingefficiency;

    /**
     * @var float
     *
     * @ORM\Column(name="reprocessingStationsTake", type="float", precision=10, scale=0, nullable=true)
     */
    private $reprocessingstationstake;

    /**
     * @var integer
     *
     * @ORM\Column(name="reprocessingHangarFlag", type="integer", nullable=true)
     */
    private $reprocessinghangarflag;

    /**
     * @var \Vibs\EvesymBundle\Entity\Staoperations
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Staoperations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="operationID", referencedColumnName="operationID")
     * })
     */
    private $operationid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Stastationtypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Stastationtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stationTypeID", referencedColumnName="stationTypeID")
     * })
     */
    private $stationtypeid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Crpnpccorporations
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Crpnpccorporations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="corporationID", referencedColumnName="corporationID")
     * })
     */
    private $corporationid;

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
     * Get stationid
     *
     * @return integer
     */
    public function getStationid()
    {
        return $this->stationid;
    }

    /**
     * Set security
     *
     * @param integer $security
     *
     * @return Stastations
     */
    public function setSecurity($security)
    {
        $this->security = $security;

        return $this;
    }

    /**
     * Get security
     *
     * @return integer
     */
    public function getSecurity()
    {
        return $this->security;
    }

    /**
     * Set dockingcostpervolume
     *
     * @param float $dockingcostpervolume
     *
     * @return Stastations
     */
    public function setDockingcostpervolume($dockingcostpervolume)
    {
        $this->dockingcostpervolume = $dockingcostpervolume;

        return $this;
    }

    /**
     * Get dockingcostpervolume
     *
     * @return float
     */
    public function getDockingcostpervolume()
    {
        return $this->dockingcostpervolume;
    }

    /**
     * Set maxshipvolumedockable
     *
     * @param float $maxshipvolumedockable
     *
     * @return Stastations
     */
    public function setMaxshipvolumedockable($maxshipvolumedockable)
    {
        $this->maxshipvolumedockable = $maxshipvolumedockable;

        return $this;
    }

    /**
     * Get maxshipvolumedockable
     *
     * @return float
     */
    public function getMaxshipvolumedockable()
    {
        return $this->maxshipvolumedockable;
    }

    /**
     * Set officerentalcost
     *
     * @param integer $officerentalcost
     *
     * @return Stastations
     */
    public function setOfficerentalcost($officerentalcost)
    {
        $this->officerentalcost = $officerentalcost;

        return $this;
    }

    /**
     * Get officerentalcost
     *
     * @return integer
     */
    public function getOfficerentalcost()
    {
        return $this->officerentalcost;
    }

    /**
     * Set stationname
     *
     * @param string $stationname
     *
     * @return Stastations
     */
    public function setStationname($stationname)
    {
        $this->stationname = $stationname;

        return $this;
    }

    /**
     * Get stationname
     *
     * @return string
     */
    public function getStationname()
    {
        return $this->stationname;
    }

    /**
     * Set x
     *
     * @param float $x
     *
     * @return Stastations
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
     * @return Stastations
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
     * @return Stastations
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
     * Set reprocessingefficiency
     *
     * @param float $reprocessingefficiency
     *
     * @return Stastations
     */
    public function setReprocessingefficiency($reprocessingefficiency)
    {
        $this->reprocessingefficiency = $reprocessingefficiency;

        return $this;
    }

    /**
     * Get reprocessingefficiency
     *
     * @return float
     */
    public function getReprocessingefficiency()
    {
        return $this->reprocessingefficiency;
    }

    /**
     * Set reprocessingstationstake
     *
     * @param float $reprocessingstationstake
     *
     * @return Stastations
     */
    public function setReprocessingstationstake($reprocessingstationstake)
    {
        $this->reprocessingstationstake = $reprocessingstationstake;

        return $this;
    }

    /**
     * Get reprocessingstationstake
     *
     * @return float
     */
    public function getReprocessingstationstake()
    {
        return $this->reprocessingstationstake;
    }

    /**
     * Set reprocessinghangarflag
     *
     * @param integer $reprocessinghangarflag
     *
     * @return Stastations
     */
    public function setReprocessinghangarflag($reprocessinghangarflag)
    {
        $this->reprocessinghangarflag = $reprocessinghangarflag;

        return $this;
    }

    /**
     * Get reprocessinghangarflag
     *
     * @return integer
     */
    public function getReprocessinghangarflag()
    {
        return $this->reprocessinghangarflag;
    }

    /**
     * Set operationid
     *
     * @param \Vibs\EvesymBundle\Entity\Staoperations $operationid
     *
     * @return Stastations
     */
    public function setOperationid(\Vibs\EvesymBundle\Entity\Staoperations $operationid = null)
    {
        $this->operationid = $operationid;

        return $this;
    }

    /**
     * Get operationid
     *
     * @return \Vibs\EvesymBundle\Entity\Staoperations
     */
    public function getOperationid()
    {
        return $this->operationid;
    }

    /**
     * Set stationtypeid
     *
     * @param \Vibs\EvesymBundle\Entity\Stastationtypes $stationtypeid
     *
     * @return Stastations
     */
    public function setStationtypeid(\Vibs\EvesymBundle\Entity\Stastationtypes $stationtypeid = null)
    {
        $this->stationtypeid = $stationtypeid;

        return $this;
    }

    /**
     * Get stationtypeid
     *
     * @return \Vibs\EvesymBundle\Entity\Stastationtypes
     */
    public function getStationtypeid()
    {
        return $this->stationtypeid;
    }

    /**
     * Set corporationid
     *
     * @param \Vibs\EvesymBundle\Entity\Crpnpccorporations $corporationid
     *
     * @return Stastations
     */
    public function setCorporationid(\Vibs\EvesymBundle\Entity\Crpnpccorporations $corporationid = null)
    {
        $this->corporationid = $corporationid;

        return $this;
    }

    /**
     * Get corporationid
     *
     * @return \Vibs\EvesymBundle\Entity\Crpnpccorporations
     */
    public function getCorporationid()
    {
        return $this->corporationid;
    }

    /**
     * Set solarsystemid
     *
     * @param \Vibs\EvesymBundle\Entity\Mapsolarsystems $solarsystemid
     *
     * @return Stastations
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
     * @return Stastations
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
     * @return Stastations
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
}
