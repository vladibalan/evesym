<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Crpnpccorporations
 *
 * @ORM\Table(name="crpNPCCorporations", indexes={@ORM\Index(name="solarSystemID", columns={"solarSystemID"}), @ORM\Index(name="investorID1", columns={"investorID1"}), @ORM\Index(name="investorID2", columns={"investorID2"}), @ORM\Index(name="investorID3", columns={"investorID3"}), @ORM\Index(name="investorID4", columns={"investorID4"}), @ORM\Index(name="friendID", columns={"friendID"}), @ORM\Index(name="enemyID", columns={"enemyID"}), @ORM\Index(name="factionID", columns={"factionID"}), @ORM\Index(name="iconID", columns={"iconID"})})
 * @ORM\Entity
 */
class Crpnpccorporations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="corporationID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $corporationid;

    /**
     * @var string
     *
     * @ORM\Column(name="size", type="string", length=1, nullable=true)
     */
    private $size;

    /**
     * @var string
     *
     * @ORM\Column(name="extent", type="string", length=1, nullable=true)
     */
    private $extent;

    /**
     * @var integer
     *
     * @ORM\Column(name="investorShares1", type="integer", nullable=true)
     */
    private $investorshares1;

    /**
     * @var integer
     *
     * @ORM\Column(name="investorShares2", type="integer", nullable=true)
     */
    private $investorshares2;

    /**
     * @var integer
     *
     * @ORM\Column(name="investorShares3", type="integer", nullable=true)
     */
    private $investorshares3;

    /**
     * @var integer
     *
     * @ORM\Column(name="investorShares4", type="integer", nullable=true)
     */
    private $investorshares4;

    /**
     * @var integer
     *
     * @ORM\Column(name="publicShares", type="integer", nullable=true)
     */
    private $publicshares;

    /**
     * @var integer
     *
     * @ORM\Column(name="initialPrice", type="integer", nullable=true)
     */
    private $initialprice;

    /**
     * @var float
     *
     * @ORM\Column(name="minSecurity", type="float", precision=10, scale=0, nullable=true)
     */
    private $minsecurity;

    /**
     * @var boolean
     *
     * @ORM\Column(name="scattered", type="boolean", nullable=true)
     */
    private $scattered;

    /**
     * @var integer
     *
     * @ORM\Column(name="fringe", type="integer", nullable=true)
     */
    private $fringe;

    /**
     * @var integer
     *
     * @ORM\Column(name="corridor", type="integer", nullable=true)
     */
    private $corridor;

    /**
     * @var integer
     *
     * @ORM\Column(name="hub", type="integer", nullable=true)
     */
    private $hub;

    /**
     * @var integer
     *
     * @ORM\Column(name="border", type="integer", nullable=true)
     */
    private $border;

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
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=4000, nullable=true)
     */
    private $description;

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
     * @var \Vibs\EvesymBundle\Entity\Chrfactions
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Chrfactions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="factionID", referencedColumnName="factionID")
     * })
     */
    private $factionid;

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
     * @var \Vibs\EvesymBundle\Entity\Crpnpccorporations
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Crpnpccorporations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="friendID", referencedColumnName="corporationID")
     * })
     */
    private $friendid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Crpnpccorporations
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Crpnpccorporations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="enemyID", referencedColumnName="corporationID")
     * })
     */
    private $enemyid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Crpnpccorporations
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Crpnpccorporations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="investorID1", referencedColumnName="corporationID")
     * })
     */
    private $investorid1;

    /**
     * @var \Vibs\EvesymBundle\Entity\Crpnpccorporations
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Crpnpccorporations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="investorID2", referencedColumnName="corporationID")
     * })
     */
    private $investorid2;

    /**
     * @var \Vibs\EvesymBundle\Entity\Crpnpccorporations
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Crpnpccorporations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="investorID3", referencedColumnName="corporationID")
     * })
     */
    private $investorid3;

    /**
     * @var \Vibs\EvesymBundle\Entity\Crpnpccorporations
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Crpnpccorporations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="investorID4", referencedColumnName="corporationID")
     * })
     */
    private $investorid4;



    /**
     * Get corporationid
     *
     * @return integer
     */
    public function getCorporationid()
    {
        return $this->corporationid;
    }

    /**
     * Set size
     *
     * @param string $size
     *
     * @return Crpnpccorporations
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set extent
     *
     * @param string $extent
     *
     * @return Crpnpccorporations
     */
    public function setExtent($extent)
    {
        $this->extent = $extent;

        return $this;
    }

    /**
     * Get extent
     *
     * @return string
     */
    public function getExtent()
    {
        return $this->extent;
    }

    /**
     * Set investorshares1
     *
     * @param integer $investorshares1
     *
     * @return Crpnpccorporations
     */
    public function setInvestorshares1($investorshares1)
    {
        $this->investorshares1 = $investorshares1;

        return $this;
    }

    /**
     * Get investorshares1
     *
     * @return integer
     */
    public function getInvestorshares1()
    {
        return $this->investorshares1;
    }

    /**
     * Set investorshares2
     *
     * @param integer $investorshares2
     *
     * @return Crpnpccorporations
     */
    public function setInvestorshares2($investorshares2)
    {
        $this->investorshares2 = $investorshares2;

        return $this;
    }

    /**
     * Get investorshares2
     *
     * @return integer
     */
    public function getInvestorshares2()
    {
        return $this->investorshares2;
    }

    /**
     * Set investorshares3
     *
     * @param integer $investorshares3
     *
     * @return Crpnpccorporations
     */
    public function setInvestorshares3($investorshares3)
    {
        $this->investorshares3 = $investorshares3;

        return $this;
    }

    /**
     * Get investorshares3
     *
     * @return integer
     */
    public function getInvestorshares3()
    {
        return $this->investorshares3;
    }

    /**
     * Set investorshares4
     *
     * @param integer $investorshares4
     *
     * @return Crpnpccorporations
     */
    public function setInvestorshares4($investorshares4)
    {
        $this->investorshares4 = $investorshares4;

        return $this;
    }

    /**
     * Get investorshares4
     *
     * @return integer
     */
    public function getInvestorshares4()
    {
        return $this->investorshares4;
    }

    /**
     * Set publicshares
     *
     * @param integer $publicshares
     *
     * @return Crpnpccorporations
     */
    public function setPublicshares($publicshares)
    {
        $this->publicshares = $publicshares;

        return $this;
    }

    /**
     * Get publicshares
     *
     * @return integer
     */
    public function getPublicshares()
    {
        return $this->publicshares;
    }

    /**
     * Set initialprice
     *
     * @param integer $initialprice
     *
     * @return Crpnpccorporations
     */
    public function setInitialprice($initialprice)
    {
        $this->initialprice = $initialprice;

        return $this;
    }

    /**
     * Get initialprice
     *
     * @return integer
     */
    public function getInitialprice()
    {
        return $this->initialprice;
    }

    /**
     * Set minsecurity
     *
     * @param float $minsecurity
     *
     * @return Crpnpccorporations
     */
    public function setMinsecurity($minsecurity)
    {
        $this->minsecurity = $minsecurity;

        return $this;
    }

    /**
     * Get minsecurity
     *
     * @return float
     */
    public function getMinsecurity()
    {
        return $this->minsecurity;
    }

    /**
     * Set scattered
     *
     * @param boolean $scattered
     *
     * @return Crpnpccorporations
     */
    public function setScattered($scattered)
    {
        $this->scattered = $scattered;

        return $this;
    }

    /**
     * Get scattered
     *
     * @return boolean
     */
    public function getScattered()
    {
        return $this->scattered;
    }

    /**
     * Set fringe
     *
     * @param integer $fringe
     *
     * @return Crpnpccorporations
     */
    public function setFringe($fringe)
    {
        $this->fringe = $fringe;

        return $this;
    }

    /**
     * Get fringe
     *
     * @return integer
     */
    public function getFringe()
    {
        return $this->fringe;
    }

    /**
     * Set corridor
     *
     * @param integer $corridor
     *
     * @return Crpnpccorporations
     */
    public function setCorridor($corridor)
    {
        $this->corridor = $corridor;

        return $this;
    }

    /**
     * Get corridor
     *
     * @return integer
     */
    public function getCorridor()
    {
        return $this->corridor;
    }

    /**
     * Set hub
     *
     * @param integer $hub
     *
     * @return Crpnpccorporations
     */
    public function setHub($hub)
    {
        $this->hub = $hub;

        return $this;
    }

    /**
     * Get hub
     *
     * @return integer
     */
    public function getHub()
    {
        return $this->hub;
    }

    /**
     * Set border
     *
     * @param integer $border
     *
     * @return Crpnpccorporations
     */
    public function setBorder($border)
    {
        $this->border = $border;

        return $this;
    }

    /**
     * Get border
     *
     * @return integer
     */
    public function getBorder()
    {
        return $this->border;
    }

    /**
     * Set sizefactor
     *
     * @param float $sizefactor
     *
     * @return Crpnpccorporations
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
     * @return Crpnpccorporations
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
     * @return Crpnpccorporations
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
     * Set description
     *
     * @param string $description
     *
     * @return Crpnpccorporations
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
     * Set solarsystemid
     *
     * @param \Vibs\EvesymBundle\Entity\Mapsolarsystems $solarsystemid
     *
     * @return Crpnpccorporations
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
     * Set factionid
     *
     * @param \Vibs\EvesymBundle\Entity\Chrfactions $factionid
     *
     * @return Crpnpccorporations
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
     * Set iconid
     *
     * @param \Vibs\EvesymBundle\Entity\Eveicons $iconid
     *
     * @return Crpnpccorporations
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
     * Set friendid
     *
     * @param \Vibs\EvesymBundle\Entity\Crpnpccorporations $friendid
     *
     * @return Crpnpccorporations
     */
    public function setFriendid(\Vibs\EvesymBundle\Entity\Crpnpccorporations $friendid = null)
    {
        $this->friendid = $friendid;

        return $this;
    }

    /**
     * Get friendid
     *
     * @return \Vibs\EvesymBundle\Entity\Crpnpccorporations
     */
    public function getFriendid()
    {
        return $this->friendid;
    }

    /**
     * Set enemyid
     *
     * @param \Vibs\EvesymBundle\Entity\Crpnpccorporations $enemyid
     *
     * @return Crpnpccorporations
     */
    public function setEnemyid(\Vibs\EvesymBundle\Entity\Crpnpccorporations $enemyid = null)
    {
        $this->enemyid = $enemyid;

        return $this;
    }

    /**
     * Get enemyid
     *
     * @return \Vibs\EvesymBundle\Entity\Crpnpccorporations
     */
    public function getEnemyid()
    {
        return $this->enemyid;
    }

    /**
     * Set investorid1
     *
     * @param \Vibs\EvesymBundle\Entity\Crpnpccorporations $investorid1
     *
     * @return Crpnpccorporations
     */
    public function setInvestorid1(\Vibs\EvesymBundle\Entity\Crpnpccorporations $investorid1 = null)
    {
        $this->investorid1 = $investorid1;

        return $this;
    }

    /**
     * Get investorid1
     *
     * @return \Vibs\EvesymBundle\Entity\Crpnpccorporations
     */
    public function getInvestorid1()
    {
        return $this->investorid1;
    }

    /**
     * Set investorid2
     *
     * @param \Vibs\EvesymBundle\Entity\Crpnpccorporations $investorid2
     *
     * @return Crpnpccorporations
     */
    public function setInvestorid2(\Vibs\EvesymBundle\Entity\Crpnpccorporations $investorid2 = null)
    {
        $this->investorid2 = $investorid2;

        return $this;
    }

    /**
     * Get investorid2
     *
     * @return \Vibs\EvesymBundle\Entity\Crpnpccorporations
     */
    public function getInvestorid2()
    {
        return $this->investorid2;
    }

    /**
     * Set investorid3
     *
     * @param \Vibs\EvesymBundle\Entity\Crpnpccorporations $investorid3
     *
     * @return Crpnpccorporations
     */
    public function setInvestorid3(\Vibs\EvesymBundle\Entity\Crpnpccorporations $investorid3 = null)
    {
        $this->investorid3 = $investorid3;

        return $this;
    }

    /**
     * Get investorid3
     *
     * @return \Vibs\EvesymBundle\Entity\Crpnpccorporations
     */
    public function getInvestorid3()
    {
        return $this->investorid3;
    }

    /**
     * Set investorid4
     *
     * @param \Vibs\EvesymBundle\Entity\Crpnpccorporations $investorid4
     *
     * @return Crpnpccorporations
     */
    public function setInvestorid4(\Vibs\EvesymBundle\Entity\Crpnpccorporations $investorid4 = null)
    {
        $this->investorid4 = $investorid4;

        return $this;
    }

    /**
     * Get investorid4
     *
     * @return \Vibs\EvesymBundle\Entity\Crpnpccorporations
     */
    public function getInvestorid4()
    {
        return $this->investorid4;
    }
}
