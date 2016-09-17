<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Crpactivities
 *
 * @ORM\Table(name="crpActivities")
 * @ORM\Entity
 */
class Crpactivities
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
     * @ORM\Column(name="description", type="string", length=1000, nullable=true)
     */
    private $description;



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
     * @return Crpactivities
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
     * Set description
     *
     * @param string $description
     *
     * @return Crpactivities
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
