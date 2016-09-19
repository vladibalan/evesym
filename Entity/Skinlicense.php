<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skinlicense
 *
 * @ORM\Table(name="skinLicense", indexes={@ORM\Index(name="skinID", columns={"skinID"}), @ORM\Index(name="licenseTypeID", columns={"licenseTypeID"})})
 * @ORM\Entity
 */
class Skinlicense
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
     * @var integer
     *
     * @ORM\Column(name="duration", type="integer", nullable=true)
     */
    private $duration;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="licenseTypeID", referencedColumnName="typeID")
     * })
     */
    private $licensetypeid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Skins
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Skins")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="skinID", referencedColumnName="skinID")
     * })
     */
    private $skinid;



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
     * Set duration
     *
     * @param integer $duration
     *
     * @return Skinlicense
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set licensetypeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $licensetypeid
     *
     * @return Skinlicense
     */
    public function setLicensetypeid(\Vibs\EvesymBundle\Entity\Invtypes $licensetypeid = null)
    {
        $this->licensetypeid = $licensetypeid;

        return $this;
    }

    /**
     * Get licensetypeid
     *
     * @return \Vibs\EvesymBundle\Entity\Invtypes
     */
    public function getLicensetypeid()
    {
        return $this->licensetypeid;
    }

    /**
     * Set skinid
     *
     * @param \Vibs\EvesymBundle\Entity\Skins $skinid
     *
     * @return Skinlicense
     */
    public function setSkinid(\Vibs\EvesymBundle\Entity\Skins $skinid = null)
    {
        $this->skinid = $skinid;

        return $this;
    }

    /**
     * Get skinid
     *
     * @return \Vibs\EvesymBundle\Entity\Skins
     */
    public function getSkinid()
    {
        return $this->skinid;
    }
}
