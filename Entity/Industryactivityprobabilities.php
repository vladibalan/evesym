<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Industryactivityprobabilities
 *
 * @ORM\Table(name="industryActivityProbabilities", indexes={@ORM\Index(name="ix_industryActivityProbabilities_typeID", columns={"typeID"}), @ORM\Index(name="ix_industryActivityProbabilities_productTypeID", columns={"productTypeID"}), @ORM\Index(name="activityID", columns={"activityID"})})
 * @ORM\Entity
 */
class Industryactivityprobabilities
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
     * @var string
     *
     * @ORM\Column(name="probability", type="decimal", precision=3, scale=2, nullable=true)
     */
    private $probability;

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
     * @var \Vibs\EvesymBundle\Entity\Ramactivities
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Ramactivities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="activityID", referencedColumnName="activityID")
     * })
     */
    private $activityid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="productTypeID", referencedColumnName="typeID")
     * })
     */
    private $producttypeid;



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
     * Set probability
     *
     * @param string $probability
     *
     * @return Industryactivityprobabilities
     */
    public function setProbability($probability)
    {
        $this->probability = $probability;

        return $this;
    }

    /**
     * Get probability
     *
     * @return string
     */
    public function getProbability()
    {
        return $this->probability;
    }

    /**
     * Set typeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $typeid
     *
     * @return Industryactivityprobabilities
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
     * Set activityid
     *
     * @param \Vibs\EvesymBundle\Entity\Ramactivities $activityid
     *
     * @return Industryactivityprobabilities
     */
    public function setActivityid(\Vibs\EvesymBundle\Entity\Ramactivities $activityid = null)
    {
        $this->activityid = $activityid;

        return $this;
    }

    /**
     * Get activityid
     *
     * @return \Vibs\EvesymBundle\Entity\Ramactivities
     */
    public function getActivityid()
    {
        return $this->activityid;
    }

    /**
     * Set producttypeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $producttypeid
     *
     * @return Industryactivityprobabilities
     */
    public function setProducttypeid(\Vibs\EvesymBundle\Entity\Invtypes $producttypeid = null)
    {
        $this->producttypeid = $producttypeid;

        return $this;
    }

    /**
     * Get producttypeid
     *
     * @return \Vibs\EvesymBundle\Entity\Invtypes
     */
    public function getProducttypeid()
    {
        return $this->producttypeid;
    }
}
