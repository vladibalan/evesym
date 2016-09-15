<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invmarketgroups
 *
 * @ORM\Table(name="invMarketGroups", indexes={@ORM\Index(name="parentGroupID", columns={"parentGroupID"}), @ORM\Index(name="iconID", columns={"iconID"})})
 * @ORM\Entity
 */
class Invmarketgroups
{
    /**
     * @var integer
     *
     * @ORM\Column(name="marketGroupID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $marketgroupid;

    /**
     * @var string
     *
     * @ORM\Column(name="marketGroupName", type="string", length=100, nullable=true)
     */
    private $marketgroupname;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=3000, nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hasTypes", type="boolean", nullable=true)
     */
    private $hastypes;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invmarketgroups
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invmarketgroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parentGroupID", referencedColumnName="marketGroupID")
     * })
     */
    private $parentgroupid;

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

