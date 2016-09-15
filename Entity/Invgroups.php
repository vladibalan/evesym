<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invgroups
 *
 * @ORM\Table(name="invGroups", indexes={@ORM\Index(name="ix_invGroups_categoryID", columns={"categoryID"}), @ORM\Index(name="iconID", columns={"iconID"})})
 * @ORM\Entity
 */
class Invgroups
{
    /**
     * @var integer
     *
     * @ORM\Column(name="groupID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $groupid;

    /**
     * @var string
     *
     * @ORM\Column(name="groupName", type="string", length=100, nullable=true)
     */
    private $groupname;

    /**
     * @var boolean
     *
     * @ORM\Column(name="useBasePrice", type="boolean", nullable=true)
     */
    private $usebaseprice;

    /**
     * @var boolean
     *
     * @ORM\Column(name="anchored", type="boolean", nullable=true)
     */
    private $anchored;

    /**
     * @var boolean
     *
     * @ORM\Column(name="anchorable", type="boolean", nullable=true)
     */
    private $anchorable;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fittableNonSingleton", type="boolean", nullable=true)
     */
    private $fittablenonsingleton;

    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean", nullable=true)
     */
    private $published;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invcategories
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invcategories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoryID", referencedColumnName="categoryID")
     * })
     */
    private $categoryid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Eveicons
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Eveicons")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iconID", referencedColumnName="iconID")
     * })
     */
    private $iconid;


}

