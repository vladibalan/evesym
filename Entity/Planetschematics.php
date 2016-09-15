<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planetschematics
 *
 * @ORM\Table(name="planetSchematics")
 * @ORM\Entity
 */
class Planetschematics
{
    /**
     * @var integer
     *
     * @ORM\Column(name="schematicID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $schematicid;

    /**
     * @var string
     *
     * @ORM\Column(name="schematicName", type="string", length=255, nullable=true)
     */
    private $schematicname;

    /**
     * @var integer
     *
     * @ORM\Column(name="cycleTime", type="integer", nullable=true)
     */
    private $cycletime;


}

