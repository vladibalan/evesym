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
     * Set input
     *
     * @param boolean $input
     *
     * @return Invtypereactions
     */
    public function setInput($input)
    {
        $this->input = $input;

        return $this;
    }

    /**
     * Get input
     *
     * @return boolean
     */
    public function getInput()
    {
        return $this->input;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Invtypereactions
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set reactiontypeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $reactiontypeid
     *
     * @return Invtypereactions
     */
    public function setReactiontypeid(\Vibs\EvesymBundle\Entity\Invtypes $reactiontypeid = null)
    {
        $this->reactiontypeid = $reactiontypeid;

        return $this;
    }

    /**
     * Get reactiontypeid
     *
     * @return \Vibs\EvesymBundle\Entity\Invtypes
     */
    public function getReactiontypeid()
    {
        return $this->reactiontypeid;
    }

    /**
     * Set typeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $typeid
     *
     * @return Invtypereactions
     */
    public function setTypeid(\Vibs\EvesymBundle\Entity\Invtypes $typeid = null)
    {
        $this->typeid = $typeid;

        return $this;
    }

    /**
     * Get typeid
     *
     * @return \Vibs\EvesymBundle\Entity\Invtypes
     */
    public function getTypeid()
    {
        return $this->typeid;
    }
}
