<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dgmtypeattributes
 *
 * @ORM\Table(name="dgmTypeAttributes", indexes={@ORM\Index(name="ix_dgmTypeAttributes_attributeID", columns={"attributeID"}), @ORM\Index(name="typeID", columns={"typeID"})})
 * @ORM\Entity
 */
class Dgmtypeattributes
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
     * @ORM\Column(name="valueInt", type="integer", nullable=true)
     */
    private $valueint;

    /**
     * @var float
     *
     * @ORM\Column(name="valueFloat", type="float", precision=10, scale=0, nullable=true)
     */
    private $valuefloat;

    /**
     * @var \Vibs\EvesymBundle\Entity\Dgmattributetypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Dgmattributetypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="attributeID", referencedColumnName="attributeID")
     * })
     */
    private $attributeid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="typeID", referencedColumnName="typeID")
     * })
     */
    private $typeid;


}

