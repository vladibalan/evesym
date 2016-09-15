<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Industryactivityproducts
 *
 * @ORM\Table(name="industryActivityProducts", indexes={@ORM\Index(name="ix_industryActivityProducts_typeID", columns={"typeID"}), @ORM\Index(name="ix_industryActivityProducts_productTypeID", columns={"productTypeID"}), @ORM\Index(name="activityID", columns={"activityID"})})
 * @ORM\Entity
 */
class Industryactivityproducts
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
     *   @ORM\JoinColumn(name="typeID", referencedColumnName="typeID")
     * })
     */
    private $typeid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="productTypeID", referencedColumnName="typeID")
     * })
     */
    private $producttypeid;


}

