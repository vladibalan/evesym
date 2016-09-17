<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Staoperations
 *
 * @ORM\Table(name="staOperations", indexes={@ORM\Index(name="activityID", columns={"activityID"}), @ORM\Index(name="caldariStationTypeID", columns={"caldariStationTypeID"}), @ORM\Index(name="minmatarStationTypeID", columns={"minmatarStationTypeID"}), @ORM\Index(name="amarrStationTypeID", columns={"amarrStationTypeID"}), @ORM\Index(name="gallenteStationTypeID", columns={"gallenteStationTypeID"}), @ORM\Index(name="joveStationTypeID", columns={"joveStationTypeID"})})
 * @ORM\Entity
 */
class Staoperations
{
    /**
     * @var integer
     *
     * @ORM\Column(name="operationID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $operationid;

    /**
     * @var string
     *
     * @ORM\Column(name="operationName", type="string", length=100, nullable=true)
     */
    private $operationname;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="fringe", type="integer", nullable=true)
     */
    private $fringe;

    /**
     * @var integer
     *
     * @ORM\Column(name="corridor", type="integer", nullable=true)
     */
    private $corridor;

    /**
     * @var integer
     *
     * @ORM\Column(name="hub", type="integer", nullable=true)
     */
    private $hub;

    /**
     * @var integer
     *
     * @ORM\Column(name="border", type="integer", nullable=true)
     */
    private $border;

    /**
     * @var integer
     *
     * @ORM\Column(name="ratio", type="integer", nullable=true)
     */
    private $ratio;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="caldariStationTypeID", referencedColumnName="typeID")
     * })
     */
    private $caldaristationtypeid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="minmatarStationTypeID", referencedColumnName="typeID")
     * })
     */
    private $minmatarstationtypeid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="amarrStationTypeID", referencedColumnName="typeID")
     * })
     */
    private $amarrstationtypeid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gallenteStationTypeID", referencedColumnName="typeID")
     * })
     */
    private $gallentestationtypeid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="joveStationTypeID", referencedColumnName="typeID")
     * })
     */
    private $jovestationtypeid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Crpactivities
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Crpactivities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="activityID", referencedColumnName="activityID")
     * })
     */
    private $activityid;



    /**
     * Get operationid
     *
     * @return integer
     */
    public function getOperationid()
    {
        return $this->operationid;
    }

    /**
     * Set operationname
     *
     * @param string $operationname
     *
     * @return Staoperations
     */
    public function setOperationname($operationname)
    {
        $this->operationname = $operationname;

        return $this;
    }

    /**
     * Get operationname
     *
     * @return string
     */
    public function getOperationname()
    {
        return $this->operationname;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Staoperations
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
     * Set fringe
     *
     * @param integer $fringe
     *
     * @return Staoperations
     */
    public function setFringe($fringe)
    {
        $this->fringe = $fringe;

        return $this;
    }

    /**
     * Get fringe
     *
     * @return integer
     */
    public function getFringe()
    {
        return $this->fringe;
    }

    /**
     * Set corridor
     *
     * @param integer $corridor
     *
     * @return Staoperations
     */
    public function setCorridor($corridor)
    {
        $this->corridor = $corridor;

        return $this;
    }

    /**
     * Get corridor
     *
     * @return integer
     */
    public function getCorridor()
    {
        return $this->corridor;
    }

    /**
     * Set hub
     *
     * @param integer $hub
     *
     * @return Staoperations
     */
    public function setHub($hub)
    {
        $this->hub = $hub;

        return $this;
    }

    /**
     * Get hub
     *
     * @return integer
     */
    public function getHub()
    {
        return $this->hub;
    }

    /**
     * Set border
     *
     * @param integer $border
     *
     * @return Staoperations
     */
    public function setBorder($border)
    {
        $this->border = $border;

        return $this;
    }

    /**
     * Get border
     *
     * @return integer
     */
    public function getBorder()
    {
        return $this->border;
    }

    /**
     * Set ratio
     *
     * @param integer $ratio
     *
     * @return Staoperations
     */
    public function setRatio($ratio)
    {
        $this->ratio = $ratio;

        return $this;
    }

    /**
     * Get ratio
     *
     * @return integer
     */
    public function getRatio()
    {
        return $this->ratio;
    }

    /**
     * Set caldaristationtypeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $caldaristationtypeid
     *
     * @return Staoperations
     */
    public function setCaldaristationtypeid(\Vibs\EvesymBundle\Entity\Invtypes $caldaristationtypeid = null)
    {
        $this->caldaristationtypeid = $caldaristationtypeid;

        return $this;
    }

    /**
     * Get caldaristationtypeid
     *
     * @return \Vibs\EvesymBundle\Entity\Invtypes
     */
    public function getCaldaristationtypeid()
    {
        return $this->caldaristationtypeid;
    }

    /**
     * Set minmatarstationtypeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $minmatarstationtypeid
     *
     * @return Staoperations
     */
    public function setMinmatarstationtypeid(\Vibs\EvesymBundle\Entity\Invtypes $minmatarstationtypeid = null)
    {
        $this->minmatarstationtypeid = $minmatarstationtypeid;

        return $this;
    }

    /**
     * Get minmatarstationtypeid
     *
     * @return \Vibs\EvesymBundle\Entity\Invtypes
     */
    public function getMinmatarstationtypeid()
    {
        return $this->minmatarstationtypeid;
    }

    /**
     * Set amarrstationtypeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $amarrstationtypeid
     *
     * @return Staoperations
     */
    public function setAmarrstationtypeid(\Vibs\EvesymBundle\Entity\Invtypes $amarrstationtypeid = null)
    {
        $this->amarrstationtypeid = $amarrstationtypeid;

        return $this;
    }

    /**
     * Get amarrstationtypeid
     *
     * @return \Vibs\EvesymBundle\Entity\Invtypes
     */
    public function getAmarrstationtypeid()
    {
        return $this->amarrstationtypeid;
    }

    /**
     * Set gallentestationtypeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $gallentestationtypeid
     *
     * @return Staoperations
     */
    public function setGallentestationtypeid(\Vibs\EvesymBundle\Entity\Invtypes $gallentestationtypeid = null)
    {
        $this->gallentestationtypeid = $gallentestationtypeid;

        return $this;
    }

    /**
     * Get gallentestationtypeid
     *
     * @return \Vibs\EvesymBundle\Entity\Invtypes
     */
    public function getGallentestationtypeid()
    {
        return $this->gallentestationtypeid;
    }

    /**
     * Set jovestationtypeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $jovestationtypeid
     *
     * @return Staoperations
     */
    public function setJovestationtypeid(\Vibs\EvesymBundle\Entity\Invtypes $jovestationtypeid = null)
    {
        $this->jovestationtypeid = $jovestationtypeid;

        return $this;
    }

    /**
     * Get jovestationtypeid
     *
     * @return \Vibs\EvesymBundle\Entity\Invtypes
     */
    public function getJovestationtypeid()
    {
        return $this->jovestationtypeid;
    }

    /**
     * Set activityid
     *
     * @param \Vibs\EvesymBundle\Entity\Crpactivities $activityid
     *
     * @return Staoperations
     */
    public function setActivityid(\Vibs\EvesymBundle\Entity\Crpactivities $activityid = null)
    {
        $this->activityid = $activityid;

        return $this;
    }

    /**
     * Get activityid
     *
     * @return \Vibs\EvesymBundle\Entity\Crpactivities
     */
    public function getActivityid()
    {
        return $this->activityid;
    }
}
