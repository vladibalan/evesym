<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invpositions
 *
 * @ORM\Table(name="invPositions")
 * @ORM\Entity
 */
class Invpositions
{
    /**
     * @var float
     *
     * @ORM\Column(name="x", type="float", precision=10, scale=0, nullable=false)
     */
    private $x;

    /**
     * @var float
     *
     * @ORM\Column(name="y", type="float", precision=10, scale=0, nullable=false)
     */
    private $y;

    /**
     * @var float
     *
     * @ORM\Column(name="z", type="float", precision=10, scale=0, nullable=false)
     */
    private $z;

    /**
     * @var float
     *
     * @ORM\Column(name="yaw", type="float", precision=10, scale=0, nullable=true)
     */
    private $yaw;

    /**
     * @var float
     *
     * @ORM\Column(name="pitch", type="float", precision=10, scale=0, nullable=true)
     */
    private $pitch;

    /**
     * @var float
     *
     * @ORM\Column(name="roll", type="float", precision=10, scale=0, nullable=true)
     */
    private $roll;

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
     * Set x
     *
     * @param float $x
     *
     * @return Invpositions
     */
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get x
     *
     * @return float
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set y
     *
     * @param float $y
     *
     * @return Invpositions
     */
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }

    /**
     * Get y
     *
     * @return float
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set z
     *
     * @param float $z
     *
     * @return Invpositions
     */
    public function setZ($z)
    {
        $this->z = $z;

        return $this;
    }

    /**
     * Get z
     *
     * @return float
     */
    public function getZ()
    {
        return $this->z;
    }

    /**
     * Set yaw
     *
     * @param float $yaw
     *
     * @return Invpositions
     */
    public function setYaw($yaw)
    {
        $this->yaw = $yaw;

        return $this;
    }

    /**
     * Get yaw
     *
     * @return float
     */
    public function getYaw()
    {
        return $this->yaw;
    }

    /**
     * Set pitch
     *
     * @param float $pitch
     *
     * @return Invpositions
     */
    public function setPitch($pitch)
    {
        $this->pitch = $pitch;

        return $this;
    }

    /**
     * Get pitch
     *
     * @return float
     */
    public function getPitch()
    {
        return $this->pitch;
    }

    /**
     * Set roll
     *
     * @param float $roll
     *
     * @return Invpositions
     */
    public function setRoll($roll)
    {
        $this->roll = $roll;

        return $this;
    }

    /**
     * Get roll
     *
     * @return float
     */
    public function getRoll()
    {
        return $this->roll;
    }

    /**
     * Set itemid
     *
     * @param \Vibs\EvesymBundle\Entity\Invnames $itemid
     *
     * @return Invpositions
     */
    public function setItemid(\Vibs\EvesymBundle\Entity\Invnames $itemid = null)
    {
        $this->itemid = $itemid;

        return $this;
    }

    /**
     * Get itemid
     *
     * @return \Vibs\EvesymBundle\Entity\Invnames
     */
    public function getItemid()
    {
        return $this->itemid;
    }
}
