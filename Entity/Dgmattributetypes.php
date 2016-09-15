<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dgmattributetypes
 *
 * @ORM\Table(name="dgmAttributeTypes", indexes={@ORM\Index(name="iconID", columns={"iconID"}), @ORM\Index(name="unitID", columns={"unitID"}), @ORM\Index(name="categoryID", columns={"categoryID"})})
 * @ORM\Entity
 */
class Dgmattributetypes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="attributeID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $attributeid;

    /**
     * @var string
     *
     * @ORM\Column(name="attributeName", type="string", length=100, nullable=true)
     */
    private $attributename;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=true)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="defaultValue", type="float", precision=10, scale=0, nullable=true)
     */
    private $defaultvalue;

    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean", nullable=true)
     */
    private $published;

    /**
     * @var string
     *
     * @ORM\Column(name="displayName", type="string", length=150, nullable=true)
     */
    private $displayname;

    /**
     * @var boolean
     *
     * @ORM\Column(name="stackable", type="boolean", nullable=true)
     */
    private $stackable;

    /**
     * @var boolean
     *
     * @ORM\Column(name="highIsGood", type="boolean", nullable=true)
     */
    private $highisgood;

    /**
     * @var \Vibs\EvesymBundle\Entity\Eveicons
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Eveicons")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iconID", referencedColumnName="iconID")
     * })
     */
    private $iconid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Eveunits
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Eveunits")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="unitID", referencedColumnName="unitID")
     * })
     */
    private $unitid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Dgmattributecategories
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Dgmattributecategories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoryID", referencedColumnName="categoryID")
     * })
     */
    private $categoryid;


}

