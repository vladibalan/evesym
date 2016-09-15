<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invtraits
 *
 * @ORM\Table(name="invTraits", indexes={@ORM\Index(name="typeID", columns={"typeID"}), @ORM\Index(name="skillID", columns={"skillID"}), @ORM\Index(name="unitID", columns={"unitID"})})
 * @ORM\Entity
 */
class Invtraits
{
    /**
     * @var integer
     *
     * @ORM\Column(name="traitID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $traitid;

    /**
     * @var float
     *
     * @ORM\Column(name="bonus", type="float", precision=10, scale=0, nullable=true)
     */
    private $bonus;

    /**
     * @var string
     *
     * @ORM\Column(name="bonusText", type="text", length=65535, nullable=true)
     */
    private $bonustext;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="typeID", referencedColumnName="typeID")
     * })
     */
    private $typeid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="skillID", referencedColumnName="typeID")
     * })
     */
    private $skillid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Eveunits
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Eveunits")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="unitID", referencedColumnName="unitID")
     * })
     */
    private $unitid;


}

