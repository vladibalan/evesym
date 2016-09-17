<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chrfactions
 *
 * @ORM\Table(name="chrFactions", indexes={@ORM\Index(name="raceID", columns={"raceID"}), @ORM\Index(name="solarSystemID", columns={"solarSystemID"}), @ORM\Index(name="corporationID", columns={"corporationID"}), @ORM\Index(name="militiaCorporationID", columns={"militiaCorporationID"}), @ORM\Index(name="iconID", columns={"iconID"})})
 * @ORM\Entity
 */
class Chrfactions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="factionID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $factionid;

    /**
     * @var string
     *
     * @ORM\Column(name="factionName", type="string", length=100, nullable=true)
     */
    private $factionname;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=true)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="sizeFactor", type="float", precision=10, scale=0, nullable=true)
     */
    private $sizefactor;

    /**
     * @var integer
     *
     * @ORM\Column(name="stationCount", type="integer", nullable=true)
     */
    private $stationcount;

    /**
     * @var integer
     *
     * @ORM\Column(name="stationSystemCount", type="integer", nullable=true)
     */
    private $stationsystemcount;

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
     * @var \Vibs\EvesymBundle\Entity\Mapsolarsystems
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Mapsolarsystems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="solarSystemID", referencedColumnName="solarSystemID")
     * })
     */
    private $solarsystemid;

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
     * @var \Vibs\EvesymBundle\Entity\Crpnpccorporations
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Crpnpccorporations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="militiaCorporationID", referencedColumnName="corporationID")
     * })
     */
    private $militiacorporationid;

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
     * Get factionid
     *
     * @return integer
     */
    public function getFactionid()
    {
        return $this->factionid;
    }

    /**
     * Set factionname
     *
     * @param string $factionname
     *
     * @return Chrfactions
     */
    public function setFactionname($factionname)
    {
        $this->factionname = $factionname;

        return $this;
    }

    /**
     * Get factionname
     *
     * @return string
     */
    public function getFactionname()
    {
        return $this->factionname;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Chrfactions
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
     * Set sizefactor
     *
     * @param float $sizefactor
     *
     * @return Chrfactions
     */
    public function setSizefactor($sizefactor)
    {
        $this->sizefactor = $sizefactor;

        return $this;
    }

    /**
     * Get sizefactor
     *
     * @return float
     */
    public function getSizefactor()
    {
        return $this->sizefactor;
    }

    /**
     * Set stationcount
     *
     * @param integer $stationcount
     *
     * @return Chrfactions
     */
    public function setStationcount($stationcount)
    {
        $this->stationcount = $stationcount;

        return $this;
    }

    /**
     * Get stationcount
     *
     * @return integer
     */
    public function getStationcount()
    {
        return $this->stationcount;
    }

    /**
     * Set stationsystemcount
     *
     * @param integer $stationsystemcount
     *
     * @return Chrfactions
     */
    public function setStationsystemcount($stationsystemcount)
    {
        $this->stationsystemcount = $stationsystemcount;

        return $this;
    }

    /**
     * Get stationsystemcount
     *
     * @return integer
     */
    public function getStationsystemcount()
    {
        return $this->stationsystemcount;
    }

    /**
     * Set raceid
     *
     * @param \Vibs\EvesymBundle\Entity\Chrraces $raceid
     *
     * @return Chrfactions
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

    /**
     * Set solarsystemid
     *
     * @param \Vibs\EvesymBundle\Entity\Mapsolarsystems $solarsystemid
     *
     * @return Chrfactions
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
     * Set corporationid
     *
     * @param \Vibs\EvesymBundle\Entity\Crpnpccorporations $corporationid
     *
     * @return Chrfactions
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
     * Set militiacorporationid
     *
     * @param \Vibs\EvesymBundle\Entity\Crpnpccorporations $militiacorporationid
     *
     * @return Chrfactions
     */
    public function setMilitiacorporationid(\Vibs\EvesymBundle\Entity\Crpnpccorporations $militiacorporationid = null)
    {
        $this->militiacorporationid = $militiacorporationid;

        return $this;
    }

    /**
     * Get militiacorporationid
     *
     * @return \Vibs\EvesymBundle\Entity\Crpnpccorporations
     */
    public function getMilitiacorporationid()
    {
        return $this->militiacorporationid;
    }

    /**
     * Set iconid
     *
     * @param \Vibs\EvesymBundle\Entity\Eveicons $iconid
     *
     * @return Chrfactions
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
