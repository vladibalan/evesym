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



    /**
     * Get attributeid
     *
     * @return integer
     */
    public function getAttributeid()
    {
        return $this->attributeid;
    }

    /**
     * Set attributename
     *
     * @param string $attributename
     *
     * @return Dgmattributetypes
     */
    public function setAttributename($attributename)
    {
        $this->attributename = $attributename;

        return $this;
    }

    /**
     * Get attributename
     *
     * @return string
     */
    public function getAttributename()
    {
        return $this->attributename;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Dgmattributetypes
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set defaultvalue
     *
     * @param float $defaultvalue
     *
     * @return Dgmattributetypes
     */
    public function setDefaultvalue($defaultvalue)
    {
        $this->defaultvalue = $defaultvalue;

        return $this;
    }

    /**
     * Get defaultvalue
     *
     * @return float
     */
    public function getDefaultvalue()
    {
        return $this->defaultvalue;
    }

    /**
     * Set published
     *
     * @param boolean $published
     *
     * @return Dgmattributetypes
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set displayname
     *
     * @param string $displayname
     *
     * @return Dgmattributetypes
     */
    public function setDisplayname($displayname)
    {
        $this->displayname = $displayname;

        return $this;
    }

    /**
     * Get displayname
     *
     * @return string
     */
    public function getDisplayname()
    {
        return $this->displayname;
    }

    /**
     * Set stackable
     *
     * @param boolean $stackable
     *
     * @return Dgmattributetypes
     */
    public function setStackable($stackable)
    {
        $this->stackable = $stackable;

        return $this;
    }

    /**
     * Get stackable
     *
     * @return boolean
     */
    public function getStackable()
    {
        return $this->stackable;
    }

    /**
     * Set highisgood
     *
     * @param boolean $highisgood
     *
     * @return Dgmattributetypes
     */
    public function setHighisgood($highisgood)
    {
        $this->highisgood = $highisgood;

        return $this;
    }

    /**
     * Get highisgood
     *
     * @return boolean
     */
    public function getHighisgood()
    {
        return $this->highisgood;
    }

    /**
     * Set iconid
     *
     * @param \Vibs\EvesymBundle\Entity\Eveicons $iconid
     *
     * @return Dgmattributetypes
     */
    public function setIconid(\Vibs\EvesymBundle\Entity\Eveicons $iconid = null)
    {
        $this->iconid = $iconid;

        return $this;
    }

    /**
     * Get iconid
     *
     * @return \Vibs\EvesymBundle\Entity\Eveicons
     */
    public function getIconid()
    {
        return $this->iconid;
    }

    /**
     * Set unitid
     *
     * @param \Vibs\EvesymBundle\Entity\Eveunits $unitid
     *
     * @return Dgmattributetypes
     */
    public function setUnitid(\Vibs\EvesymBundle\Entity\Eveunits $unitid = null)
    {
        $this->unitid = $unitid;

        return $this;
    }

    /**
     * Get unitid
     *
     * @return \Vibs\EvesymBundle\Entity\Eveunits
     */
    public function getUnitid()
    {
        return $this->unitid;
    }

    /**
     * Set categoryid
     *
     * @param \Vibs\EvesymBundle\Entity\Dgmattributecategories $categoryid
     *
     * @return Dgmattributetypes
     */
    public function setCategoryid(\Vibs\EvesymBundle\Entity\Dgmattributecategories $categoryid = null)
    {
        $this->categoryid = $categoryid;

        return $this;
    }

    /**
     * Get categoryid
     *
     * @return \Vibs\EvesymBundle\Entity\Dgmattributecategories
     */
    public function getCategoryid()
    {
        return $this->categoryid;
    }
}
