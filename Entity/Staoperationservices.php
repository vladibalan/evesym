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


}

