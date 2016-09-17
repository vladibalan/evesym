<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Warcombatzones
 *
 * @ORM\Table(name="warCombatZones", indexes={@ORM\Index(name="centerSystemID", columns={"centerSystemID"}), @ORM\Index(name="factionID", columns={"factionID"})})
 * @ORM\Entity
 */
class Warcombatzones
{
    /**
     * @var integer
     *
     * @ORM\Column(name="combatZoneID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $combatzoneid;

    /**
     * @var string
     *
     * @ORM\Column(name="combatZoneName", type="string", length=100, nullable=true)
     */
    private $combatzonename;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=500, nullable=true)
     */
    private $description;

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
     * @var \Vibs\EvesymBundle\Entity\Mapsolarsystems
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Mapsolarsystems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="centerSystemID", referencedColumnName="solarSystemID")
     * })
     */
    private $centersystemid;



    /**
     * Get combatzoneid
     *
     * @return integer
     */
    public function getCombatzoneid()
    {
        return $this->combatzoneid;
    }

    /**
     * Set combatzonename
     *
     * @param string $combatzonename
     *
     * @return Warcombatzones
     */
    public function setCombatzonename($combatzonename)
    {
        $this->combatzonename = $combatzonename;

        return $this;
    }

    /**
     * Get combatzonename
     *
     * @return string
     */
    public function getCombatzonename()
    {
        return $this->combatzonename;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Warcombatzones
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
     * Set factionid
     *
     * @param \Vibs\EvesymBundle\Entity\Chrfactions $factionid
     *
     * @return Warcombatzones
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

    /**
     * Set centersystemid
     *
     * @param \Vibs\EvesymBundle\Entity\Mapsolarsystems $centersystemid
     *
     * @return Warcombatzones
     */
    public function setCentersystemid(\Vibs\EvesymBundle\Entity\Mapsolarsystems $centersystemid = null)
    {
        $this->centersystemid = $centersystemid;

        return $this;
    }

    /**
     * Get centersystemid
     *
     * @return \Vibs\EvesymBundle\Entity\Mapsolarsystems
     */
    public function getCentersystemid()
    {
        return $this->centersystemid;
    }
}
