<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mapconstellationjumps
 *
 * @ORM\Table(name="mapConstellationJumps", indexes={@ORM\Index(name="fromConstellationID", columns={"fromConstellationID"}), @ORM\Index(name="fromRegionID", columns={"fromRegionID"}), @ORM\Index(name="toRegionID", columns={"toRegionID"}), @ORM\Index(name="toConstellationID", columns={"toConstellationID"})})
 * @ORM\Entity
 */
class Mapconstellationjumps
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
     * @var \Vibs\EvesymBundle\Entity\Mapregions
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Mapregions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="toRegionID", referencedColumnName="regionID")
     * })
     */
    private $toregionid;

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
     * @var \Vibs\EvesymBundle\Entity\Mapconstellations
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Mapconstellations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="toConstellationID", referencedColumnName="constellationID")
     * })
     */
    private $toconstellationid;



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
     * @return Mapconstellationjumps
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
     * Set toregionid
     *
     * @param \Vibs\EvesymBundle\Entity\Mapregions $toregionid
     *
     * @return Mapconstellationjumps
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

    /**
     * Set fromconstellationid
     *
     * @param \Vibs\EvesymBundle\Entity\Mapconstellations $fromconstellationid
     *
     * @return Mapconstellationjumps
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
     * Set toconstellationid
     *
     * @param \Vibs\EvesymBundle\Entity\Mapconstellations $toconstellationid
     *
     * @return Mapconstellationjumps
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
}
