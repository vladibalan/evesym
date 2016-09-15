<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mapregionjumps
 *
 * @ORM\Table(name="mapRegionJumps", indexes={@ORM\Index(name="fromRegionID", columns={"fromRegionID"}), @ORM\Index(name="toRegionID", columns={"toRegionID"})})
 * @ORM\Entity
 */
class Mapregionjumps
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
     * @var \Vibs\EvesymBundle\Entity\Mapregions
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Mapregions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fromRegionID", referencedColumnName="regionID")
     * })
     */
    private $fromregionid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Mapregions
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Mapregions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="toRegionID", referencedColumnName="regionID")
     * })
     */
    private $toregionid;


}

