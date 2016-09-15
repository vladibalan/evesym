<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invcontroltowerresources
 *
 * @ORM\Table(name="invControlTowerResources", indexes={@ORM\Index(name="controlTowerTypeID", columns={"controlTowerTypeID"}), @ORM\Index(name="factionID", columns={"factionID"}), @ORM\Index(name="resourceTypeID", columns={"resourceTypeID"})})
 * @ORM\Entity
 */
class Invcontroltowerresources
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
     * @var integer
     *
     * @ORM\Column(name="purpose", type="integer", nullable=true)
     */
    private $purpose;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @var float
     *
     * @ORM\Column(name="minSecurityLevel", type="float", precision=10, scale=0, nullable=true)
     */
    private $minsecuritylevel;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="controlTowerTypeID", referencedColumnName="typeID")
     * })
     */
    private $controltowertypeid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="resourceTypeID", referencedColumnName="typeID")
     * })
     */
    private $resourcetypeid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Chrfactions
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Chrfactions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="factionID", referencedColumnName="factionID")
     * })
     */
    private $factionid;


}

