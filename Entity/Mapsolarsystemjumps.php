<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mapsolarsystemjumps
 *
 * @ORM\Table(name="mapSolarSystemJumps", indexes={@ORM\Index(name="fromSolarSystemID", columns={"fromSolarSystemID"}), @ORM\Index(name="fromRegionID", columns={"fromRegionID"}), @ORM\Index(name="fromConstellationID", columns={"fromConstellationID"}), @ORM\Index(name="toConstellationID", columns={"toConstellationID"}), @ORM\Index(name="toRegionID", columns={"toRegionID"}), @ORM\Index(name="toSolarSystemID", columns={"toSolarSystemID"})})
 * @ORM\Entity
 */
class Mapsolarsystemjumps
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
     * @var \Vibs\EvesymBundle\Entity\Mapregions
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Mapregions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fromRegionID", referencedColumnName="regionID")
     * })
     */
    private $fromregionid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Mapconstellations
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Mapconstellations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fromConstellationID", referencedColumnName="constellationID")
     * })
     */
    private $fromconstellationid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Mapsolarsystems
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Mapsolarsystems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fromSolarSystemID", referencedColumnName="solarSystemID")
     * })
     */
    private $fromsolarsystemid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Mapsolarsystems
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Mapsolarsystems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="toSolarSystemID", referencedColumnName="solarSystemID")
     * })
     */
    private $tosolarsystemid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Mapconstellations
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Mapconstellations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="toConstellationID", referencedColumnName="constellationID")
     * })
     */
    private $toconstellationid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Mapregions
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Mapregions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="toRegionID", referencedColumnName="regionID")
     * })
     */
    private $toregionid;


}

