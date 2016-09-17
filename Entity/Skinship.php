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
     * Set skinid
     *
     * @param \Vibs\EvesymBundle\Entity\Skins $skinid
     *
     * @return Skinship
     */
    public function setSkinid(\Vibs\EvesymBundle\Entity\Skins $skinid = null)
    {
        $this->skinid = $skinid;

        return $this;
    }

    /**
     * Get skinid
     *
     * @return \Vibs\EvesymBundle\Entity\Skins
     */
    public function getSkinid()
    {
        return $this->skinid;
    }

    /**
     * Set typeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $typeid
     *
     * @return Skinship
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
