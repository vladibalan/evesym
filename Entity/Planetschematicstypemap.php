<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planetschematicstypemap
 *
 * @ORM\Table(name="planetSchematicsTypeMap", indexes={@ORM\Index(name="schematicID", columns={"schematicID"}), @ORM\Index(name="typeID", columns={"typeID"})})
 * @ORM\Entity
 */
class Planetschematicstypemap
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
     * @ORM\Column(name="quantity", type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isInput", type="boolean", nullable=true)
     */
    private $isinput;

    /**
     * @var \Vibs\EvesymBundle\Entity\Planetschematics
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Planetschematics")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="schematicID", referencedColumnName="schematicID")
     * })
     */
    private $schematicid;

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

