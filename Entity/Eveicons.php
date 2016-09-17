<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eveicons
 *
 * @ORM\Table(name="eveIcons")
 * @ORM\Entity
 */
class Eveicons
{
    /**
     * @var integer
     *
     * @ORM\Column(name="iconID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iconid;

    /**
     * @var string
     *
     * @ORM\Column(name="iconFile", type="string", length=500, nullable=true)
     */
    private $iconfile;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;



    /**
     * Get iconid
     *
     * @return integer
     */
    public function getIconid()
    {
        return $this->iconid;
    }

    /**
     * Set iconfile
     *
     * @param string $iconfile
     *
     * @return Eveicons
     */
    public function setIconfile($iconfile)
    {
        $this->iconfile = $iconfile;

        return $this;
    }

    /**
     * Get iconfile
     *
     * @return string
     */
    public function getIconfile()
    {
        return $this->iconfile;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Eveicons
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
}
