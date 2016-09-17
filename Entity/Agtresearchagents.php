<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agtresearchagents
 *
 * @ORM\Table(name="agtResearchAgents", indexes={@ORM\Index(name="ix_agtResearchAgents_typeID", columns={"typeID"}), @ORM\Index(name="agentID", columns={"agentID"})})
 * @ORM\Entity
 */
class Agtresearchagents
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
     * @var \Vibs\EvesymBundle\Entity\Agtagents
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Agtagents")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="agentID", referencedColumnName="agentID")
     * })
     */
    private $agentid;

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
     * Set agentid
     *
     * @param \Vibs\EvesymBundle\Entity\Agtagents $agentid
     *
     * @return Agtresearchagents
     */
    public function setAgentid(\Vibs\EvesymBundle\Entity\Agtagents $agentid = null)
    {
        $this->agentid = $agentid;

        return $this;
    }

    /**
     * Get agentid
     *
     * @return \Vibs\EvesymBundle\Entity\Agtagents
     */
    public function getAgentid()
    {
        return $this->agentid;
    }

    /**
     * Set typeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $typeid
     *
     * @return Agtresearchagents
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
