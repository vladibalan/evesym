<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skinship
 *
 * @ORM\Table(name="skinShip", indexes={@ORM\Index(name="ix_skinShip_skinID", columns={"skinID"}), @ORM\Index(name="ix_skinShip_typeID", columns={"typeID"})})
 * @ORM\Entity
 */
class Skinship
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
     * @var \Vibs\EvesymBundle\Entity\Skins
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Skins")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="skinID", referencedColumnName="skinID")
     * })
     */
    private $skinid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="typeID", referencedColumnName="typeID")
     * })
     */
    private $typeid;


}

