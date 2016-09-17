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



    /**
     * Get groupid
     *
     * @return integer
     */
    public function getGroupid()
    {
        return $this->groupid;
    }

    /**
     * Set groupname
     *
     * @param string $groupname
     *
     * @return Invgroups
     */
    public function setGroupname($groupname)
    {
        $this->groupname = $groupname;

        return $this;
    }

    /**
     * Get groupname
     *
     * @return string
     */
    public function getGroupname()
    {
        return $this->groupname;
    }

    /**
     * Set usebaseprice
     *
     * @param boolean $usebaseprice
     *
     * @return Invgroups
     */
    public function setUsebaseprice($usebaseprice)
    {
        $this->usebaseprice = $usebaseprice;

        return $this;
    }

    /**
     * Get usebaseprice
     *
     * @return boolean
     */
    public function getUsebaseprice()
    {
        return $this->usebaseprice;
    }

    /**
     * Set anchored
     *
     * @param boolean $anchored
     *
     * @return Invgroups
     */
    public function setAnchored($anchored)
    {
        $this->anchored = $anchored;

        return $this;
    }

    /**
     * Get anchored
     *
     * @return boolean
     */
    public function getAnchored()
    {
        return $this->anchored;
    }

    /**
     * Set anchorable
     *
     * @param boolean $anchorable
     *
     * @return Invgroups
     */
    public function setAnchorable($anchorable)
    {
        $this->anchorable = $anchorable;

        return $this;
    }

    /**
     * Get anchorable
     *
     * @return boolean
     */
    public function getAnchorable()
    {
        return $this->anchorable;
    }

    /**
     * Set fittablenonsingleton
     *
     * @param boolean $fittablenonsingleton
     *
     * @return Invgroups
     */
    public function setFittablenonsingleton($fittablenonsingleton)
    {
        $this->fittablenonsingleton = $fittablenonsingleton;

        return $this;
    }

    /**
     * Get fittablenonsingleton
     *
     * @return boolean
     */
    public function getFittablenonsingleton()
    {
        return $this->fittablenonsingleton;
    }

    /**
     * Set published
     *
     * @param boolean $published
     *
     * @return Invgroups
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
     * Set categoryid
     *
     * @param \Vibs\EvesymBundle\Entity\Invcategories $categoryid
     *
     * @return Invgroups
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

    /**
     * Set iconid
     *
     * @param \Vibs\EvesymBundle\Entity\Eveicons $iconid
     *
     * @return Invgroups
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
}
