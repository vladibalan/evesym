<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Certmasteries
 *
 * @ORM\Table(name="certMasteries", indexes={@ORM\Index(name="typeID", columns={"typeID"}), @ORM\Index(name="certID", columns={"certID"})})
 * @ORM\Entity
 */
class Certmasteries
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
     * @ORM\Column(name="masteryLevel", type="integer", nullable=true)
     */
    private $masterylevel;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="typeID", referencedColumnName="typeID")
     * })
     */
    private $typeid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Certcerts
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Certcerts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="certID", referencedColumnName="certID")
     * })
     */
    private $certid;



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
     * Set masterylevel
     *
     * @param integer $masterylevel
     *
     * @return Certmasteries
     */
    public function setMasterylevel($masterylevel)
    {
        $this->masterylevel = $masterylevel;

        return $this;
    }

    /**
     * Get masterylevel
     *
     * @return integer
     */
    public function getMasterylevel()
    {
        return $this->masterylevel;
    }

    /**
     * Set typeid
     *
     * @param \Vibs\EvesymBundle\Entity\Invtypes $typeid
     *
     * @return Certmasteries
     */
    public function setTypeid(\Vibs\EvesymBundle\Entity\Invtypes $typeid = null)
    {
        $this->typeid = $typeid;

        return $this;
    }

    /**
     * Get typeid
     *
     * @return \Vibs\EvesymBundle\Entity\Invtypes
     */
    public function getTypeid()
    {
        return $this->typeid;
    }

    /**
     * Set certid
     *
     * @param \Vibs\EvesymBundle\Entity\Certcerts $certid
     *
     * @return Certmasteries
     */
    public function setCertid(\Vibs\EvesymBundle\Entity\Certcerts $certid = null)
    {
        $this->certid = $certid;

        return $this;
    }

    /**
     * Get certid
     *
     * @return \Vibs\EvesymBundle\Entity\Certcerts
     */
    public function getCertid()
    {
        return $this->certid;
    }
}
