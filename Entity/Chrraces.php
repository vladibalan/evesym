<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chrraces
 *
 * @ORM\Table(name="chrRaces", indexes={@ORM\Index(name="iconID", columns={"iconID"})})
 * @ORM\Entity
 */
class Chrraces
{
    /**
     * @var integer
     *
     * @ORM\Column(name="raceID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $raceid;

    /**
     * @var string
     *
     * @ORM\Column(name="raceName", type="string", length=100, nullable=true)
     */
    private $racename;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="shortDescription", type="string", length=500, nullable=true)
     */
    private $shortdescription;

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
     * Get raceid
     *
     * @return integer
     */
    public function getRaceid()
    {
        return $this->raceid;
    }

    /**
     * Set racename
     *
     * @param string $racename
     *
     * @return Chrraces
     */
    public function setRacename($racename)
    {
        $this->racename = $racename;

        return $this;
    }

    /**
     * Get racename
     *
     * @return string
     */
    public function getRacename()
    {
        return $this->racename;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Chrraces
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
     * Set shortdescription
     *
     * @param string $shortdescription
     *
     * @return Chrraces
     */
    public function setShortdescription($shortdescription)
    {
        $this->shortdescription = $shortdescription;

        return $this;
    }

    /**
     * Get shortdescription
     *
     * @return string
     */
    public function getShortdescription()
    {
        return $this->shortdescription;
    }

    /**
     * Set iconid
     *
     * @param \Vibs\EvesymBundle\Entity\Eveicons $iconid
     *
     * @return Chrraces
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
