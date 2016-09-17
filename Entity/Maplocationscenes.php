<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Maplocationscenes
 *
 * @ORM\Table(name="mapLocationScenes", indexes={@ORM\Index(name="graphicID", columns={"graphicID"})})
 * @ORM\Entity
 */
class Maplocationscenes
{
    /**
     * @var \Vibs\EvesymBundle\Entity\Mapregions
     *
     * @ORM\OneToOne(targetEntity="Vibs\EvesymBundle\Entity\Mapregions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="locationID", referencedColumnName="regionID", unique=true)
     * })
     */
    private $locationid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Evegraphics
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Evegraphics")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="graphicID", referencedColumnName="graphicID")
     * })
     */
    private $graphicid;



    /**
     * Set locationid
     *
     * @param \Vibs\EvesymBundle\Entity\Mapregions $locationid
     *
     * @return Maplocationscenes
     */
    public function setLocationid(\Vibs\EvesymBundle\Entity\Mapregions $locationid = null)
    {
        $this->locationid = $locationid;

        return $this;
    }

    /**
     * Get locationid
     *
     * @return \Vibs\EvesymBundle\Entity\Mapregions
     */
    public function getLocationid()
    {
        return $this->locationid;
    }

    /**
     * Set graphicid
     *
     * @param \Vibs\EvesymBundle\Entity\Evegraphics $graphicid
     *
     * @return Maplocationscenes
     */
    public function setGraphicid(\Vibs\EvesymBundle\Entity\Evegraphics $graphicid = null)
    {
        $this->graphicid = $graphicid;

        return $this;
    }

    /**
     * Get graphicid
     *
     * @return \Vibs\EvesymBundle\Entity\Evegraphics
     */
    public function getGraphicid()
    {
        return $this->graphicid;
    }
}
