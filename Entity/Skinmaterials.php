<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skinmaterials
 *
 * @ORM\Table(name="skinMaterials")
 * @ORM\Entity
 */
class Skinmaterials
{
    /**
     * @var integer
     *
     * @ORM\Column(name="skinMaterialID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $skinmaterialid;

    /**
     * @var integer
     *
     * @ORM\Column(name="displayNameID", type="integer", nullable=true)
     */
    private $displaynameid;

    /**
     * @var integer
     *
     * @ORM\Column(name="materialSetID", type="integer", nullable=true)
     */
    private $materialsetid;



    /**
     * Get skinmaterialid
     *
     * @return integer
     */
    public function getSkinmaterialid()
    {
        return $this->skinmaterialid;
    }

    /**
     * Set displaynameid
     *
     * @param integer $displaynameid
     *
     * @return Skinmaterials
     */
    public function setDisplaynameid($displaynameid)
    {
        $this->displaynameid = $displaynameid;

        return $this;
    }

    /**
     * Get displaynameid
     *
     * @return integer
     */
    public function getDisplaynameid()
    {
        return $this->displaynameid;
    }

    /**
     * Set materialsetid
     *
     * @param integer $materialsetid
     *
     * @return Skinmaterials
     */
    public function setMaterialsetid($materialsetid)
    {
        $this->materialsetid = $materialsetid;

        return $this;
    }

    /**
     * Get materialsetid
     *
     * @return integer
     */
    public function getMaterialsetid()
    {
        return $this->materialsetid;
    }
}
