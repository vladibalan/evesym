<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skins
 *
 * @ORM\Table(name="skins")
 * @ORM\Entity
 */
class Skins
{
    /**
     * @var integer
     *
     * @ORM\Column(name="skinID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $skinid;

    /**
     * @var string
     *
     * @ORM\Column(name="internalName", type="string", length=70, nullable=true)
     */
    private $internalname;

    /**
     * @var integer
     *
     * @ORM\Column(name="skinMaterialID", type="integer", nullable=true)
     */
    private $skinmaterialid;


}

