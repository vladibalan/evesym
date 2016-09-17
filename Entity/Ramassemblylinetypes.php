<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ramassemblylinetypes
 *
 * @ORM\Table(name="ramAssemblyLineTypes", indexes={@ORM\Index(name="activityID", columns={"activityID"})})
 * @ORM\Entity
 */
class Ramassemblylinetypes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="assemblyLineTypeID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $assemblylinetypeid;

    /**
     * @var string
     *
     * @ORM\Column(name="assemblyLineTypeName", type="string", length=100, nullable=true)
     */
    private $assemblylinetypename;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=true)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="baseTimeMultiplier", type="float", precision=10, scale=0, nullable=true)
     */
    private $basetimemultiplier;

    /**
     * @var float
     *
     * @ORM\Column(name="baseMaterialMultiplier", type="float", precision=10, scale=0, nullable=true)
     */
    private $basematerialmultiplier;

    /**
     * @var float
     *
     * @ORM\Column(name="baseCostMultiplier", type="float", precision=10, scale=0, nullable=true)
     */
    private $basecostmultiplier;

    /**
     * @var float
     *
     * @ORM\Column(name="volume", type="float", precision=10, scale=0, nullable=true)
     */
    private $volume;

    /**
     * @var float
     *
     * @ORM\Column(name="minCostPerHour", type="float", precision=10, scale=0, nullable=true)
     */
    private $mincostperhour;

    /**
     * @var \Vibs\EvesymBundle\Entity\Ramactivities
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Ramactivities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="activityID", referencedColumnName="activityID")
     * })
     */
    private $activityid;



    /**
     * Get assemblylinetypeid
     *
     * @return integer
     */
    public function getAssemblylinetypeid()
    {
        return $this->assemblylinetypeid;
    }

    /**
     * Set assemblylinetypename
     *
     * @param string $assemblylinetypename
     *
     * @return Ramassemblylinetypes
     */
    public function setAssemblylinetypename($assemblylinetypename)
    {
        $this->assemblylinetypename = $assemblylinetypename;

        return $this;
    }

    /**
     * Get assemblylinetypename
     *
     * @return string
     */
    public function getAssemblylinetypename()
    {
        return $this->assemblylinetypename;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Ramassemblylinetypes
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
     * Set basetimemultiplier
     *
     * @param float $basetimemultiplier
     *
     * @return Ramassemblylinetypes
     */
    public function setBasetimemultiplier($basetimemultiplier)
    {
        $this->basetimemultiplier = $basetimemultiplier;

        return $this;
    }

    /**
     * Get basetimemultiplier
     *
     * @return float
     */
    public function getBasetimemultiplier()
    {
        return $this->basetimemultiplier;
    }

    /**
     * Set basematerialmultiplier
     *
     * @param float $basematerialmultiplier
     *
     * @return Ramassemblylinetypes
     */
    public function setBasematerialmultiplier($basematerialmultiplier)
    {
        $this->basematerialmultiplier = $basematerialmultiplier;

        return $this;
    }

    /**
     * Get basematerialmultiplier
     *
     * @return float
     */
    public function getBasematerialmultiplier()
    {
        return $this->basematerialmultiplier;
    }

    /**
     * Set basecostmultiplier
     *
     * @param float $basecostmultiplier
     *
     * @return Ramassemblylinetypes
     */
    public function setBasecostmultiplier($basecostmultiplier)
    {
        $this->basecostmultiplier = $basecostmultiplier;

        return $this;
    }

    /**
     * Get basecostmultiplier
     *
     * @return float
     */
    public function getBasecostmultiplier()
    {
        return $this->basecostmultiplier;
    }

    /**
     * Set volume
     *
     * @param float $volume
     *
     * @return Ramassemblylinetypes
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Get volume
     *
     * @return float
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Set mincostperhour
     *
     * @param float $mincostperhour
     *
     * @return Ramassemblylinetypes
     */
    public function setMincostperhour($mincostperhour)
    {
        $this->mincostperhour = $mincostperhour;

        return $this;
    }

    /**
     * Get mincostperhour
     *
     * @return float
     */
    public function getMincostperhour()
    {
        return $this->mincostperhour;
    }

    /**
     * Set activityid
     *
     * @param \Vibs\EvesymBundle\Entity\Ramactivities $activityid
     *
     * @return Ramassemblylinetypes
     */
    public function setActivityid(\Vibs\EvesymBundle\Entity\Ramactivities $activityid = null)
    {
        $this->activityid = $activityid;

        return $this;
    }

    /**
     * Get activityid
     *
     * @return \Vibs\EvesymBundle\Entity\Ramactivities
     */
    public function getActivityid()
    {
        return $this->activityid;
    }
}
