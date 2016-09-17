<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skins
 *
 * @ORM\Table(name="skins")
 * @ORM\Entity
 */
class Skins
{
    /**
     * @var integer
     *
     * @ORM\Column(name="skinID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $skinid;

    /**
     * @var string
     *
     * @ORM\Column(name="internalName", type="string", length=70, nullable=true)
     */
    private $internalname;

    /**
     * @var integer
     *
     * @ORM\Column(name="skinMaterialID", type="integer", nullable=true)
     */
    private $skinmaterialid;



    /**
     * Get skinid
     *
     * @return integer
     */
    public function getSkinid()
    {
        return $this->skinid;
    }

    /**
     * Set internalname
     *
     * @param string $internalname
     *
     * @return Skins
     */
    public function setInternalname($internalname)
    {
        $this->internalname = $internalname;

        return $this;
    }

    /**
     * Get internalname
     *
     * @return string
     */
    public function getInternalname()
    {
        return $this->internalname;
    }

    /**
     * Set skinmaterialid
     *
     * @param integer $skinmaterialid
     *
     * @return Skins
     */
    public function setSkinmaterialid($skinmaterialid)
    {
        $this->skinmaterialid = $skinmaterialid;

        return $this;
    }

    /**
     * Get skinmaterialid
     *
     * @return integer
     */
    public function getSkinmaterialid()
    {
        return $this->skinmaterialid;
    }
}
