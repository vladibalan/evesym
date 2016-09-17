<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chrattributes
 *
 * @ORM\Table(name="chrAttributes", indexes={@ORM\Index(name="iconID", columns={"iconID"})})
 * @ORM\Entity
 */
class Chrattributes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="attributeID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $attributeid;

    /**
     * @var string
     *
     * @ORM\Column(name="attributeName", type="string", length=100, nullable=true)
     */
    private $attributename;

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
     * @var string
     *
     * @ORM\Column(name="notes", type="string", length=500, nullable=true)
     */
    private $notes;

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
     * Get attributeid
     *
     * @return integer
     */
    public function getAttributeid()
    {
        return $this->attributeid;
    }

    /**
     * Set attributename
     *
     * @param string $attributename
     *
     * @return Chrattributes
     */
    public function setAttributename($attributename)
    {
        $this->attributename = $attributename;

        return $this;
    }

    /**
     * Get attributename
     *
     * @return string
     */
    public function getAttributename()
    {
        return $this->attributename;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Chrattributes
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
     * @return Chrattributes
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
     * Set notes
     *
     * @param string $notes
     *
     * @return Chrattributes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set iconid
     *
     * @param \Vibs\EvesymBundle\Entity\Eveicons $iconid
     *
     * @return Chrattributes
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
