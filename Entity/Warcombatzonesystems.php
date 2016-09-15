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


}

