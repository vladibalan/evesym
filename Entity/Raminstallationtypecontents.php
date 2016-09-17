<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Raminstallationtypecontents
 *
 * @ORM\Table(name="ramInstallationTypeContents", indexes={@ORM\Index(name="installationTypeID", columns={"installationTypeID"}), @ORM\Index(name="assemblyLineTypeID", columns={"assemblyLineTypeID"})})
 * @ORM\Entity
 */
class Raminstallationtypecontents
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
     * @ORM\Column(name="quantity", type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @var \Vibs\EvesymBundle\Entity\Ramassemblylinetypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Ramassemblylinetypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="assemblyLineTypeID", referencedColumnName="assemblyLineTypeID")
     * })
     */
    private $assemblylinetypeid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="installationTypeID", referencedColumnName="typeID")
     * })
     */
    private $installationtypeid;



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
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Raminstallationtypecontents
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set assemblylinetypeid
     *
     * @param \Vibs\EvesymBundle\Entity\Ramassemblylinetypes $assemblylinetypeid
     *
     * @return Raminstallationtypecontents
     */
    public function setAssemblylinetypeid(\Vibs\EvesymBundle\Entity\Ramassemblylinetypes $assemblylinetypeid = null)
    {
        $this->assemblylinetypeid = $assemblylinetypeid;

        return $this;
    }

    /**
     * Get assemblylinetypeid
     *
     * @return \Vibs\EvesymBundle\Entity\Ramassemblylinetypes
     */
    public function getAssemblylinetypeid()
    {
        return $this->assemblylinetypeid;
    }

    /**
     * Set installationtypeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $installationtypeid
     *
     * @return Raminstallationtypecontents
     */
    public function setInstallationtypeid(\Vibs\EvesymBundle\Entity\Invtypes $installationtypeid = null)
    {
        $this->installationtypeid = $installationtypeid;

        return $this;
    }

    /**
     * Get installationtypeid
     *
     * @return \Vibs\EvesymBundle\Entity\Invtypes
     */
    public function getInstallationtypeid()
    {
        return $this->installationtypeid;
    }
}
