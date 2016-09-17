<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trntranslationcolumns
 *
 * @ORM\Table(name="trnTranslationColumns")
 * @ORM\Entity
 */
class Trntranslationcolumns
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tcID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tcid;

    /**
     * @var integer
     *
     * @ORM\Column(name="tcGroupID", type="integer", nullable=true)
     */
    private $tcgroupid;

    /**
     * @var string
     *
     * @ORM\Column(name="tableName", type="string", length=256, nullable=false)
     */
    private $tablename;

    /**
     * @var string
     *
     * @ORM\Column(name="columnName", type="string", length=128, nullable=false)
     */
    private $columnname;

    /**
     * @var string
     *
     * @ORM\Column(name="masterID", type="string", length=128, nullable=true)
     */
    private $masterid;



    /**
     * Get tcid
     *
     * @return integer
     */
    public function getTcid()
    {
        return $this->tcid;
    }

    /**
     * Set tcgroupid
     *
     * @param integer $tcgroupid
     *
     * @return Trntranslationcolumns
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
     * Set tablename
     *
     * @param string $tablename
     *
     * @return Trntranslationcolumns
     */
    public function setTablename($tablename)
    {
        $this->tablename = $tablename;

        return $this;
    }

    /**
     * Get tablename
     *
     * @return string
     */
    public function getTablename()
    {
        return $this->tablename;
    }

    /**
     * Set columnname
     *
     * @param string $columnname
     *
     * @return Trntranslationcolumns
     */
    public function setColumnname($columnname)
    {
        $this->columnname = $columnname;

        return $this;
    }

    /**
     * Get columnname
     *
     * @return string
     */
    public function getColumnname()
    {
        return $this->columnname;
    }

    /**
     * Set masterid
     *
     * @param string $masterid
     *
     * @return Trntranslationcolumns
     */
    public function setMasterid($masterid)
    {
        $this->masterid = $masterid;

        return $this;
    }

    /**
     * Get masterid
     *
     * @return string
     */
    public function getMasterid()
    {
        return $this->masterid;
    }
}
