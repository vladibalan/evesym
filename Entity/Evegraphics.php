<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evegraphics
 *
 * @ORM\Table(name="eveGraphics")
 * @ORM\Entity
 */
class Evegraphics
{
    /**
     * @var integer
     *
     * @ORM\Column(name="graphicID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $graphicid;

    /**
     * @var string
     *
     * @ORM\Column(name="sofFactionName", type="string", length=100, nullable=true)
     */
    private $soffactionname;

    /**
     * @var string
     *
     * @ORM\Column(name="graphicFile", type="string", length=100, nullable=true)
     */
    private $graphicfile;

    /**
     * @var string
     *
     * @ORM\Column(name="sofHullName", type="string", length=100, nullable=true)
     */
    private $sofhullname;

    /**
     * @var string
     *
     * @ORM\Column(name="sofRaceName", type="string", length=100, nullable=true)
     */
    private $sofracename;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;



    /**
     * Get graphicid
     *
     * @return integer
     */
    public function getGraphicid()
    {
        return $this->graphicid;
    }

    /**
     * Set soffactionname
     *
     * @param string $soffactionname
     *
     * @return Evegraphics
     */
    public function setSoffactionname($soffactionname)
    {
        $this->soffactionname = $soffactionname;

        return $this;
    }

    /**
     * Get soffactionname
     *
     * @return string
     */
    public function getSoffactionname()
    {
        return $this->soffactionname;
    }

    /**
     * Set graphicfile
     *
     * @param string $graphicfile
     *
     * @return Evegraphics
     */
    public function setGraphicfile($graphicfile)
    {
        $this->graphicfile = $graphicfile;

        return $this;
    }

    /**
     * Get graphicfile
     *
     * @return string
     */
    public function getGraphicfile()
    {
        return $this->graphicfile;
    }

    /**
     * Set sofhullname
     *
     * @param string $sofhullname
     *
     * @return Evegraphics
     */
    public function setSofhullname($sofhullname)
    {
        $this->sofhullname = $sofhullname;

        return $this;
    }

    /**
     * Get sofhullname
     *
     * @return string
     */
    public function getSofhullname()
    {
        return $this->sofhullname;
    }

    /**
     * Set sofracename
     *
     * @param string $sofracename
     *
     * @return Evegraphics
     */
    public function setSofracename($sofracename)
    {
        $this->sofracename = $sofracename;

        return $this;
    }

    /**
     * Get sofracename
     *
     * @return string
     */
    public function getSofracename()
    {
        return $this->sofracename;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Evegraphics
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
}
