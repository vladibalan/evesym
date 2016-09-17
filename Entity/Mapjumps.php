<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mapjumps
 *
 * @ORM\Table(name="mapJumps", indexes={@ORM\Index(name="destinationID", columns={"destinationID"})})
 * @ORM\Entity
 */
class Mapjumps
{
    /**
     * @var integer
     *
     * @ORM\Column(name="stargateID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $stargateid;

    /**
     * @var integer
     *
     * @ORM\Column(name="destinationID", type="integer", nullable=true)
     */
    private $destinationid;



    /**
     * Get stargateid
     *
     * @return integer
     */
    public function getStargateid()
    {
        return $this->stargateid;
    }

    /**
     * Set destinationid
     *
     * @param integer $destinationid
     *
     * @return Mapjumps
     */
    public function setDestinationid($destinationid)
    {
        $this->destinationid = $destinationid;

        return $this;
    }

    /**
     * Get destinationid
     *
     * @return integer
     */
    public function getDestinationid()
    {
        return $this->destinationid;
    }
}
