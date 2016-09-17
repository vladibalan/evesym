<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Industryactivityraces
 *
 * @ORM\Table(name="industryActivityRaces", indexes={@ORM\Index(name="ix_industryActivityRaces_productTypeID", columns={"productTypeID"}), @ORM\Index(name="ix_industryActivityRaces_typeID", columns={"typeID"}), @ORM\Index(name="activityID", columns={"activityID"})})
 * @ORM\Entity
 */
class Industryactivityraces
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
     * @ORM\Column(name="raceID", type="integer", nullable=true)
     */
    private $raceid;

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
     *   @ORM\JoinColumn(name="typeID", referencedColumnName="typeID")
     * })
     */
    private $typeid;

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
     * Set raceid
     *
     * @param integer $raceid
     *
     * @return Industryactivityraces
     */
    public function setRaceid($raceid)
    {
        $this->raceid = $raceid;

        return $this;
    }

    /**
     * Get raceid
     *
     * @return integer
     */
    public function getRaceid()
    {
        return $this->raceid;
    }

    /**
     * Set activityid
     *
     * @param \Vibs\EvesymBundle\Entity\Ramactivities $activityid
     *
     * @return Industryactivityraces
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
     * Set typeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $typeid
     *
     * @return Industryactivityraces
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
     * Set producttypeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $producttypeid
     *
     * @return Industryactivityraces
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
