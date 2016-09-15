<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stastationtypes
 *
 * @ORM\Table(name="staStationTypes", indexes={@ORM\Index(name="operationID", columns={"operationID"})})
 * @ORM\Entity
 */
class Stastationtypes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="stationTypeID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $stationtypeid;

    /**
     * @var float
     *
     * @ORM\Column(name="dockEntryX", type="float", precision=10, scale=0, nullable=true)
     */
    private $dockentryx;

    /**
     * @var float
     *
     * @ORM\Column(name="dockEntryY", type="float", precision=10, scale=0, nullable=true)
     */
    private $dockentryy;

    /**
     * @var float
     *
     * @ORM\Column(name="dockEntryZ", type="float", precision=10, scale=0, nullable=true)
     */
    private $dockentryz;

    /**
     * @var float
     *
     * @ORM\Column(name="dockOrientationX", type="float", precision=10, scale=0, nullable=true)
     */
    private $dockorientationx;

    /**
     * @var float
     *
     * @ORM\Column(name="dockOrientationY", type="float", precision=10, scale=0, nullable=true)
     */
    private $dockorientationy;

    /**
     * @var float
     *
     * @ORM\Column(name="dockOrientationZ", type="float", precision=10, scale=0, nullable=true)
     */
    private $dockorientationz;

    /**
     * @var integer
     *
     * @ORM\Column(name="officeSlots", type="integer", nullable=true)
     */
    private $officeslots;

    /**
     * @var float
     *
     * @ORM\Column(name="reprocessingEfficiency", type="float", precision=10, scale=0, nullable=true)
     */
    private $reprocessingefficiency;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conquerable", type="boolean", nullable=true)
     */
    private $conquerable;

    /**
     * @var \Vibs\EvesymBundle\Entity\Staoperations
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Staoperations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="operationID", referencedColumnName="operationID")
     * })
     */
    private $operationid;


}

