<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invflags
 *
 * @ORM\Table(name="invFlags")
 * @ORM\Entity
 */
class Invflags
{
    /**
     * @var integer
     *
     * @ORM\Column(name="flagID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $flagid;

    /**
     * @var string
     *
     * @ORM\Column(name="flagName", type="string", length=200, nullable=true)
     */
    private $flagname;

    /**
     * @var string
     *
     * @ORM\Column(name="flagText", type="string", length=100, nullable=true)
     */
    private $flagtext;

    /**
     * @var integer
     *
     * @ORM\Column(name="orderID", type="integer", nullable=true)
     */
    private $orderid;



    /**
     * Get flagid
     *
     * @return integer
     */
    public function getFlagid()
    {
        return $this->flagid;
    }

    /**
     * Set flagname
     *
     * @param string $flagname
     *
     * @return Invflags
     */
    public function setFlagname($flagname)
    {
        $this->flagname = $flagname;

        return $this;
    }

    /**
     * Get flagname
     *
     * @return string
     */
    public function getFlagname()
    {
        return $this->flagname;
    }

    /**
     * Set flagtext
     *
     * @param string $flagtext
     *
     * @return Invflags
     */
    public function setFlagtext($flagtext)
    {
        $this->flagtext = $flagtext;

        return $this;
    }

    /**
     * Get flagtext
     *
     * @return string
     */
    public function getFlagtext()
    {
        return $this->flagtext;
    }

    /**
     * Set orderid
     *
     * @param integer $orderid
     *
     * @return Invflags
     */
    public function setOrderid($orderid)
    {
        $this->orderid = $orderid;

        return $this;
    }

    /**
     * Get orderid
     *
     * @return integer
     */
    public function getOrderid()
    {
        return $this->orderid;
    }
}
