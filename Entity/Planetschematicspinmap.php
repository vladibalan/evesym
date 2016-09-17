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
     * Set schematicid
     *
     * @param \Vibs\EvesymBundle\Entity\Planetschematics $schematicid
     *
     * @return Planetschematicspinmap
     */
    public function setSchematicid(\Vibs\EvesymBundle\Entity\Planetschematics $schematicid = null)
    {
        $this->schematicid = $schematicid;

        return $this;
    }

    /**
     * Get schematicid
     *
     * @return \Vibs\EvesymBundle\Entity\Planetschematics
     */
    public function getSchematicid()
    {
        return $this->schematicid;
    }

    /**
     * Set pintypeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $pintypeid
     *
     * @return Planetschematicspinmap
     */
    public function setPintypeid(\Vibs\EvesymBundle\Entity\Invtypes $pintypeid = null)
    {
        $this->pintypeid = $pintypeid;

        return $this;
    }

    /**
     * Get pintypeid
     *
     * @return \Vibs\EvesymBundle\Entity\Invtypes
     */
    public function getPintypeid()
    {
        return $this->pintypeid;
    }
}
