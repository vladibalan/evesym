<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Certmasteries
 *
 * @ORM\Table(name="certMasteries", indexes={@ORM\Index(name="typeID", columns={"typeID"}), @ORM\Index(name="certID", columns={"certID"})})
 * @ORM\Entity
 */
class Certmasteries
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
     * @ORM\Column(name="masteryLevel", type="integer", nullable=true)
     */
    private $masterylevel;

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
     * @var \Vibs\EvesymBundle\Entity\Certcerts
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Certcerts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="certID", referencedColumnName="certID")
     * })
     */
    private $certid;


}

