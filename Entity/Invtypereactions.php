<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invtypereactions
 *
 * @ORM\Table(name="invTypeReactions", indexes={@ORM\Index(name="reactionTypeID", columns={"reactionTypeID"}), @ORM\Index(name="typeID", columns={"typeID"})})
 * @ORM\Entity
 */
class Invtypereactions
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
     * @var boolean
     *
     * @ORM\Column(name="input", type="boolean", nullable=false)
     */
    private $input;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reactionTypeID", referencedColumnName="typeID")
     * })
     */
    private $reactiontypeid;

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

