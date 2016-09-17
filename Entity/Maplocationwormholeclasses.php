<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Maplocationwormholeclasses
 *
 * @ORM\Table(name="mapLocationWormholeClasses", indexes={@ORM\Index(name="wormholeClassID", columns={"wormholeClassID"})})
 * @ORM\Entity
 */
class Maplocationwormholeclasses
{
    /**
     * @var integer
     *
     * @ORM\Column(name="locationID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $locationid;

    /**
     * @var integer
     *
     * @ORM\Column(name="wormholeClassID", type="integer", nullable=true)
     */
    private $wormholeclassid;



    /**
     * Get locationid
     *
     * @return integer
     */
    public function getLocationid()
    {
        return $this->locationid;
    }

    /**
     * Set wormholeclassid
     *
     * @param integer $wormholeclassid
     *
     * @return Maplocationwormholeclasses
     */
    public function setWormholeclassid($wormholeclassid)
    {
        $this->wormholeclassid = $wormholeclassid;

        return $this;
    }

    /**
     * Get wormholeclassid
     *
     * @return integer
     */
    public function getWormholeclassid()
    {
        return $this->wormholeclassid;
    }
}
