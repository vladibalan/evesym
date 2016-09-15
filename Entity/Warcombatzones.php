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


}

