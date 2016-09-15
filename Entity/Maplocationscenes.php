<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Maplocationscenes
 *
 * @ORM\Table(name="mapLocationScenes", indexes={@ORM\Index(name="graphicID", columns={"graphicID"})})
 * @ORM\Entity
 */
class Maplocationscenes
{
    /**
     * @var \Vibs\EvesymBundle\Entity\Mapregions
     *
     * @ORM\OneToOne(targetEntity="Vibs\EvesymBundle\Entity\Mapregions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="locationID", referencedColumnName="regionID", unique=true)
     * })
     */
    private $locationid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Evegraphics
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Evegraphics")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="graphicID", referencedColumnName="graphicID")
     * })
     */
    private $graphicid;


}

