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


}

