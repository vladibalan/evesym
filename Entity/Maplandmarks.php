<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Maplandmarks
 *
 * @ORM\Table(name="mapLandmarks")
 * @ORM\Entity
 */
class Maplandmarks
{
    /**
     * @var integer
     *
     * @ORM\Column(name="landmarkID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $landmarkid;

    /**
     * @var string
     *
     * @ORM\Column(name="landmarkName", type="string", length=100, nullable=true)
     */
    private $landmarkname;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="locationID", type="integer", nullable=true)
     */
    private $locationid;

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
     * @var integer
     *
     * @ORM\Column(name="iconID", type="integer", nullable=true)
     */
    private $iconid;



    /**
     * Get landmarkid
     *
     * @return integer
     */
    public function getLandmarkid()
    {
        return $this->landmarkid;
    }

    /**
     * Set landmarkname
     *
     * @param string $landmarkname
     *
     * @return Maplandmarks
     */
    public function setLandmarkname($landmarkname)
    {
        $this->landmarkname = $landmarkname;

        return $this;
    }

    /**
     * Get landmarkname
     *
     * @return string
     */
    public function getLandmarkname()
    {
        return $this->landmarkname;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Maplandmarks
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
     * Set locationid
     *
     * @param integer $locationid
     *
     * @return Maplandmarks
     */
    public function setLocationid($locationid)
    {
        $this->locationid = $locationid;

        return $this;
    }

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
     * Set x
     *
     * @param float $x
     *
     * @return Maplandmarks
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
     * @return Maplandmarks
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
     * @return Maplandmarks
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
     * Set iconid
     *
     * @param integer $iconid
     *
     * @return Maplandmarks
     */
    public function setIconid($iconid)
    {
        $this->iconid = $iconid;

        return $this;
    }

    /**
     * Get iconid
     *
     * @return integer
     */
    public function getIconid()
    {
        return $this->iconid;
    }
}
