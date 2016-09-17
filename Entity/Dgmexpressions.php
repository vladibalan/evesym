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



    /**
     * Get expressionid
     *
     * @return integer
     */
    public function getExpressionid()
    {
        return $this->expressionid;
    }

    /**
     * Set operandid
     *
     * @param integer $operandid
     *
     * @return Dgmexpressions
     */
    public function setOperandid($operandid)
    {
        $this->operandid = $operandid;

        return $this;
    }

    /**
     * Get operandid
     *
     * @return integer
     */
    public function getOperandid()
    {
        return $this->operandid;
    }

    /**
     * Set arg1
     *
     * @param integer $arg1
     *
     * @return Dgmexpressions
     */
    public function setArg1($arg1)
    {
        $this->arg1 = $arg1;

        return $this;
    }

    /**
     * Get arg1
     *
     * @return integer
     */
    public function getArg1()
    {
        return $this->arg1;
    }

    /**
     * Set arg2
     *
     * @param integer $arg2
     *
     * @return Dgmexpressions
     */
    public function setArg2($arg2)
    {
        $this->arg2 = $arg2;

        return $this;
    }

    /**
     * Get arg2
     *
     * @return integer
     */
    public function getArg2()
    {
        return $this->arg2;
    }

    /**
     * Set expressionvalue
     *
     * @param string $expressionvalue
     *
     * @return Dgmexpressions
     */
    public function setExpressionvalue($expressionvalue)
    {
        $this->expressionvalue = $expressionvalue;

        return $this;
    }

    /**
     * Get expressionvalue
     *
     * @return string
     */
    public function getExpressionvalue()
    {
        return $this->expressionvalue;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Dgmexpressions
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
     * Set expressionname
     *
     * @param string $expressionname
     *
     * @return Dgmexpressions
     */
    public function setExpressionname($expressionname)
    {
        $this->expressionname = $expressionname;

        return $this;
    }

    /**
     * Get expressionname
     *
     * @return string
     */
    public function getExpressionname()
    {
        return $this->expressionname;
    }

    /**
     * Set expressiontypeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $expressiontypeid
     *
     * @return Dgmexpressions
     */
    public function setExpressiontypeid(\Vibs\EvesymBundle\Entity\Invtypes $expressiontypeid = null)
    {
        $this->expressiontypeid = $expressiontypeid;

        return $this;
    }

    /**
     * Get expressiontypeid
     *
     * @return \Vibs\EvesymBundle\Entity\Invtypes
     */
    public function getExpressiontypeid()
    {
        return $this->expressiontypeid;
    }

    /**
     * Set expressiongroupid
     *
     * @param \Vibs\EvesymBundle\Entity\Invgroups $expressiongroupid
     *
     * @return Dgmexpressions
     */
    public function setExpressiongroupid(\Vibs\EvesymBundle\Entity\Invgroups $expressiongroupid = null)
    {
        $this->expressiongroupid = $expressiongroupid;

        return $this;
    }

    /**
     * Get expressiongroupid
     *
     * @return \Vibs\EvesymBundle\Entity\Invgroups
     */
    public function getExpressiongroupid()
    {
        return $this->expressiongroupid;
    }

    /**
     * Set expressionattributeid
     *
     * @param \Vibs\EvesymBundle\Entity\Dgmattributetypes $expressionattributeid
     *
     * @return Dgmexpressions
     */
    public function setExpressionattributeid(\Vibs\EvesymBundle\Entity\Dgmattributetypes $expressionattributeid = null)
    {
        $this->expressionattributeid = $expressionattributeid;

        return $this;
    }

    /**
     * Get expressionattributeid
     *
     * @return \Vibs\EvesymBundle\Entity\Dgmattributetypes
     */
    public function getExpressionattributeid()
    {
        return $this->expressionattributeid;
    }
}
