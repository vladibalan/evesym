<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Industryblueprints
 *
 * @ORM\Table(name="industryBlueprints")
 * @ORM\Entity
 */
class Industryblueprints
{
    /**
     * @var integer
     *
     * @ORM\Column(name="maxProductionLimit", type="integer", nullable=true)
     */
    private $maxproductionlimit;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\OneToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="typeID", referencedColumnName="typeID", unique=true)
     * })
     */
    private $typeid;


}

