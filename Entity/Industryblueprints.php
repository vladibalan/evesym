<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Industryblueprints
 *
 * @ORM\Table(name="industryBlueprints", indexes={@ORM\Index(name="typeID", columns={"typeID"})})
 * @ORM\Entity
 */
class Industryblueprints
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
     * @ORM\Column(name="maxProductionLimit", type="integer", nullable=true)
     */
    private $maxproductionlimit;

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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set maxproductionlimit
     *
     * @param integer $maxproductionlimit
     *
     * @return Industryblueprints
     */
    public function setMaxproductionlimit($maxproductionlimit)
    {
        $this->maxproductionlimit = $maxproductionlimit;

        return $this;
    }

    /**
     * Get maxproductionlimit
     *
     * @return integer
     */
    public function getMaxproductionlimit()
    {
        return $this->maxproductionlimit;
    }

    /**
     * Set typeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $typeid
     *
     * @return Industryblueprints
     */
    public function setTypeid(\Vibs\EvesymBundle\Entity\Invtypes $typeid = null)
    {
        $this->typeid = $typeid;

        return $this;
    }

    /**
     * Get typeid
     *
     * @return \Vibs\EvesymBundle\Entity\Invtypes
     */
    public function getTypeid()
    {
        return $this->typeid;
    }
}
