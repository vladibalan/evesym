<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invuniquenames
 *
 * @ORM\Table(name="invUniqueNames", uniqueConstraints={@ORM\UniqueConstraint(name="ix_invUniqueNames_itemName", columns={"itemName"})}, indexes={@ORM\Index(name="invUniqueNames_IX_GroupName", columns={"groupID", "itemName"}), @ORM\Index(name="IDX_8916E83CD6EFA878", columns={"groupID"})})
 * @ORM\Entity
 */
class Invuniquenames
{
    /**
     * @var integer
     *
     * @ORM\Column(name="itemID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $itemid;

    /**
     * @var string
     *
     * @ORM\Column(name="itemName", type="string", length=200, nullable=false)
     */
    private $itemname;

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
     * Get itemid
     *
     * @return integer
     */
    public function getItemid()
    {
        return $this->itemid;
    }

    /**
     * Set itemname
     *
     * @param string $itemname
     *
     * @return Invuniquenames
     */
    public function setItemname($itemname)
    {
        $this->itemname = $itemname;

        return $this;
    }

    /**
     * Get itemname
     *
     * @return string
     */
    public function getItemname()
    {
        return $this->itemname;
    }

    /**
     * Set groupid
     *
     * @param \Vibs\EvesymBundle\Entity\Invgroups $groupid
     *
     * @return Invuniquenames
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
