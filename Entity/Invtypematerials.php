<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invtypematerials
 *
 * @ORM\Table(name="invTypeMaterials", indexes={@ORM\Index(name="typeID", columns={"typeID"}), @ORM\Index(name="materialTypeID", columns={"materialTypeID"})})
 * @ORM\Entity
 */
class Invtypematerials
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
     * @ORM\Column(name="quantity", type="integer", nullable=false)
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
     * @return Invtypematerials
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
     * @return Invtypematerials
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
     * Set materialtypeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $materialtypeid
     *
     * @return Invtypematerials
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
