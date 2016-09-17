<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Crpnpccorporationresearchfields
 *
 * @ORM\Table(name="crpNPCCorporationResearchFields", indexes={@ORM\Index(name="skillID", columns={"skillID"}), @ORM\Index(name="corporationID", columns={"corporationID"})})
 * @ORM\Entity
 */
class Crpnpccorporationresearchfields
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
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="skillID", referencedColumnName="typeID")
     * })
     */
    private $skillid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Crpnpccorporations
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Crpnpccorporations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="corporationID", referencedColumnName="corporationID")
     * })
     */
    private $corporationid;



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
     * Set skillid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $skillid
     *
     * @return Crpnpccorporationresearchfields
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
     * Set corporationid
     *
     * @param \Vibs\EvesymBundle\Entity\Crpnpccorporations $corporationid
     *
     * @return Crpnpccorporationresearchfields
     */
    public function setCorporationid(\Vibs\EvesymBundle\Entity\Crpnpccorporations $corporationid = null)
    {
        $this->corporationid = $corporationid;

        return $this;
    }

    /**
     * Get corporationid
     *
     * @return \Vibs\EvesymBundle\Entity\Crpnpccorporations
     */
    public function getCorporationid()
    {
        return $this->corporationid;
    }
}
