<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invcategories
 *
 * @ORM\Table(name="invCategories", indexes={@ORM\Index(name="iconID", columns={"iconID"})})
 * @ORM\Entity
 */
class Invcategories
{
    /**
     * @var integer
     *
     * @ORM\Column(name="categoryID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $categoryid;

    /**
     * @var string
     *
     * @ORM\Column(name="categoryName", type="string", length=100, nullable=true)
     */
    private $categoryname;

    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean", nullable=true)
     */
    private $published;

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

