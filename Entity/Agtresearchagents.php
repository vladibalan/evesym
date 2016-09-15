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


}

