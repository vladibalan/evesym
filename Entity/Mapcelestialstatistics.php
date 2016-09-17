<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mapcelestialstatistics
 *
 * @ORM\Table(name="mapCelestialStatistics")
 * @ORM\Entity
 */
class Mapcelestialstatistics
{
    /**
     * @var integer
     *
     * @ORM\Column(name="celestialID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $celestialid;

    /**
     * @var float
     *
     * @ORM\Column(name="temperature", type="float", precision=10, scale=0, nullable=true)
     */
    private $temperature;

    /**
     * @var string
     *
     * @ORM\Column(name="spectralClass", type="string", length=10, nullable=true)
     */
    private $spectralclass;

    /**
     * @var float
     *
     * @ORM\Column(name="luminosity", type="float", precision=10, scale=0, nullable=true)
     */
    private $luminosity;

    /**
     * @var float
     *
     * @ORM\Column(name="age", type="float", precision=10, scale=0, nullable=true)
     */
    private $age;

    /**
     * @var float
     *
     * @ORM\Column(name="life", type="float", precision=10, scale=0, nullable=true)
     */
    private $life;

    /**
     * @var float
     *
     * @ORM\Column(name="orbitRadius", type="float", precision=10, scale=0, nullable=true)
     */
    private $orbitradius;

    /**
     * @var float
     *
     * @ORM\Column(name="eccentricity", type="float", precision=10, scale=0, nullable=true)
     */
    private $eccentricity;

    /**
     * @var float
     *
     * @ORM\Column(name="massDust", type="float", precision=10, scale=0, nullable=true)
     */
    private $massdust;

    /**
     * @var float
     *
     * @ORM\Column(name="massGas", type="float", precision=10, scale=0, nullable=true)
     */
    private $massgas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fragmented", type="boolean", nullable=true)
     */
    private $fragmented;

    /**
     * @var float
     *
     * @ORM\Column(name="density", type="float", precision=10, scale=0, nullable=true)
     */
    private $density;

    /**
     * @var float
     *
     * @ORM\Column(name="surfaceGravity", type="float", precision=10, scale=0, nullable=true)
     */
    private $surfacegravity;

    /**
     * @var float
     *
     * @ORM\Column(name="escapeVelocity", type="float", precision=10, scale=0, nullable=true)
     */
    private $escapevelocity;

    /**
     * @var float
     *
     * @ORM\Column(name="orbitPeriod", type="float", precision=10, scale=0, nullable=true)
     */
    private $orbitperiod;

    /**
     * @var float
     *
     * @ORM\Column(name="rotationRate", type="float", precision=10, scale=0, nullable=true)
     */
    private $rotationrate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="locked", type="boolean", nullable=true)
     */
    private $locked;

    /**
     * @var integer
     *
     * @ORM\Column(name="pressure", type="bigint", nullable=true)
     */
    private $pressure;

    /**
     * @var integer
     *
     * @ORM\Column(name="radius", type="bigint", nullable=true)
     */
    private $radius;

    /**
     * @var integer
     *
     * @ORM\Column(name="mass", type="integer", nullable=true)
     */
    private $mass;



    /**
     * Get celestialid
     *
     * @return integer
     */
    public function getCelestialid()
    {
        return $this->celestialid;
    }

    /**
     * Set temperature
     *
     * @param float $temperature
     *
     * @return Mapcelestialstatistics
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get temperature
     *
     * @return float
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set spectralclass
     *
     * @param string $spectralclass
     *
     * @return Mapcelestialstatistics
     */
    public function setSpectralclass($spectralclass)
    {
        $this->spectralclass = $spectralclass;

        return $this;
    }

    /**
     * Get spectralclass
     *
     * @return string
     */
    public function getSpectralclass()
    {
        return $this->spectralclass;
    }

    /**
     * Set luminosity
     *
     * @param float $luminosity
     *
     * @return Mapcelestialstatistics
     */
    public function setLuminosity($luminosity)
    {
        $this->luminosity = $luminosity;

        return $this;
    }

    /**
     * Get luminosity
     *
     * @return float
     */
    public function getLuminosity()
    {
        return $this->luminosity;
    }

    /**
     * Set age
     *
     * @param float $age
     *
     * @return Mapcelestialstatistics
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return float
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set life
     *
     * @param float $life
     *
     * @return Mapcelestialstatistics
     */
    public function setLife($life)
    {
        $this->life = $life;

        return $this;
    }

    /**
     * Get life
     *
     * @return float
     */
    public function getLife()
    {
        return $this->life;
    }

    /**
     * Set orbitradius
     *
     * @param float $orbitradius
     *
     * @return Mapcelestialstatistics
     */
    public function setOrbitradius($orbitradius)
    {
        $this->orbitradius = $orbitradius;

        return $this;
    }

    /**
     * Get orbitradius
     *
     * @return float
     */
    public function getOrbitradius()
    {
        return $this->orbitradius;
    }

    /**
     * Set eccentricity
     *
     * @param float $eccentricity
     *
     * @return Mapcelestialstatistics
     */
    public function setEccentricity($eccentricity)
    {
        $this->eccentricity = $eccentricity;

        return $this;
    }

    /**
     * Get eccentricity
     *
     * @return float
     */
    public function getEccentricity()
    {
        return $this->eccentricity;
    }

    /**
     * Set massdust
     *
     * @param float $massdust
     *
     * @return Mapcelestialstatistics
     */
    public function setMassdust($massdust)
    {
        $this->massdust = $massdust;

        return $this;
    }

    /**
     * Get massdust
     *
     * @return float
     */
    public function getMassdust()
    {
        return $this->massdust;
    }

    /**
     * Set massgas
     *
     * @param float $massgas
     *
     * @return Mapcelestialstatistics
     */
    public function setMassgas($massgas)
    {
        $this->massgas = $massgas;

        return $this;
    }

    /**
     * Get massgas
     *
     * @return float
     */
    public function getMassgas()
    {
        return $this->massgas;
    }

    /**
     * Set fragmented
     *
     * @param boolean $fragmented
     *
     * @return Mapcelestialstatistics
     */
    public function setFragmented($fragmented)
    {
        $this->fragmented = $fragmented;

        return $this;
    }

    /**
     * Get fragmented
     *
     * @return boolean
     */
    public function getFragmented()
    {
        return $this->fragmented;
    }

    /**
     * Set density
     *
     * @param float $density
     *
     * @return Mapcelestialstatistics
     */
    public function setDensity($density)
    {
        $this->density = $density;

        return $this;
    }

    /**
     * Get density
     *
     * @return float
     */
    public function getDensity()
    {
        return $this->density;
    }

    /**
     * Set surfacegravity
     *
     * @param float $surfacegravity
     *
     * @return Mapcelestialstatistics
     */
    public function setSurfacegravity($surfacegravity)
    {
        $this->surfacegravity = $surfacegravity;

        return $this;
    }

    /**
     * Get surfacegravity
     *
     * @return float
     */
    public function getSurfacegravity()
    {
        return $this->surfacegravity;
    }

    /**
     * Set escapevelocity
     *
     * @param float $escapevelocity
     *
     * @return Mapcelestialstatistics
     */
    public function setEscapevelocity($escapevelocity)
    {
        $this->escapevelocity = $escapevelocity;

        return $this;
    }

    /**
     * Get escapevelocity
     *
     * @return float
     */
    public function getEscapevelocity()
    {
        return $this->escapevelocity;
    }

    /**
     * Set orbitperiod
     *
     * @param float $orbitperiod
     *
     * @return Mapcelestialstatistics
     */
    public function setOrbitperiod($orbitperiod)
    {
        $this->orbitperiod = $orbitperiod;

        return $this;
    }

    /**
     * Get orbitperiod
     *
     * @return float
     */
    public function getOrbitperiod()
    {
        return $this->orbitperiod;
    }

    /**
     * Set rotationrate
     *
     * @param float $rotationrate
     *
     * @return Mapcelestialstatistics
     */
    public function setRotationrate($rotationrate)
    {
        $this->rotationrate = $rotationrate;

        return $this;
    }

    /**
     * Get rotationrate
     *
     * @return float
     */
    public function getRotationrate()
    {
        return $this->rotationrate;
    }

    /**
     * Set locked
     *
     * @param boolean $locked
     *
     * @return Mapcelestialstatistics
     */
    public function setLocked($locked)
    {
        $this->locked = $locked;

        return $this;
    }

    /**
     * Get locked
     *
     * @return boolean
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * Set pressure
     *
     * @param integer $pressure
     *
     * @return Mapcelestialstatistics
     */
    public function setPressure($pressure)
    {
        $this->pressure = $pressure;

        return $this;
    }

    /**
     * Get pressure
     *
     * @return integer
     */
    public function getPressure()
    {
        return $this->pressure;
    }

    /**
     * Set radius
     *
     * @param integer $radius
     *
     * @return Mapcelestialstatistics
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;

        return $this;
    }

    /**
     * Get radius
     *
     * @return integer
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * Set mass
     *
     * @param integer $mass
     *
     * @return Mapcelestialstatistics
     */
    public function setMass($mass)
    {
        $this->mass = $mass;

        return $this;
    }

    /**
     * Get mass
     *
     * @return integer
     */
    public function getMass()
    {
        return $this->mass;
    }
}
