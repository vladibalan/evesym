<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eveunits
 *
 * @ORM\Table(name="eveUnits")
 * @ORM\Entity
 */
class Eveunits
{
    /**
     * @var integer
     *
     * @ORM\Column(name="unitID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $unitid;

    /**
     * @var string
     *
     * @ORM\Column(name="unitName", type="string", length=100, nullable=true)
     */
    private $unitname;

    /**
     * @var string
     *
     * @ORM\Column(name="displayName", type="string", length=50, nullable=true)
     */
    private $displayname;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=true)
     */
    private $description;



    /**
     * Get unitid
     *
     * @return integer
     */
    public function getUnitid()
    {
        return $this->unitid;
    }

    /**
     * Set unitname
     *
     * @param string $unitname
     *
     * @return Eveunits
     */
    public function setUnitname($unitname)
    {
        $this->unitname = $unitname;

        return $this;
    }

    /**
     * Get unitname
     *
     * @return string
     */
    public function getUnitname()
    {
        return $this->unitname;
    }

    /**
     * Set displayname
     *
     * @param string $displayname
     *
     * @return Eveunits
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
     * Set description
     *
     * @param string $description
     *
     * @return Eveunits
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
