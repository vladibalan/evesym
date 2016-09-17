<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mapregionjumps
 *
 * @ORM\Table(name="mapRegionJumps", indexes={@ORM\Index(name="fromRegionID", columns={"fromRegionID"}), @ORM\Index(name="toRegionID", columns={"toRegionID"})})
 * @ORM\Entity
 */
class Mapregionjumps
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
     * @return Mapregionjumps
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
     * @return Mapregionjumps
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
