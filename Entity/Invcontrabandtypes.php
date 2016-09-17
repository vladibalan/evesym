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
     * Set standingloss
     *
     * @param float $standingloss
     *
     * @return Invcontrabandtypes
     */
    public function setStandingloss($standingloss)
    {
        $this->standingloss = $standingloss;

        return $this;
    }

    /**
     * Get standingloss
     *
     * @return float
     */
    public function getStandingloss()
    {
        return $this->standingloss;
    }

    /**
     * Set confiscateminsec
     *
     * @param float $confiscateminsec
     *
     * @return Invcontrabandtypes
     */
    public function setConfiscateminsec($confiscateminsec)
    {
        $this->confiscateminsec = $confiscateminsec;

        return $this;
    }

    /**
     * Get confiscateminsec
     *
     * @return float
     */
    public function getConfiscateminsec()
    {
        return $this->confiscateminsec;
    }

    /**
     * Set finebyvalue
     *
     * @param float $finebyvalue
     *
     * @return Invcontrabandtypes
     */
    public function setFinebyvalue($finebyvalue)
    {
        $this->finebyvalue = $finebyvalue;

        return $this;
    }

    /**
     * Get finebyvalue
     *
     * @return float
     */
    public function getFinebyvalue()
    {
        return $this->finebyvalue;
    }

    /**
     * Set attackminsec
     *
     * @param float $attackminsec
     *
     * @return Invcontrabandtypes
     */
    public function setAttackminsec($attackminsec)
    {
        $this->attackminsec = $attackminsec;

        return $this;
    }

    /**
     * Get attackminsec
     *
     * @return float
     */
    public function getAttackminsec()
    {
        return $this->attackminsec;
    }

    /**
     * Set factionid
     *
     * @param \Vibs\EvesymBundle\Entity\Chrfactions $factionid
     *
     * @return Invcontrabandtypes
     */
    public function setFactionid(\Vibs\EvesymBundle\Entity\Chrfactions $factionid = null)
    {
        $this->factionid = $factionid;

        return $this;
    }

    /**
     * Get factionid
     *
     * @return \Vibs\EvesymBundle\Entity\Chrfactions
     */
    public function getFactionid()
    {
        return $this->factionid;
    }

    /**
     * Set typeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $typeid
     *
     * @return Invcontrabandtypes
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
