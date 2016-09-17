<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chrbloodlines
 *
 * @ORM\Table(name="chrBloodlines", indexes={@ORM\Index(name="raceID", columns={"raceID"}), @ORM\Index(name="shipTypeID", columns={"shipTypeID"}), @ORM\Index(name="corporationID", columns={"corporationID"}), @ORM\Index(name="iconID", columns={"iconID"})})
 * @ORM\Entity
 */
class Chrbloodlines
{
    /**
     * @var integer
     *
     * @ORM\Column(name="bloodlineID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bloodlineid;

    /**
     * @var string
     *
     * @ORM\Column(name="bloodlineName", type="string", length=100, nullable=true)
     */
    private $bloodlinename;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="maleDescription", type="string", length=1000, nullable=true)
     */
    private $maledescription;

    /**
     * @var string
     *
     * @ORM\Column(name="femaleDescription", type="string", length=1000, nullable=true)
     */
    private $femaledescription;

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
     * @var string
     *
     * @ORM\Column(name="shortMaleDescription", type="string", length=500, nullable=true)
     */
    private $shortmaledescription;

    /**
     * @var string
     *
     * @ORM\Column(name="shortFemaleDescription", type="string", length=500, nullable=true)
     */
    private $shortfemaledescription;

    /**
     * @var \Vibs\EvesymBundle\Entity\Chrraces
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Chrraces")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="raceID", referencedColumnName="raceID")
     * })
     */
    private $raceid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Crpnpccorporations
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Crpnpccorporations")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="corporationID", referencedColumnName="corporationID")
     * })
     */
    private $corporationid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="shipTypeID", referencedColumnName="typeID")
     * })
     */
    private $shiptypeid;

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
     * Get bloodlineid
     *
     * @return integer
     */
    public function getBloodlineid()
    {
        return $this->bloodlineid;
    }

    /**
     * Set bloodlinename
     *
     * @param string $bloodlinename
     *
     * @return Chrbloodlines
     */
    public function setBloodlinename($bloodlinename)
    {
        $this->bloodlinename = $bloodlinename;

        return $this;
    }

    /**
     * Get bloodlinename
     *
     * @return string
     */
    public function getBloodlinename()
    {
        return $this->bloodlinename;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Chrbloodlines
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
     * Set maledescription
     *
     * @param string $maledescription
     *
     * @return Chrbloodlines
     */
    public function setMaledescription($maledescription)
    {
        $this->maledescription = $maledescription;

        return $this;
    }

    /**
     * Get maledescription
     *
     * @return string
     */
    public function getMaledescription()
    {
        return $this->maledescription;
    }

    /**
     * Set femaledescription
     *
     * @param string $femaledescription
     *
     * @return Chrbloodlines
     */
    public function setFemaledescription($femaledescription)
    {
        $this->femaledescription = $femaledescription;

        return $this;
    }

    /**
     * Get femaledescription
     *
     * @return string
     */
    public function getFemaledescription()
    {
        return $this->femaledescription;
    }

    /**
     * Set perception
     *
     * @param integer $perception
     *
     * @return Chrbloodlines
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
     * @return Chrbloodlines
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
     * @return Chrbloodlines
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
     * @return Chrbloodlines
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
     * @return Chrbloodlines
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
     * @return Chrbloodlines
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
     * Set shortmaledescription
     *
     * @param string $shortmaledescription
     *
     * @return Chrbloodlines
     */
    public function setShortmaledescription($shortmaledescription)
    {
        $this->shortmaledescription = $shortmaledescription;

        return $this;
    }

    /**
     * Get shortmaledescription
     *
     * @return string
     */
    public function getShortmaledescription()
    {
        return $this->shortmaledescription;
    }

    /**
     * Set shortfemaledescription
     *
     * @param string $shortfemaledescription
     *
     * @return Chrbloodlines
     */
    public function setShortfemaledescription($shortfemaledescription)
    {
        $this->shortfemaledescription = $shortfemaledescription;

        return $this;
    }

    /**
     * Get shortfemaledescription
     *
     * @return string
     */
    public function getShortfemaledescription()
    {
        return $this->shortfemaledescription;
    }

    /**
     * Set raceid
     *
     * @param \Vibs\EvesymBundle\Entity\Chrraces $raceid
     *
     * @return Chrbloodlines
     */
    public function setRaceid(\Vibs\EvesymBundle\Entity\Chrraces $raceid = null)
    {
        $this->raceid = $raceid;

        return $this;
    }

    /**
     * Get raceid
     *
     * @return \Vibs\EvesymBundle\Entity\Chrraces
     */
    public function getRaceid()
    {
        return $this->raceid;
    }

    /**
     * Set corporationid
     *
     * @param \Vibs\EvesymBundle\Entity\Crpnpccorporations $corporationid
     *
     * @return Chrbloodlines
     */
    public function setCorporationid(\Vibs\EvesymBundle\Entity\Crpnpccorporations $corporationid = null)
    {
        $this->corporationid = $corporationid;

        return $this;
    }

    /**
     * Get corporationid
     *
     * @return \Vibs\EvesymBundle\Entity\Crpnpccorporations
     */
    public function getCorporationid()
    {
        return $this->corporationid;
    }

    /**
     * Set shiptypeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $shiptypeid
     *
     * @return Chrbloodlines
     */
    public function setShiptypeid(\Vibs\EvesymBundle\Entity\Invtypes $shiptypeid = null)
    {
        $this->shiptypeid = $shiptypeid;

        return $this;
    }

    /**
     * Get shiptypeid
     *
     * @return \Vibs\EvesymBundle\Entity\Invtypes
     */
    public function getShiptypeid()
    {
        return $this->shiptypeid;
    }

    /**
     * Set iconid
     *
     * @param \Vibs\EvesymBundle\Entity\Eveicons $iconid
     *
     * @return Chrbloodlines
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
