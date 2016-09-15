<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invpositions
 *
 * @ORM\Table(name="invPositions")
 * @ORM\Entity
 */
class Invpositions
{
    /**
     * @var float
     *
     * @ORM\Column(name="x", type="float", precision=10, scale=0, nullable=false)
     */
    private $x;

    /**
     * @var float
     *
     * @ORM\Column(name="y", type="float", precision=10, scale=0, nullable=false)
     */
    private $y;

    /**
     * @var float
     *
     * @ORM\Column(name="z", type="float", precision=10, scale=0, nullable=false)
     */
    private $z;

    /**
     * @var float
     *
     * @ORM\Column(name="yaw", type="float", precision=10, scale=0, nullable=true)
     */
    private $yaw;

    /**
     * @var float
     *
     * @ORM\Column(name="pitch", type="float", precision=10, scale=0, nullable=true)
     */
    private $pitch;

    /**
     * @var float
     *
     * @ORM\Column(name="roll", type="float", precision=10, scale=0, nullable=true)
     */
    private $roll;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invnames
     *
     * @ORM\OneToOne(targetEntity="Vibs\EvesymBundle\Entity\Invnames")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="itemID", referencedColumnName="itemID", unique=true)
     * })
     */
    private $itemid;


}

