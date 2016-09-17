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



    /**
     * Get traitid
     *
     * @return integer
     */
    public function getTraitid()
    {
        return $this->traitid;
    }

    /**
     * Set bonus
     *
     * @param float $bonus
     *
     * @return Invtraits
     */
    public function setBonus($bonus)
    {
        $this->bonus = $bonus;

        return $this;
    }

    /**
     * Get bonus
     *
     * @return float
     */
    public function getBonus()
    {
        return $this->bonus;
    }

    /**
     * Set bonustext
     *
     * @param string $bonustext
     *
     * @return Invtraits
     */
    public function setBonustext($bonustext)
    {
        $this->bonustext = $bonustext;

        return $this;
    }

    /**
     * Get bonustext
     *
     * @return string
     */
    public function getBonustext()
    {
        return $this->bonustext;
    }

    /**
     * Set typeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $typeid
     *
     * @return Invtraits
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

    /**
     * Set skillid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $skillid
     *
     * @return Invtraits
     */
    public function setSkillid(\Vibs\EvesymBundle\Entity\Invtypes $skillid = null)
    {
        $this->skillid = $skillid;

        return $this;
    }

    /**
     * Get skillid
     *
     * @return \Vibs\EvesymBundle\Entity\Invtypes
     */
    public function getSkillid()
    {
        return $this->skillid;
    }

    /**
     * Set unitid
     *
     * @param \Vibs\EvesymBundle\Entity\Eveunits $unitid
     *
     * @return Invtraits
     */
    public function setUnitid(\Vibs\EvesymBundle\Entity\Eveunits $unitid = null)
    {
        $this->unitid = $unitid;

        return $this;
    }

    /**
     * Get unitid
     *
     * @return \Vibs\EvesymBundle\Entity\Eveunits
     */
    public function getUnitid()
    {
        return $this->unitid;
    }
}
