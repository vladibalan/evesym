<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Certskills
 *
 * @ORM\Table(name="certSkills", indexes={@ORM\Index(name="ix_certSkills_skillID", columns={"skillID"}), @ORM\Index(name="certID", columns={"certID"})})
 * @ORM\Entity
 */
class Certskills
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
     * @ORM\Column(name="certLevelInt", type="integer", nullable=true)
     */
    private $certlevelint;

    /**
     * @var integer
     *
     * @ORM\Column(name="skillLevel", type="integer", nullable=true)
     */
    private $skilllevel;

    /**
     * @var string
     *
     * @ORM\Column(name="certLevelText", type="string", length=8, nullable=true)
     */
    private $certleveltext;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="skillID", referencedColumnName="typeID")
     * })
     */
    private $skillid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Certcerts
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Certcerts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="certID", referencedColumnName="certID")
     * })
     */
    private $certid;


}

