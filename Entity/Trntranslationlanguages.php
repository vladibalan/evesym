<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trntranslationlanguages
 *
 * @ORM\Table(name="trnTranslationLanguages", indexes={@ORM\Index(name="languageID", columns={"languageID"})})
 * @ORM\Entity
 */
class Trntranslationlanguages
{
    /**
     * @var integer
     *
     * @ORM\Column(name="numericLanguageID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numericlanguageid;

    /**
     * @var string
     *
     * @ORM\Column(name="languageID", type="string", length=50, nullable=true)
     */
    private $languageid;

    /**
     * @var string
     *
     * @ORM\Column(name="languageName", type="string", length=200, nullable=true)
     */
    private $languagename;



    /**
     * Get numericlanguageid
     *
     * @return integer
     */
    public function getNumericlanguageid()
    {
        return $this->numericlanguageid;
    }

    /**
     * Set languageid
     *
     * @param string $languageid
     *
     * @return Trntranslationlanguages
     */
    public function setLanguageid($languageid)
    {
        $this->languageid = $languageid;

        return $this;
    }

    /**
     * Get languageid
     *
     * @return string
     */
    public function getLanguageid()
    {
        return $this->languageid;
    }

    /**
     * Set languagename
     *
     * @param string $languagename
     *
     * @return Trntranslationlanguages
     */
    public function setLanguagename($languagename)
    {
        $this->languagename = $languagename;

        return $this;
    }

    /**
     * Get languagename
     *
     * @return string
     */
    public function getLanguagename()
    {
        return $this->languagename;
    }
}
