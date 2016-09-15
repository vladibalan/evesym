<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invitems
 *
 * @ORM\Table(name="invItems", indexes={@ORM\Index(name="ix_invItems_locationID", columns={"locationID"}), @ORM\Index(name="items_IX_OwnerLocation", columns={"ownerID", "locationID"}), @ORM\Index(name="typeID", columns={"typeID"}), @ORM\Index(name="flagID", columns={"flagID"}), @ORM\Index(name="IDX_4A898CC9DB30DDED", columns={"ownerID"})})
 * @ORM\Entity
 */
class Invitems
{
    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invnames
     *
     * @ORM\OneToOne(targetEntity="Vibs\EvesymBundle\Entity\Invnames")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="itemID", referencedColumnName="itemID", unique=true)
     * })
     */
    private $itemid;

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
     * @var \Vibs\EvesymBundle\Entity\Invflags
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invflags")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="flagID", referencedColumnName="flagID")
     * })
     */
    private $flagid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invnames
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invnames")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="locationID", referencedColumnName="itemID")
     * })
     */
    private $locationid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invnames
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invnames")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ownerID", referencedColumnName="itemID")
     * })
     */
    private $ownerid;


}

