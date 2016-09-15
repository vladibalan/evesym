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


}

