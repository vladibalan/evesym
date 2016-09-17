<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agtagents
 *
 * @ORM\Table(name="agtAgents", indexes={@ORM\Index(name="ix_agtAgents_corporationID", columns={"corporationID"}), @ORM\Index(name="ix_agtAgents_locationID", columns={"locationID"}), @ORM\Index(name="divisionID", columns={"divisionID"}), @ORM\Index(name="agentTypeID", columns={"agentTypeID"})})
 * @ORM\Entity
 */
class Agtagents
{
    /**
     * @var integer
     *
     * @ORM\Column(name="agentID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $agentid;

    /**
     * @var integer
     *
     * @ORM\Column(name="locationID", type="integer", nullable=true)
     */
    private $locationid;

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="integer", nullable=true)
     */
    private $level;

    /**
     * @var integer
     *
     * @ORM\Column(name="quality", type="integer", nullable=true)
     */
    private $quality;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isLocator", type="boolean", nullable=true)
     */
    private $islocator;

    /**
     * @var \Vibs\EvesymBundle\Entity\Crpnpcdivisions
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Crpnpcdivisions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="divisionID", referencedColumnName="divisionID")
     * })
     */
    private $divisionid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Agtagenttypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Agtagenttypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="agentTypeID", referencedColumnName="agentTypeID")
     * })
     */
    private $agenttypeid;

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
     * Get agentid
     *
     * @return integer
     */
    public function getAgentid()
    {
        return $this->agentid;
    }

    /**
     * Set locationid
     *
     * @param integer $locationid
     *
     * @return Agtagents
     */
    public function setLocationid($locationid)
    {
        $this->locationid = $locationid;

        return $this;
    }

    /**
     * Get locationid
     *
     * @return integer
     */
    public function getLocationid()
    {
        return $this->locationid;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return Agtagents
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set quality
     *
     * @param integer $quality
     *
     * @return Agtagents
     */
    public function setQuality($quality)
    {
        $this->quality = $quality;

        return $this;
    }

    /**
     * Get quality
     *
     * @return integer
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * Set islocator
     *
     * @param boolean $islocator
     *
     * @return Agtagents
     */
    public function setIslocator($islocator)
    {
        $this->islocator = $islocator;

        return $this;
    }

    /**
     * Get islocator
     *
     * @return boolean
     */
    public function getIslocator()
    {
        return $this->islocator;
    }

    /**
     * Set divisionid
     *
     * @param \Vibs\EvesymBundle\Entity\Crpnpcdivisions $divisionid
     *
     * @return Agtagents
     */
    public function setDivisionid(\Vibs\EvesymBundle\Entity\Crpnpcdivisions $divisionid = null)
    {
        $this->divisionid = $divisionid;

        return $this;
    }

    /**
     * Get divisionid
     *
     * @return \Vibs\EvesymBundle\Entity\Crpnpcdivisions
     */
    public function getDivisionid()
    {
        return $this->divisionid;
    }

    /**
     * Set agenttypeid
     *
     * @param \Vibs\EvesymBundle\Entity\Agtagenttypes $agenttypeid
     *
     * @return Agtagents
     */
    public function setAgenttypeid(\Vibs\EvesymBundle\Entity\Agtagenttypes $agenttypeid = null)
    {
        $this->agenttypeid = $agenttypeid;

        return $this;
    }

    /**
     * Get agenttypeid
     *
     * @return \Vibs\EvesymBundle\Entity\Agtagenttypes
     */
    public function getAgenttypeid()
    {
        return $this->agenttypeid;
    }

    /**
     * Set corporationid
     *
     * @param \Vibs\EvesymBundle\Entity\Crpnpccorporations $corporationid
     *
     * @return Agtagents
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
