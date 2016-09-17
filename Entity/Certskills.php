<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Certskills
 *
 * @ORM\Table(name="certSkills", indexes={@ORM\Index(name="ix_certSkills_skillID", columns={"skillID"}), @ORM\Index(name="certID", columns={"certID"})})
 * @ORM\Entity
 */
class Certskills
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
     * @ORM\Column(name="certLevelInt", type="integer", nullable=true)
     */
    private $certlevelint;

    /**
     * @var integer
     *
     * @ORM\Column(name="skillLevel", type="integer", nullable=true)
     */
    private $skilllevel;

    /**
     * @var string
     *
     * @ORM\Column(name="certLevelText", type="string", length=8, nullable=true)
     */
    private $certleveltext;

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
     * @var \Vibs\EvesymBundle\Entity\Certcerts
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Certcerts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="certID", referencedColumnName="certID")
     * })
     */
    private $certid;



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
     * Set certlevelint
     *
     * @param integer $certlevelint
     *
     * @return Certskills
     */
    public function setCertlevelint($certlevelint)
    {
        $this->certlevelint = $certlevelint;

        return $this;
    }

    /**
     * Get certlevelint
     *
     * @return integer
     */
    public function getCertlevelint()
    {
        return $this->certlevelint;
    }

    /**
     * Set skilllevel
     *
     * @param integer $skilllevel
     *
     * @return Certskills
     */
    public function setSkilllevel($skilllevel)
    {
        $this->skilllevel = $skilllevel;

        return $this;
    }

    /**
     * Get skilllevel
     *
     * @return integer
     */
    public function getSkilllevel()
    {
        return $this->skilllevel;
    }

    /**
     * Set certleveltext
     *
     * @param string $certleveltext
     *
     * @return Certskills
     */
    public function setCertleveltext($certleveltext)
    {
        $this->certleveltext = $certleveltext;

        return $this;
    }

    /**
     * Get certleveltext
     *
     * @return string
     */
    public function getCertleveltext()
    {
        return $this->certleveltext;
    }

    /**
     * Set skillid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $skillid
     *
     * @return Certskills
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
     * Set certid
     *
     * @param \Vibs\EvesymBundle\Entity\Certcerts $certid
     *
     * @return Certskills
     */
    public function setCertid(\Vibs\EvesymBundle\Entity\Certcerts $certid = null)
    {
        $this->certid = $certid;

        return $this;
    }

    /**
     * Get certid
     *
     * @return \Vibs\EvesymBundle\Entity\Certcerts
     */
    public function getCertid()
    {
        return $this->certid;
    }
}
