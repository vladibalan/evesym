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


}

