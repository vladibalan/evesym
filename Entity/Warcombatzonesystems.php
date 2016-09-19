<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Warcombatzonesystems
 *
 * @ORM\Table(name="warCombatZoneSystems", indexes={@ORM\Index(name="combatZoneID", columns={"combatZoneID"}), @ORM\Index(name="solarSystemID", columns={"solarSystemID"})})
 * @ORM\Entity
 */
class Warcombatzonesystems
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Vibs\EvesymBundle\Entity\Mapsolarsystems
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Mapsolarsystems")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="solarSystemID", referencedColumnName="solarSystemID")
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

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
