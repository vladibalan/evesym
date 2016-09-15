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


}

