<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dgmexpressions
 *
 * @ORM\Table(name="dgmExpressions", indexes={@ORM\Index(name="expressionTypeID", columns={"expressionTypeID"}), @ORM\Index(name="expressionGroupID", columns={"expressionGroupID"}), @ORM\Index(name="expressionAttributeID", columns={"expressionAttributeID"})})
 * @ORM\Entity
 */
class Dgmexpressions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="expressionID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $expressionid;

    /**
     * @var integer
     *
     * @ORM\Column(name="operandID", type="integer", nullable=true)
     */
    private $operandid;

    /**
     * @var integer
     *
     * @ORM\Column(name="arg1", type="integer", nullable=true)
     */
    private $arg1;

    /**
     * @var integer
     *
     * @ORM\Column(name="arg2", type="integer", nullable=true)
     */
    private $arg2;

    /**
     * @var string
     *
     * @ORM\Column(name="expressionValue", type="string", length=100, nullable=true)
     */
    private $expressionvalue;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="expressionName", type="string", length=500, nullable=true)
     */
    private $expressionname;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="expressionTypeID", referencedColumnName="typeID")
     * })
     */
    private $expressiontypeid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invgroups
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invgroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="expressionGroupID", referencedColumnName="groupID")
     * })
     */
    private $expressiongroupid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Dgmattributetypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Dgmattributetypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="expressionAttributeID", referencedColumnName="attributeID")
     * })
     */
    private $expressionattributeid;


}

