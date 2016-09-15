<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invmetatypes
 *
 * @ORM\Table(name="invMetaTypes", indexes={@ORM\Index(name="parentTypeID", columns={"parentTypeID"}), @ORM\Index(name="metaGroupID", columns={"metaGroupID"})})
 * @ORM\Entity
 */
class Invmetatypes
{
    /**
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\OneToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="typeID", referencedColumnName="typeID", unique=true)
     * })
     */
    private $typeid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invtypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invtypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parentTypeID", referencedColumnName="typeID")
     * })
     */
    private $parenttypeid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Invmetagroups
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Invmetagroups")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="metaGroupID", referencedColumnName="metaGroupID")
     * })
     */
    private $metagroupid;


}

