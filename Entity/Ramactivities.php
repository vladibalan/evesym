<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ramactivities
 *
 * @ORM\Table(name="ramActivities")
 * @ORM\Entity
 */
class Ramactivities
{
    /**
     * @var integer
     *
     * @ORM\Column(name="activityID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $activityid;

    /**
     * @var string
     *
     * @ORM\Column(name="activityName", type="string", length=100, nullable=true)
     */
    private $activityname;

    /**
     * @var string
     *
     * @ORM\Column(name="iconNo", type="string", length=5, nullable=true)
     */
    private $iconno;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean", nullable=true)
     */
    private $published;



    /**
     * Get activityid
     *
     * @return integer
     */
    public function getActivityid()
    {
        return $this->activityid;
    }

    /**
     * Set activityname
     *
     * @param string $activityname
     *
     * @return Ramactivities
     */
    public function setActivityname($activityname)
    {
        $this->activityname = $activityname;

        return $this;
    }

    /**
     * Get activityname
     *
     * @return string
     */
    public function getActivityname()
    {
        return $this->activityname;
    }

    /**
     * Set iconno
     *
     * @param string $iconno
     *
     * @return Ramactivities
     */
    public function setIconno($iconno)
    {
        $this->iconno = $iconno;

        return $this;
    }

    /**
     * Get iconno
     *
     * @return string
     */
    public function getIconno()
    {
        return $this->iconno;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Ramactivities
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
     * Set published
     *
     * @param boolean $published
     *
     * @return Ramactivities
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean
     */
    public function getPublished()
    {
        return $this->published;
    }
}
