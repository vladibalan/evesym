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


}

