<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Industryactivitymaterials
 *
 * @ORM\Table(name="industryActivityMaterials", indexes={@ORM\Index(name="industryActivityMaterials_idx1", columns={"typeID", "activityID"}), @ORM\Index(name="ix_industryActivityMaterials_typeID", columns={"typeID"}), @ORM\Index(name="activityID", columns={"activityID"}), @ORM\Index(name="materialTypeID", columns={"materialTypeID"})})
 * @ORM\Entity
 */
class Industryactivitymaterials
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
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="typeID", referencedColumnName="typeID")
     * })
     */
    private $typeid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Ramactivities
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Ramactivities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="activityID", referencedColumnName="activityID")
     * })
     */
    private $activityid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="materialTypeID", referencedColumnName="typeID")
     * })
     */
    private $materialtypeid;



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
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Industryactivitymaterials
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set typeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $typeid
     *
     * @return Industryactivitymaterials
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

    /**
     * Set activityid
     *
     * @param \Vibs\EvesymBundle\Entity\Ramactivities $activityid
     *
     * @return Industryactivitymaterials
     */
    public function setActivityid(\Vibs\EvesymBundle\Entity\Ramactivities $activityid = null)
    {
        $this->activityid = $activityid;

        return $this;
    }

    /**
     * Get activityid
     *
     * @return \Vibs\EvesymBundle\Entity\Ramactivities
     */
    public function getActivityid()
    {
        return $this->activityid;
    }

    /**
     * Set materialtypeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $materialtypeid
     *
     * @return Industryactivitymaterials
     */
    public function setMaterialtypeid(\Vibs\EvesymBundle\Entity\Invtypes $materialtypeid = null)
    {
        $this->materialtypeid = $materialtypeid;

        return $this;
    }

    /**
     * Get materialtypeid
     *
     * @return \Vibs\EvesymBundle\Entity\Invtypes
     */
    public function getMaterialtypeid()
    {
        return $this->materialtypeid;
    }
}
