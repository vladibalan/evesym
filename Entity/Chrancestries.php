<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chrancestries
 *
 * @ORM\Table(name="chrAncestries", indexes={@ORM\Index(name="bloodlineID", columns={"bloodlineID"}), @ORM\Index(name="iconID", columns={"iconID"})})
 * @ORM\Entity
 */
class Chrancestries
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ancestryID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ancestryid;

    /**
     * @var string
     *
     * @ORM\Column(name="ancestryName", type="string", length=100, nullable=true)
     */
    private $ancestryname;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="perception", type="integer", nullable=true)
     */
    private $perception;

    /**
     * @var integer
     *
     * @ORM\Column(name="willpower", type="integer", nullable=true)
     */
    private $willpower;

    /**
     * @var integer
     *
     * @ORM\Column(name="charisma", type="integer", nullable=true)
     */
    private $charisma;

    /**
     * @var integer
     *
     * @ORM\Column(name="memory", type="integer", nullable=true)
     */
    private $memory;

    /**
     * @var integer
     *
     * @ORM\Column(name="intelligence", type="integer", nullable=true)
     */
    private $intelligence;

    /**
     * @var string
     *
     * @ORM\Column(name="shortDescription", type="string", length=500, nullable=true)
     */
    private $shortdescription;

    /**
     * @var \Vibs\EvesymBundle\Entity\Chrbloodlines
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Chrbloodlines")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bloodlineID", referencedColumnName="bloodlineID")
     * })
     */
    private $bloodlineid;

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
     * Get ancestryid
     *
     * @return integer
     */
    public function getAncestryid()
    {
        return $this->ancestryid;
    }

    /**
     * Set ancestryname
     *
     * @param string $ancestryname
     *
     * @return Chrancestries
     */
    public function setAncestryname($ancestryname)
    {
        $this->ancestryname = $ancestryname;

        return $this;
    }

    /**
     * Get ancestryname
     *
     * @return string
     */
    public function getAncestryname()
    {
        return $this->ancestryname;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Chrancestries
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
     * Set perception
     *
     * @param integer $perception
     *
     * @return Chrancestries
     */
    public function setPerception($perception)
    {
        $this->perception = $perception;

        return $this;
    }

    /**
     * Get perception
     *
     * @return integer
     */
    public function getPerception()
    {
        return $this->perception;
    }

    /**
     * Set willpower
     *
     * @param integer $willpower
     *
     * @return Chrancestries
     */
    public function setWillpower($willpower)
    {
        $this->willpower = $willpower;

        return $this;
    }

    /**
     * Get willpower
     *
     * @return integer
     */
    public function getWillpower()
    {
        return $this->willpower;
    }

    /**
     * Set charisma
     *
     * @param integer $charisma
     *
     * @return Chrancestries
     */
    public function setCharisma($charisma)
    {
        $this->charisma = $charisma;

        return $this;
    }

    /**
     * Get charisma
     *
     * @return integer
     */
    public function getCharisma()
    {
        return $this->charisma;
    }

    /**
     * Set memory
     *
     * @param integer $memory
     *
     * @return Chrancestries
     */
    public function setMemory($memory)
    {
        $this->memory = $memory;

        return $this;
    }

    /**
     * Get memory
     *
     * @return integer
     */
    public function getMemory()
    {
        return $this->memory;
    }

    /**
     * Set intelligence
     *
     * @param integer $intelligence
     *
     * @return Chrancestries
     */
    public function setIntelligence($intelligence)
    {
        $this->intelligence = $intelligence;

        return $this;
    }

    /**
     * Get intelligence
     *
     * @return integer
     */
    public function getIntelligence()
    {
        return $this->intelligence;
    }

    /**
     * Set shortdescription
     *
     * @param string $shortdescription
     *
     * @return Chrancestries
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
     * Set bloodlineid
     *
     * @param \Vibs\EvesymBundle\Entity\Chrbloodlines $bloodlineid
     *
     * @return Chrancestries
     */
    public function setBloodlineid(\Vibs\EvesymBundle\Entity\Chrbloodlines $bloodlineid = null)
    {
        $this->bloodlineid = $bloodlineid;

        return $this;
    }

    /**
     * Get bloodlineid
     *
     * @return \Vibs\EvesymBundle\Entity\Chrbloodlines
     */
    public function getBloodlineid()
    {
        return $this->bloodlineid;
    }

    /**
     * Set iconid
     *
     * @param \Vibs\EvesymBundle\Entity\Eveicons $iconid
     *
     * @return Chrancestries
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
