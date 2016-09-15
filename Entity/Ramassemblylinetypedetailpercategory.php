<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ramassemblylinetypedetailpercategory
 *
 * @ORM\Table(name="ramAssemblyLineTypeDetailPerCategory", indexes={@ORM\Index(name="assemblyLineTypeID", columns={"assemblyLineTypeID"}), @ORM\Index(name="categoryID", columns={"categoryID"})})
 * @ORM\Entity
 */
class Ramassemblylinetypedetailpercategory
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
     * @var float
     *
     * @ORM\Column(name="timeMultiplier", type="float", precision=10, scale=0, nullable=true)
     */
    private $timemultiplier;

    /**
     * @var float
     *
     * @ORM\Column(name="materialMultiplier", type="float", precision=10, scale=0, nullable=true)
     */
    private $materialmultiplier;

    /**
     * @var float
     *
     * @ORM\Column(name="costMultiplier", type="float", precision=10, scale=0, nullable=true)
     */
    private $costmultiplier;

    /**
     * @var \Vibs\EvesymBundle\Entity\Ramassemblylinetypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Ramassemblylinetypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="assemblyLineTypeID", referencedColumnName="assemblyLineTypeID")
     * })
     */
    private $assemblylinetypeid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invcategories
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invcategories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoryID", referencedColumnName="categoryID")
     * })
     */
    private $categoryid;


}

