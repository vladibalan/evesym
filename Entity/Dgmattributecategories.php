<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dgmattributecategories
 *
 * @ORM\Table(name="dgmAttributeCategories")
 * @ORM\Entity
 */
class Dgmattributecategories
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
     * @ORM\Column(name="categoryName", type="string", length=50, nullable=true)
     */
    private $categoryname;

    /**
     * @var string
     *
     * @ORM\Column(name="categoryDescription", type="string", length=200, nullable=true)
     */
    private $categorydescription;



    /**
     * Get categoryid
     *
     * @return integer
     */
    public function getCategoryid()
    {
        return $this->categoryid;
    }

    /**
     * Set categoryname
     *
     * @param string $categoryname
     *
     * @return Dgmattributecategories
     */
    public function setCategoryname($categoryname)
    {
        $this->categoryname = $categoryname;

        return $this;
    }

    /**
     * Get categoryname
     *
     * @return string
     */
    public function getCategoryname()
    {
        return $this->categoryname;
    }

    /**
     * Set categorydescription
     *
     * @param string $categorydescription
     *
     * @return Dgmattributecategories
     */
    public function setCategorydescription($categorydescription)
    {
        $this->categorydescription = $categorydescription;

        return $this;
    }

    /**
     * Get categorydescription
     *
     * @return string
     */
    public function getCategorydescription()
    {
        return $this->categorydescription;
    }
}
