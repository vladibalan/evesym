<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mapregions
 *
 * @ORM\Table(name="mapRegions", indexes={@ORM\Index(name="factionID", columns={"factionID"})})
 * @ORM\Entity
 */
class Mapregions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="regionID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $regionid;

    /**
     * @var string
     *
     * @ORM\Column(name="regionName", type="string", length=100, nullable=true)
     */
    private $regionname;

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
     * @var \Vibs\EvesymBundle\Entity\Chrfactions
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Chrfactions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="factionID", referencedColumnName="factionID")
     * })
     */
    private $factionid;



    /**
     * Get regionid
     *
     * @return integer
     */
    public function getRegionid()
    {
        return $this->regionid;
    }

    /**
     * Set regionname
     *
     * @param string $regionname
     *
     * @return Mapregions
     */
    public function setRegionname($regionname)
    {
        $this->regionname = $regionname;

        return $this;
    }

    /**
     * Get regionname
     *
     * @return string
     */
    public function getRegionname()
    {
        return $this->regionname;
    }

    /**
     * Set x
     *
     * @param float $x
     *
     * @return Mapregions
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
     * @return Mapregions
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
     * @return Mapregions
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
     * @return Mapregions
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
     * @return Mapregions
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
     * @return Mapregions
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
     * @return Mapregions
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
     * @return Mapregions
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
     * @return Mapregions
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
     * @return Mapregions
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
     * Set factionid
     *
     * @param \Vibs\EvesymBundle\Entity\Chrfactions $factionid
     *
     * @return Mapregions
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
