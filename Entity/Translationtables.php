<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Translationtables
 *
 * @ORM\Table(name="translationTables", indexes={@ORM\Index(name="sourceTable", columns={"sourceTable"})})
 * @ORM\Entity
 */
class Translationtables
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
     * @var string
     *
     * @ORM\Column(name="sourceTable", type="string", length=200, nullable=false)
     */
    private $sourcetable;

    /**
     * @var string
     *
     * @ORM\Column(name="destinationTable", type="string", length=200, nullable=true)
     */
    private $destinationtable;

    /**
     * @var string
     *
     * @ORM\Column(name="translatedKey", type="string", length=200, nullable=false)
     */
    private $translatedkey;

    /**
     * @var integer
     *
     * @ORM\Column(name="tcGroupID", type="integer", nullable=true)
     */
    private $tcgroupid;

    /**
     * @var integer
     *
     * @ORM\Column(name="tcID", type="integer", nullable=true)
     */
    private $tcid;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set sourcetable
     *
     * @param string $sourcetable
     *
     * @return Translationtables
     */
    public function setSourcetable($sourcetable)
    {
        $this->sourcetable = $sourcetable;

        return $this;
    }

    /**
     * Get sourcetable
     *
     * @return string
     */
    public function getSourcetable()
    {
        return $this->sourcetable;
    }

    /**
     * Set destinationtable
     *
     * @param string $destinationtable
     *
     * @return Translationtables
     */
    public function setDestinationtable($destinationtable)
    {
        $this->destinationtable = $destinationtable;

        return $this;
    }

    /**
     * Get destinationtable
     *
     * @return string
     */
    public function getDestinationtable()
    {
        return $this->destinationtable;
    }

    /**
     * Set translatedkey
     *
     * @param string $translatedkey
     *
     * @return Translationtables
     */
    public function setTranslatedkey($translatedkey)
    {
        $this->translatedkey = $translatedkey;

        return $this;
    }

    /**
     * Get translatedkey
     *
     * @return string
     */
    public function getTranslatedkey()
    {
        return $this->translatedkey;
    }

    /**
     * Set tcgroupid
     *
     * @param integer $tcgroupid
     *
     * @return Translationtables
     */
    public function setTcgroupid($tcgroupid)
    {
        $this->tcgroupid = $tcgroupid;

        return $this;
    }

    /**
     * Get tcgroupid
     *
     * @return integer
     */
    public function getTcgroupid()
    {
        return $this->tcgroupid;
    }

    /**
     * Set tcid
     *
     * @param integer $tcid
     *
     * @return Translationtables
     */
    public function setTcid($tcid)
    {
        $this->tcid = $tcid;

        return $this;
    }

    /**
     * Get tcid
     *
     * @return integer
     */
    public function getTcid()
    {
        return $this->tcid;
    }
}
