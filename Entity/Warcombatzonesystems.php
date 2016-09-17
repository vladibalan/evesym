<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Warcombatzonesystems
 *
 * @ORM\Table(name="warCombatZoneSystems", indexes={@ORM\Index(name="combatZoneID", columns={"combatZoneID"})})
 * @ORM\Entity
 */
class Warcombatzonesystems
{
    /**
     * @var \Vibs\EvesymBundle\Entity\Mapsolarsystems
     *
     * @ORM\OneToOne(targetEntity="Vibs\EvesymBundle\Entity\Mapsolarsystems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="solarSystemID", referencedColumnName="solarSystemID", unique=true)
     * })
     */
    private $solarsystemid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Warcombatzones
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Warcombatzones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="combatZoneID", referencedColumnName="combatZoneID")
     * })
     */
    private $combatzoneid;



    /**
     * Set solarsystemid
     *
     * @param \Vibs\EvesymBundle\Entity\Mapsolarsystems $solarsystemid
     *
     * @return Warcombatzonesystems
     */
    public function setSolarsystemid(\Vibs\EvesymBundle\Entity\Mapsolarsystems $solarsystemid = null)
    {
        $this->solarsystemid = $solarsystemid;

        return $this;
    }

    /**
     * Get solarsystemid
     *
     * @return \Vibs\EvesymBundle\Entity\Mapsolarsystems
     */
    public function getSolarsystemid()
    {
        return $this->solarsystemid;
    }

    /**
     * Set combatzoneid
     *
     * @param \Vibs\EvesymBundle\Entity\Warcombatzones $combatzoneid
     *
     * @return Warcombatzonesystems
     */
    public function setCombatzoneid(\Vibs\EvesymBundle\Entity\Warcombatzones $combatzoneid = null)
    {
        $this->combatzoneid = $combatzoneid;

        return $this;
    }

    /**
     * Get combatzoneid
     *
     * @return \Vibs\EvesymBundle\Entity\Warcombatzones
     */
    public function getCombatzoneid()
    {
        return $this->combatzoneid;
    }
}
