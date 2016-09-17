<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Crpnpccorporationdivisions
 *
 * @ORM\Table(name="crpNPCCorporationDivisions", indexes={@ORM\Index(name="corporationID", columns={"corporationID"}), @ORM\Index(name="divisionID", columns={"divisionID"})})
 * @ORM\Entity
 */
class Crpnpccorporationdivisions
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
     * @ORM\Column(name="size", type="integer", nullable=true)
     */
    private $size;

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
     * @var \Vibs\EvesymBundle\Entity\Crpnpcdivisions
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Crpnpcdivisions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="divisionID", referencedColumnName="divisionID")
     * })
     */
    private $divisionid;



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
     * Set size
     *
     * @param integer $size
     *
     * @return Crpnpccorporationdivisions
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return integer
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set corporationid
     *
     * @param \Vibs\EvesymBundle\Entity\Crpnpccorporations $corporationid
     *
     * @return Crpnpccorporationdivisions
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
     * Set divisionid
     *
     * @param \Vibs\EvesymBundle\Entity\Crpnpcdivisions $divisionid
     *
     * @return Crpnpccorporationdivisions
     */
    public function setDivisionid(\Vibs\EvesymBundle\Entity\Crpnpcdivisions $divisionid = null)
    {
        $this->divisionid = $divisionid;

        return $this;
    }

    /**
     * Get divisionid
     *
     * @return \Vibs\EvesymBundle\Entity\Crpnpcdivisions
     */
    public function getDivisionid()
    {
        return $this->divisionid;
    }
}
