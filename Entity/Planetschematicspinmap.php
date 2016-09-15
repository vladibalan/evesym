<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planetschematicspinmap
 *
 * @ORM\Table(name="planetSchematicsPinMap", indexes={@ORM\Index(name="schematicID", columns={"schematicID"}), @ORM\Index(name="pinTypeID", columns={"pinTypeID"})})
 * @ORM\Entity
 */
class Planetschematicspinmap
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
     *   @ORM\JoinColumn(name="pinTypeID", referencedColumnName="typeID")
     * })
     */
    private $pintypeid;


}

