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


}

