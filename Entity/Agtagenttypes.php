<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agtagenttypes
 *
 * @ORM\Table(name="agtAgentTypes")
 * @ORM\Entity
 */
class Agtagenttypes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="agentTypeID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $agenttypeid;

    /**
     * @var string
     *
     * @ORM\Column(name="agentType", type="string", length=50, nullable=true)
     */
    private $agenttype;



    /**
     * Get agenttypeid
     *
     * @return integer
     */
    public function getAgenttypeid()
    {
        return $this->agenttypeid;
    }

    /**
     * Set agenttype
     *
     * @param string $agenttype
     *
     * @return Agtagenttypes
     */
    public function setAgenttype($agenttype)
    {
        $this->agenttype = $agenttype;

        return $this;
    }

    /**
     * Get agenttype
     *
     * @return string
     */
    public function getAgenttype()
    {
        return $this->agenttype;
    }
}
