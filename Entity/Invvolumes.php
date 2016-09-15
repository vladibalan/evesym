<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invvolumes
 *
 * @ORM\Table(name="invVolumes")
 * @ORM\Entity
 */
class Invvolumes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="typeid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $typeid;

    /**
     * @var integer
     *
     * @ORM\Column(name="volume", type="integer", nullable=true)
     */
    private $volume;


}

