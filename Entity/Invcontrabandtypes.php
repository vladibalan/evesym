<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invcontrabandtypes
 *
 * @ORM\Table(name="invContrabandTypes", indexes={@ORM\Index(name="ix_invContrabandTypes_typeID", columns={"typeID"}), @ORM\Index(name="factionID", columns={"factionID"})})
 * @ORM\Entity
 */
class Invcontrabandtypes
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
     * @var float
     *
     * @ORM\Column(name="standingLoss", type="float", precision=10, scale=0, nullable=true)
     */
    private $standingloss;

    /**
     * @var float
     *
     * @ORM\Column(name="confiscateMinSec", type="float", precision=10, scale=0, nullable=true)
     */
    private $confiscateminsec;

    /**
     * @var float
     *
     * @ORM\Column(name="fineByValue", type="float", precision=10, scale=0, nullable=true)
     */
    private $finebyvalue;

    /**
     * @var float
     *
     * @ORM\Column(name="attackMinSec", type="float", precision=10, scale=0, nullable=true)
     */
    private $attackminsec;

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
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="typeID", referencedColumnName="typeID")
     * })
     */
    private $typeid;


}

