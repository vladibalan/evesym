<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invnames
 *
 * @ORM\Table(name="invNames")
 * @ORM\Entity
 */
class Invnames
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


}

