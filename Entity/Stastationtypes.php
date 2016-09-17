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



    /**
     * Get stationtypeid
     *
     * @return integer
     */
    public function getStationtypeid()
    {
        return $this->stationtypeid;
    }

    /**
     * Set dockentryx
     *
     * @param float $dockentryx
     *
     * @return Stastationtypes
     */
    public function setDockentryx($dockentryx)
    {
        $this->dockentryx = $dockentryx;

        return $this;
    }

    /**
     * Get dockentryx
     *
     * @return float
     */
    public function getDockentryx()
    {
        return $this->dockentryx;
    }

    /**
     * Set dockentryy
     *
     * @param float $dockentryy
     *
     * @return Stastationtypes
     */
    public function setDockentryy($dockentryy)
    {
        $this->dockentryy = $dockentryy;

        return $this;
    }

    /**
     * Get dockentryy
     *
     * @return float
     */
    public function getDockentryy()
    {
        return $this->dockentryy;
    }

    /**
     * Set dockentryz
     *
     * @param float $dockentryz
     *
     * @return Stastationtypes
     */
    public function setDockentryz($dockentryz)
    {
        $this->dockentryz = $dockentryz;

        return $this;
    }

    /**
     * Get dockentryz
     *
     * @return float
     */
    public function getDockentryz()
    {
        return $this->dockentryz;
    }

    /**
     * Set dockorientationx
     *
     * @param float $dockorientationx
     *
     * @return Stastationtypes
     */
    public function setDockorientationx($dockorientationx)
    {
        $this->dockorientationx = $dockorientationx;

        return $this;
    }

    /**
     * Get dockorientationx
     *
     * @return float
     */
    public function getDockorientationx()
    {
        return $this->dockorientationx;
    }

    /**
     * Set dockorientationy
     *
     * @param float $dockorientationy
     *
     * @return Stastationtypes
     */
    public function setDockorientationy($dockorientationy)
    {
        $this->dockorientationy = $dockorientationy;

        return $this;
    }

    /**
     * Get dockorientationy
     *
     * @return float
     */
    public function getDockorientationy()
    {
        return $this->dockorientationy;
    }

    /**
     * Set dockorientationz
     *
     * @param float $dockorientationz
     *
     * @return Stastationtypes
     */
    public function setDockorientationz($dockorientationz)
    {
        $this->dockorientationz = $dockorientationz;

        return $this;
    }

    /**
     * Get dockorientationz
     *
     * @return float
     */
    public function getDockorientationz()
    {
        return $this->dockorientationz;
    }

    /**
     * Set officeslots
     *
     * @param integer $officeslots
     *
     * @return Stastationtypes
     */
    public function setOfficeslots($officeslots)
    {
        $this->officeslots = $officeslots;

        return $this;
    }

    /**
     * Get officeslots
     *
     * @return integer
     */
    public function getOfficeslots()
    {
        return $this->officeslots;
    }

    /**
     * Set reprocessingefficiency
     *
     * @param float $reprocessingefficiency
     *
     * @return Stastationtypes
     */
    public function setReprocessingefficiency($reprocessingefficiency)
    {
        $this->reprocessingefficiency = $reprocessingefficiency;

        return $this;
    }

    /**
     * Get reprocessingefficiency
     *
     * @return float
     */
    public function getReprocessingefficiency()
    {
        return $this->reprocessingefficiency;
    }

    /**
     * Set conquerable
     *
     * @param boolean $conquerable
     *
     * @return Stastationtypes
     */
    public function setConquerable($conquerable)
    {
        $this->conquerable = $conquerable;

        return $this;
    }

    /**
     * Get conquerable
     *
     * @return boolean
     */
    public function getConquerable()
    {
        return $this->conquerable;
    }

    /**
     * Set operationid
     *
     * @param \Vibs\EvesymBundle\Entity\Staoperations $operationid
     *
     * @return Stastationtypes
     */
    public function setOperationid(\Vibs\EvesymBundle\Entity\Staoperations $operationid = null)
    {
        $this->operationid = $operationid;

        return $this;
    }

    /**
     * Get operationid
     *
     * @return \Vibs\EvesymBundle\Entity\Staoperations
     */
    public function getOperationid()
    {
        return $this->operationid;
    }
}
