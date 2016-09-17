<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mapconstellations
 *
 * @ORM\Table(name="mapConstellations", indexes={@ORM\Index(name="regionID", columns={"regionID"}), @ORM\Index(name="factionID", columns={"factionID"})})
 * @ORM\Entity
 */
class Mapconstellations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="constellationID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $constellationid;

    /**
     * @var string
     *
     * @ORM\Column(name="constellationName", type="string", length=100, nullable=true)
     */
    private $constellationname;

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
     * @var float
     *
     * @ORM\Column(name="xMin", type="float", precision=10, scale=0, nullable=true)
     */
    private $xmin;

    /**
     * @var float
     *
     * @ORM\Column(name="xMax", type="float", precision=10, scale=0, nullable=true)
     */
    private $xmax;

    /**
     * @var float
     *
     * @ORM\Column(name="yMin", type="float", precision=10, scale=0, nullable=true)
     */
    private $ymin;

    /**
     * @var float
     *
     * @ORM\Column(name="yMax", type="float", precision=10, scale=0, nullable=true)
     */
    private $ymax;

    /**
     * @var float
     *
     * @ORM\Column(name="zMin", type="float", precision=10, scale=0, nullable=true)
     */
    private $zmin;

    /**
     * @var float
     *
     * @ORM\Column(name="zMax", type="float", precision=10, scale=0, nullable=true)
     */
    private $zmax;

    /**
     * @var float
     *
     * @ORM\Column(name="radius", type="float", precision=10, scale=0, nullable=true)
     */
    private $radius;

    /**
     * @var \Vibs\EvesymBundle\Entity\Mapregions
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Mapregions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="regionID", referencedColumnName="regionID")
     * })
     */
    private $regionid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Chrfactions
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Chrfactions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="factionID", referencedColumnName="factionID")
     * })
     */
    private $factionid;



    /**
     * Get constellationid
     *
     * @return integer
     */
    public function getConstellationid()
    {
        return $this->constellationid;
    }

    /**
     * Set constellationname
     *
     * @param string $constellationname
     *
     * @return Mapconstellations
     */
    public function setConstellationname($constellationname)
    {
        $this->constellationname = $constellationname;

        return $this;
    }

    /**
     * Get constellationname
     *
     * @return string
     */
    public function getConstellationname()
    {
        return $this->constellationname;
    }

    /**
     * Set x
     *
     * @param float $x
     *
     * @return Mapconstellations
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
     * @return Mapconstellations
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
     * @return Mapconstellations
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
     * Set xmin
     *
     * @param float $xmin
     *
     * @return Mapconstellations
     */
    public function setXmin($xmin)
    {
        $this->xmin = $xmin;

        return $this;
    }

    /**
     * Get xmin
     *
     * @return float
     */
    public function getXmin()
    {
        return $this->xmin;
    }

    /**
     * Set xmax
     *
     * @param float $xmax
     *
     * @return Mapconstellations
     */
    public function setXmax($xmax)
    {
        $this->xmax = $xmax;

        return $this;
    }

    /**
     * Get xmax
     *
     * @return float
     */
    public function getXmax()
    {
        return $this->xmax;
    }

    /**
     * Set ymin
     *
     * @param float $ymin
     *
     * @return Mapconstellations
     */
    public function setYmin($ymin)
    {
        $this->ymin = $ymin;

        return $this;
    }

    /**
     * Get ymin
     *
     * @return float
     */
    public function getYmin()
    {
        return $this->ymin;
    }

    /**
     * Set ymax
     *
     * @param float $ymax
     *
     * @return Mapconstellations
     */
    public function setYmax($ymax)
    {
        $this->ymax = $ymax;

        return $this;
    }

    /**
     * Get ymax
     *
     * @return float
     */
    public function getYmax()
    {
        return $this->ymax;
    }

    /**
     * Set zmin
     *
     * @param float $zmin
     *
     * @return Mapconstellations
     */
    public function setZmin($zmin)
    {
        $this->zmin = $zmin;

        return $this;
    }

    /**
     * Get zmin
     *
     * @return float
     */
    public function getZmin()
    {
        return $this->zmin;
    }

    /**
     * Set zmax
     *
     * @param float $zmax
     *
     * @return Mapconstellations
     */
    public function setZmax($zmax)
    {
        $this->zmax = $zmax;

        return $this;
    }

    /**
     * Get zmax
     *
     * @return float
     */
    public function getZmax()
    {
        return $this->zmax;
    }

    /**
     * Set radius
     *
     * @param float $radius
     *
     * @return Mapconstellations
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;

        return $this;
    }

    /**
     * Get radius
     *
     * @return float
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * Set regionid
     *
     * @param \Vibs\EvesymBundle\Entity\Mapregions $regionid
     *
     * @return Mapconstellations
     */
    public function setRegionid(\Vibs\EvesymBundle\Entity\Mapregions $regionid = null)
    {
        $this->regionid = $regionid;

        return $this;
    }

    /**
     * Get regionid
     *
     * @return \Vibs\EvesymBundle\Entity\Mapregions
     */
    public function getRegionid()
    {
        return $this->regionid;
    }

    /**
     * Set factionid
     *
     * @param \Vibs\EvesymBundle\Entity\Chrfactions $factionid
     *
     * @return Mapconstellations
     */
    public function setFactionid(\Vibs\EvesymBundle\Entity\Chrfactions $factionid = null)
    {
        $this->factionid = $factionid;

        return $this;
    }

    /**
     * Get factionid
     *
     * @return \Vibs\EvesymBundle\Entity\Chrfactions
     */
    public function getFactionid()
    {
        return $this->factionid;
    }
}
