<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invmetatypes
 *
 * @ORM\Table(name="invMetaTypes", indexes={@ORM\Index(name="parentTypeID", columns={"parentTypeID"}), @ORM\Index(name="metaGroupID", columns={"metaGroupID"})})
 * @ORM\Entity
 */
class Invmetatypes
{
    /**
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\OneToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="typeID", referencedColumnName="typeID", unique=true)
     * })
     */
    private $typeid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parentTypeID", referencedColumnName="typeID")
     * })
     */
    private $parenttypeid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invmetagroups
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invmetagroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="metaGroupID", referencedColumnName="metaGroupID")
     * })
     */
    private $metagroupid;



    /**
     * Set typeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $typeid
     *
     * @return Invmetatypes
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
     * Set parenttypeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $parenttypeid
     *
     * @return Invmetatypes
     */
    public function setParenttypeid(\Vibs\EvesymBundle\Entity\Invtypes $parenttypeid = null)
    {
        $this->parenttypeid = $parenttypeid;

        return $this;
    }

    /**
     * Get parenttypeid
     *
     * @return \Vibs\EvesymBundle\Entity\Invtypes
     */
    public function getParenttypeid()
    {
        return $this->parenttypeid;
    }

    /**
     * Set metagroupid
     *
     * @param \Vibs\EvesymBundle\Entity\Invmetagroups $metagroupid
     *
     * @return Invmetatypes
     */
    public function setMetagroupid(\Vibs\EvesymBundle\Entity\Invmetagroups $metagroupid = null)
    {
        $this->metagroupid = $metagroupid;

        return $this;
    }

    /**
     * Get metagroupid
     *
     * @return \Vibs\EvesymBundle\Entity\Invmetagroups
     */
    public function getMetagroupid()
    {
        return $this->metagroupid;
    }
}
