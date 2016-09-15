<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skinlicense
 *
 * @ORM\Table(name="skinLicense", indexes={@ORM\Index(name="skinID", columns={"skinID"})})
 * @ORM\Entity
 */
class Skinlicense
{
    /**
     * @var integer
     *
     * @ORM\Column(name="duration", type="integer", nullable=true)
     */
    private $duration;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\OneToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="licenseTypeID", referencedColumnName="typeID", unique=true)
     * })
     */
    private $licensetypeid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Skins
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Skins")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="skinID", referencedColumnName="skinID")
     * })
     */
    private $skinid;


}

