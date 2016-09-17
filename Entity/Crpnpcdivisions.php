<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Crpnpcdivisions
 *
 * @ORM\Table(name="crpNPCDivisions")
 * @ORM\Entity
 */
class Crpnpcdivisions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="divisionID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $divisionid;

    /**
     * @var string
     *
     * @ORM\Column(name="divisionName", type="string", length=100, nullable=true)
     */
    private $divisionname;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="leaderType", type="string", length=100, nullable=true)
     */
    private $leadertype;



    /**
     * Get divisionid
     *
     * @return integer
     */
    public function getDivisionid()
    {
        return $this->divisionid;
    }

    /**
     * Set divisionname
     *
     * @param string $divisionname
     *
     * @return Crpnpcdivisions
     */
    public function setDivisionname($divisionname)
    {
        $this->divisionname = $divisionname;

        return $this;
    }

    /**
     * Get divisionname
     *
     * @return string
     */
    public function getDivisionname()
    {
        return $this->divisionname;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Crpnpcdivisions
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
     * Set leadertype
     *
     * @param string $leadertype
     *
     * @return Crpnpcdivisions
     */
    public function setLeadertype($leadertype)
    {
        $this->leadertype = $leadertype;

        return $this;
    }

    /**
     * Get leadertype
     *
     * @return string
     */
    public function getLeadertype()
    {
        return $this->leadertype;
    }
}
