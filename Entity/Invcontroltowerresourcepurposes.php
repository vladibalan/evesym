<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invcontroltowerresourcepurposes
 *
 * @ORM\Table(name="invControlTowerResourcePurposes")
 * @ORM\Entity
 */
class Invcontroltowerresourcepurposes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="purpose", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $purpose;

    /**
     * @var string
     *
     * @ORM\Column(name="purposeText", type="string", length=100, nullable=true)
     */
    private $purposetext;



    /**
     * Get purpose
     *
     * @return integer
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Set purposetext
     *
     * @param string $purposetext
     *
     * @return Invcontroltowerresourcepurposes
     */
    public function setPurposetext($purposetext)
    {
        $this->purposetext = $purposetext;

        return $this;
    }

    /**
     * Get purposetext
     *
     * @return string
     */
    public function getPurposetext()
    {
        return $this->purposetext;
    }
}
