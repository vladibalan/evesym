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
     * Set timemultiplier
     *
     * @param float $timemultiplier
     *
     * @return Ramassemblylinetypedetailpercategory
     */
    public function setTimemultiplier($timemultiplier)
    {
        $this->timemultiplier = $timemultiplier;

        return $this;
    }

    /**
     * Get timemultiplier
     *
     * @return float
     */
    public function getTimemultiplier()
    {
        return $this->timemultiplier;
    }

    /**
     * Set materialmultiplier
     *
     * @param float $materialmultiplier
     *
     * @return Ramassemblylinetypedetailpercategory
     */
    public function setMaterialmultiplier($materialmultiplier)
    {
        $this->materialmultiplier = $materialmultiplier;

        return $this;
    }

    /**
     * Get materialmultiplier
     *
     * @return float
     */
    public function getMaterialmultiplier()
    {
        return $this->materialmultiplier;
    }

    /**
     * Set costmultiplier
     *
     * @param float $costmultiplier
     *
     * @return Ramassemblylinetypedetailpercategory
     */
    public function setCostmultiplier($costmultiplier)
    {
        $this->costmultiplier = $costmultiplier;

        return $this;
    }

    /**
     * Get costmultiplier
     *
     * @return float
     */
    public function getCostmultiplier()
    {
        return $this->costmultiplier;
    }

    /**
     * Set assemblylinetypeid
     *
     * @param \Vibs\EvesymBundle\Entity\Ramassemblylinetypes $assemblylinetypeid
     *
     * @return Ramassemblylinetypedetailpercategory
     */
    public function setAssemblylinetypeid(\Vibs\EvesymBundle\Entity\Ramassemblylinetypes $assemblylinetypeid = null)
    {
        $this->assemblylinetypeid = $assemblylinetypeid;

        return $this;
    }

    /**
     * Get assemblylinetypeid
     *
     * @return \Vibs\EvesymBundle\Entity\Ramassemblylinetypes
     */
    public function getAssemblylinetypeid()
    {
        return $this->assemblylinetypeid;
    }

    /**
     * Set categoryid
     *
     * @param \Vibs\EvesymBundle\Entity\Invcategories $categoryid
     *
     * @return Ramassemblylinetypedetailpercategory
     */
    public function setCategoryid(\Vibs\EvesymBundle\Entity\Invcategories $categoryid = null)
    {
        $this->categoryid = $categoryid;

        return $this;
    }

    /**
     * Get categoryid
     *
     * @return \Vibs\EvesymBundle\Entity\Invcategories
     */
    public function getCategoryid()
    {
        return $this->categoryid;
    }
}
