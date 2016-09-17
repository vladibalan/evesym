<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Staoperationservices
 *
 * @ORM\Table(name="staOperationServices", indexes={@ORM\Index(name="operationID", columns={"operationID"}), @ORM\Index(name="serviceID", columns={"serviceID"})})
 * @ORM\Entity
 */
class Staoperationservices
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
     * @var \Vibs\EvesymBundle\Entity\Staoperations
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Staoperations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="operationID", referencedColumnName="operationID")
     * })
     */
    private $operationid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Staservices
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Staservices")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="serviceID", referencedColumnName="serviceID")
     * })
     */
    private $serviceid;



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
     * Set operationid
     *
     * @param \Vibs\EvesymBundle\Entity\Staoperations $operationid
     *
     * @return Staoperationservices
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

    /**
     * Set serviceid
     *
     * @param \Vibs\EvesymBundle\Entity\Staservices $serviceid
     *
     * @return Staoperationservices
     */
    public function setServiceid(\Vibs\EvesymBundle\Entity\Staservices $serviceid = null)
    {
        $this->serviceid = $serviceid;

        return $this;
    }

    /**
     * Get serviceid
     *
     * @return \Vibs\EvesymBundle\Entity\Staservices
     */
    public function getServiceid()
    {
        return $this->serviceid;
    }
}
