<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Certcerts
 *
 * @ORM\Table(name="certCerts", indexes={@ORM\Index(name="groupID", columns={"groupID"})})
 * @ORM\Entity
 */
class Certcerts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="certID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $certid;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invgroups
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invgroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="groupID", referencedColumnName="groupID")
     * })
     */
    private $groupid;



    /**
     * Get certid
     *
     * @return integer
     */
    public function getCertid()
    {
        return $this->certid;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Certcerts
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
     * Set name
     *
     * @param string $name
     *
     * @return Certcerts
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set groupid
     *
     * @param \Vibs\EvesymBundle\Entity\Invgroups $groupid
     *
     * @return Certcerts
     */
    public function setGroupid(\Vibs\EvesymBundle\Entity\Invgroups $groupid = null)
    {
        $this->groupid = $groupid;

        return $this;
    }

    /**
     * Get groupid
     *
     * @return \Vibs\EvesymBundle\Entity\Invgroups
     */
    public function getGroupid()
    {
        return $this->groupid;
    }
}
