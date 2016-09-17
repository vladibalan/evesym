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
     * Set fromregionid
     *
     * @param \Vibs\EvesymBundle\Entity\Mapregions $fromregionid
     *
     * @return Mapsolarsystemjumps
     */
    public function setFromregionid(\Vibs\EvesymBundle\Entity\Mapregions $fromregionid = null)
    {
        $this->fromregionid = $fromregionid;

        return $this;
    }

    /**
     * Get fromregionid
     *
     * @return \Vibs\EvesymBundle\Entity\Mapregions
     */
    public function getFromregionid()
    {
        return $this->fromregionid;
    }

    /**
     * Set fromconstellationid
     *
     * @param \Vibs\EvesymBundle\Entity\Mapconstellations $fromconstellationid
     *
     * @return Mapsolarsystemjumps
     */
    public function setFromconstellationid(\Vibs\EvesymBundle\Entity\Mapconstellations $fromconstellationid = null)
    {
        $this->fromconstellationid = $fromconstellationid;

        return $this;
    }

    /**
     * Get fromconstellationid
     *
     * @return \Vibs\EvesymBundle\Entity\Mapconstellations
     */
    public function getFromconstellationid()
    {
        return $this->fromconstellationid;
    }

    /**
     * Set fromsolarsystemid
     *
     * @param \Vibs\EvesymBundle\Entity\Mapsolarsystems $fromsolarsystemid
     *
     * @return Mapsolarsystemjumps
     */
    public function setFromsolarsystemid(\Vibs\EvesymBundle\Entity\Mapsolarsystems $fromsolarsystemid = null)
    {
        $this->fromsolarsystemid = $fromsolarsystemid;

        return $this;
    }

    /**
     * Get fromsolarsystemid
     *
     * @return \Vibs\EvesymBundle\Entity\Mapsolarsystems
     */
    public function getFromsolarsystemid()
    {
        return $this->fromsolarsystemid;
    }

    /**
     * Set tosolarsystemid
     *
     * @param \Vibs\EvesymBundle\Entity\Mapsolarsystems $tosolarsystemid
     *
     * @return Mapsolarsystemjumps
     */
    public function setTosolarsystemid(\Vibs\EvesymBundle\Entity\Mapsolarsystems $tosolarsystemid = null)
    {
        $this->tosolarsystemid = $tosolarsystemid;

        return $this;
    }

    /**
     * Get tosolarsystemid
     *
     * @return \Vibs\EvesymBundle\Entity\Mapsolarsystems
     */
    public function getTosolarsystemid()
    {
        return $this->tosolarsystemid;
    }

    /**
     * Set toconstellationid
     *
     * @param \Vibs\EvesymBundle\Entity\Mapconstellations $toconstellationid
     *
     * @return Mapsolarsystemjumps
     */
    public function setToconstellationid(\Vibs\EvesymBundle\Entity\Mapconstellations $toconstellationid = null)
    {
        $this->toconstellationid = $toconstellationid;

        return $this;
    }

    /**
     * Get toconstellationid
     *
     * @return \Vibs\EvesymBundle\Entity\Mapconstellations
     */
    public function getToconstellationid()
    {
        return $this->toconstellationid;
    }

    /**
     * Set toregionid
     *
     * @param \Vibs\EvesymBundle\Entity\Mapregions $toregionid
     *
     * @return Mapsolarsystemjumps
     */
    public function setToregionid(\Vibs\EvesymBundle\Entity\Mapregions $toregionid = null)
    {
        $this->toregionid = $toregionid;

        return $this;
    }

    /**
     * Get toregionid
     *
     * @return \Vibs\EvesymBundle\Entity\Mapregions
     */
    public function getToregionid()
    {
        return $this->toregionid;
    }
}
