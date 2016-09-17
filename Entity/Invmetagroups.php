<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invmetagroups
 *
 * @ORM\Table(name="invMetaGroups", indexes={@ORM\Index(name="iconID", columns={"iconID"})})
 * @ORM\Entity
 */
class Invmetagroups
{
    /**
     * @var integer
     *
     * @ORM\Column(name="metaGroupID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $metagroupid;

    /**
     * @var string
     *
     * @ORM\Column(name="metaGroupName", type="string", length=100, nullable=true)
     */
    private $metagroupname;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=true)
     */
    private $description;

    /**
     * @var \Vibs\EvesymBundle\Entity\Eveicons
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Eveicons")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iconID", referencedColumnName="iconID")
     * })
     */
    private $iconid;



    /**
     * Get metagroupid
     *
     * @return integer
     */
    public function getMetagroupid()
    {
        return $this->metagroupid;
    }

    /**
     * Set metagroupname
     *
     * @param string $metagroupname
     *
     * @return Invmetagroups
     */
    public function setMetagroupname($metagroupname)
    {
        $this->metagroupname = $metagroupname;

        return $this;
    }

    /**
     * Get metagroupname
     *
     * @return string
     */
    public function getMetagroupname()
    {
        return $this->metagroupname;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Invmetagroups
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set iconid
     *
     * @param \Vibs\EvesymBundle\Entity\Eveicons $iconid
     *
     * @return Invmetagroups
     */
    public function setIconid(\Vibs\EvesymBundle\Entity\Eveicons $iconid = null)
    {
        $this->iconid = $iconid;

        return $this;
    }

    /**
     * Get iconid
     *
     * @return \Vibs\EvesymBundle\Entity\Eveicons
     */
    public function getIconid()
    {
        return $this->iconid;
    }
}
