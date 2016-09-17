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



    /**
     * Get schematicid
     *
     * @return integer
     */
    public function getSchematicid()
    {
        return $this->schematicid;
    }

    /**
     * Set schematicname
     *
     * @param string $schematicname
     *
     * @return Planetschematics
     */
    public function setSchematicname($schematicname)
    {
        $this->schematicname = $schematicname;

        return $this;
    }

    /**
     * Get schematicname
     *
     * @return string
     */
    public function getSchematicname()
    {
        return $this->schematicname;
    }

    /**
     * Set cycletime
     *
     * @param integer $cycletime
     *
     * @return Planetschematics
     */
    public function setCycletime($cycletime)
    {
        $this->cycletime = $cycletime;

        return $this;
    }

    /**
     * Get cycletime
     *
     * @return integer
     */
    public function getCycletime()
    {
        return $this->cycletime;
    }
}
