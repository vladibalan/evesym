<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ramassemblylinestations
 *
 * @ORM\Table(name="ramAssemblyLineStations", indexes={@ORM\Index(name="ix_ramAssemblyLineStations_ownerID", columns={"ownerID"}), @ORM\Index(name="ix_ramAssemblyLineStations_solarSystemID", columns={"solarSystemID"}), @ORM\Index(name="ix_ramAssemblyLineStations_regionID", columns={"regionID"}), @ORM\Index(name="stationID", columns={"stationID"}), @ORM\Index(name="assemblyLineTypeID", columns={"assemblyLineTypeID"}), @ORM\Index(name="stationTypeID", columns={"stationTypeID"})})
 * @ORM\Entity
 */
class Ramassemblylinestations
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
     * @var \Vibs\EvesymBundle\Entity\Stastations
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Stastations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="stationID", referencedColumnName="stationID")
     * })
     */
    private $stationid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Ramassemblylinetypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Ramassemblylinetypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="assemblyLineTypeID", referencedColumnName="assemblyLineTypeID")
     * })
     */
    private $assemblylinetypeid;

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
     * @var \Vibs\EvesymBundle\Entity\Mapsolarsystems
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Mapsolarsystems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="solarSystemID", referencedColumnName="solarSystemID")
     * })
     */
    private $solarsystemid;

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
     * @var \Vibs\EvesymBundle\Entity\Crpnpccorporations
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Crpnpccorporations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ownerID", referencedColumnName="corporationID")
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
     * @return Ramassemblylinestations
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
     * Set stationid
     *
     * @param \Vibs\EvesymBundle\Entity\Stastations $stationid
     *
     * @return Ramassemblylinestations
     */
    public function setStationid(\Vibs\EvesymBundle\Entity\Stastations $stationid = null)
    {
        $this->stationid = $stationid;

        return $this;
    }

    /**
     * Get stationid
     *
     * @return \Vibs\EvesymBundle\Entity\Stastations
     */
    public function getStationid()
    {
        return $this->stationid;
    }

    /**
     * Set assemblylinetypeid
     *
     * @param \Vibs\EvesymBundle\Entity\Ramassemblylinetypes $assemblylinetypeid
     *
     * @return Ramassemblylinestations
     */
    public function setAssemblylinetypeid(\Vibs\EvesymBundle\Entity\Ramassemblylinetypes $assemblylinetypeid = null)
    {
        $this->assemblylinetypeid = $assemblylinetypeid;

        return $this;
    }

    /**
     * Get assemblylinetypeid
     *
     * @return \Vibs\EvesymBundle\Entity\Ramassemblylinetypes
     */
    public function getAssemblylinetypeid()
    {
        return $this->assemblylinetypeid;
    }

    /**
     * Set stationtypeid
     *
     * @param \Vibs\EvesymBundle\Entity\Stastationtypes $stationtypeid
     *
     * @return Ramassemblylinestations
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
     * Set solarsystemid
     *
     * @param \Vibs\EvesymBundle\Entity\Mapsolarsystems $solarsystemid
     *
     * @return Ramassemblylinestations
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
     * Set regionid
     *
     * @param \Vibs\EvesymBundle\Entity\Mapregions $regionid
     *
     * @return Ramassemblylinestations
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
     * Set ownerid
     *
     * @param \Vibs\EvesymBundle\Entity\Crpnpccorporations $ownerid
     *
     * @return Ramassemblylinestations
     */
    public function setOwnerid(\Vibs\EvesymBundle\Entity\Crpnpccorporations $ownerid = null)
    {
        $this->ownerid = $ownerid;

        return $this;
    }

    /**
     * Get ownerid
     *
     * @return \Vibs\EvesymBundle\Entity\Crpnpccorporations
     */
    public function getOwnerid()
    {
        return $this->ownerid;
    }
}
