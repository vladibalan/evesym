<?php

namespace Vibs\EvesymBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dgmeffects
 *
 * @ORM\Table(name="dgmEffects", indexes={@ORM\Index(name="iconID", columns={"iconID"}), @ORM\Index(name="durationAttributeID", columns={"durationAttributeID"}), @ORM\Index(name="trackingSpeedAttributeID", columns={"trackingSpeedAttributeID"}), @ORM\Index(name="dischargeAttributeID", columns={"dischargeAttributeID"}), @ORM\Index(name="rangeAttributeID", columns={"rangeAttributeID"}), @ORM\Index(name="falloffAttributeID", columns={"falloffAttributeID"}), @ORM\Index(name="npcUsageChanceAttributeID", columns={"npcUsageChanceAttributeID"}), @ORM\Index(name="npcActivationChanceAttributeID", columns={"npcActivationChanceAttributeID"}), @ORM\Index(name="fittingUsageChanceAttributeID", columns={"fittingUsageChanceAttributeID"})})
 * @ORM\Entity
 */
class Dgmeffects
{
    /**
     * @var integer
     *
     * @ORM\Column(name="effectID", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $effectid;

    /**
     * @var string
     *
     * @ORM\Column(name="effectName", type="string", length=400, nullable=true)
     */
    private $effectname;

    /**
     * @var integer
     *
     * @ORM\Column(name="effectCategory", type="integer", nullable=true)
     */
    private $effectcategory;

    /**
     * @var integer
     *
     * @ORM\Column(name="preExpression", type="integer", nullable=true)
     */
    private $preexpression;

    /**
     * @var integer
     *
     * @ORM\Column(name="postExpression", type="integer", nullable=true)
     */
    private $postexpression;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=1000, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="guid", type="string", length=60, nullable=true)
     */
    private $guid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isOffensive", type="boolean", nullable=true)
     */
    private $isoffensive;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isAssistance", type="boolean", nullable=true)
     */
    private $isassistance;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disallowAutoRepeat", type="boolean", nullable=true)
     */
    private $disallowautorepeat;

    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean", nullable=true)
     */
    private $published;

    /**
     * @var string
     *
     * @ORM\Column(name="displayName", type="string", length=100, nullable=true)
     */
    private $displayname;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isWarpSafe", type="boolean", nullable=true)
     */
    private $iswarpsafe;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rangeChance", type="boolean", nullable=true)
     */
    private $rangechance;

    /**
     * @var boolean
     *
     * @ORM\Column(name="electronicChance", type="boolean", nullable=true)
     */
    private $electronicchance;

    /**
     * @var boolean
     *
     * @ORM\Column(name="propulsionChance", type="boolean", nullable=true)
     */
    private $propulsionchance;

    /**
     * @var integer
     *
     * @ORM\Column(name="distribution", type="integer", nullable=true)
     */
    private $distribution;

    /**
     * @var string
     *
     * @ORM\Column(name="sfxName", type="string", length=20, nullable=true)
     */
    private $sfxname;

    /**
     * @var string
     *
     * @ORM\Column(name="modifierInfo", type="text", length=65535, nullable=true)
     */
    private $modifierinfo;

    /**
     * @var \Vibs\EvesymBundle\Entity\Eveicons
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Eveicons")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="iconID", referencedColumnName="iconID")
     * })
     */
    private $iconid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Dgmattributetypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Dgmattributetypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="durationAttributeID", referencedColumnName="attributeID")
     * })
     */
    private $durationattributeid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Dgmattributetypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Dgmattributetypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="trackingSpeedAttributeID", referencedColumnName="attributeID")
     * })
     */
    private $trackingspeedattributeid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Dgmattributetypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Dgmattributetypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dischargeAttributeID", referencedColumnName="attributeID")
     * })
     */
    private $dischargeattributeid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Dgmattributetypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Dgmattributetypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rangeAttributeID", referencedColumnName="attributeID")
     * })
     */
    private $rangeattributeid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Dgmattributetypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Dgmattributetypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="falloffAttributeID", referencedColumnName="attributeID")
     * })
     */
    private $falloffattributeid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Dgmattributetypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Dgmattributetypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="npcUsageChanceAttributeID", referencedColumnName="attributeID")
     * })
     */
    private $npcusagechanceattributeid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Dgmattributetypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Dgmattributetypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="npcActivationChanceAttributeID", referencedColumnName="attributeID")
     * })
     */
    private $npcactivationchanceattributeid;

    /**
     * @var \Vibs\EvesymBundle\Entity\Dgmattributetypes
     *
     * @ORM\ManyToOne(targetEntity="Vibs\EvesymBundle\Entity\Dgmattributetypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fittingUsageChanceAttributeID", referencedColumnName="attributeID")
     * })
     */
    private $fittingusagechanceattributeid;



    /**
     * Get effectid
     *
     * @return integer
     */
    public function getEffectid()
    {
        return $this->effectid;
    }

    /**
     * Set effectname
     *
     * @param string $effectname
     *
     * @return Dgmeffects
     */
    public function setEffectname($effectname)
    {
        $this->effectname = $effectname;

        return $this;
    }

    /**
     * Get effectname
     *
     * @return string
     */
    public function getEffectname()
    {
        return $this->effectname;
    }

    /**
     * Set effectcategory
     *
     * @param integer $effectcategory
     *
     * @return Dgmeffects
     */
    public function setEffectcategory($effectcategory)
    {
        $this->effectcategory = $effectcategory;

        return $this;
    }

    /**
     * Get effectcategory
     *
     * @return integer
     */
    public function getEffectcategory()
    {
        return $this->effectcategory;
    }

    /**
     * Set preexpression
     *
     * @param integer $preexpression
     *
     * @return Dgmeffects
     */
    public function setPreexpression($preexpression)
    {
        $this->preexpression = $preexpression;

        return $this;
    }

    /**
     * Get preexpression
     *
     * @return integer
     */
    public function getPreexpression()
    {
        return $this->preexpression;
    }

    /**
     * Set postexpression
     *
     * @param integer $postexpression
     *
     * @return Dgmeffects
     */
    public function setPostexpression($postexpression)
    {
        $this->postexpression = $postexpression;

        return $this;
    }

    /**
     * Get postexpression
     *
     * @return integer
     */
    public function getPostexpression()
    {
        return $this->postexpression;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Dgmeffects
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

    /**
     * Set guid
     *
     * @param string $guid
     *
     * @return Dgmeffects
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;

        return $this;
    }

    /**
     * Get guid
     *
     * @return string
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Set isoffensive
     *
     * @param boolean $isoffensive
     *
     * @return Dgmeffects
     */
    public function setIsoffensive($isoffensive)
    {
        $this->isoffensive = $isoffensive;

        return $this;
    }

    /**
     * Get isoffensive
     *
     * @return boolean
     */
    public function getIsoffensive()
    {
        return $this->isoffensive;
    }

    /**
     * Set isassistance
     *
     * @param boolean $isassistance
     *
     * @return Dgmeffects
     */
    public function setIsassistance($isassistance)
    {
        $this->isassistance = $isassistance;

        return $this;
    }

    /**
     * Get isassistance
     *
     * @return boolean
     */
    public function getIsassistance()
    {
        return $this->isassistance;
    }

    /**
     * Set disallowautorepeat
     *
     * @param boolean $disallowautorepeat
     *
     * @return Dgmeffects
     */
    public function setDisallowautorepeat($disallowautorepeat)
    {
        $this->disallowautorepeat = $disallowautorepeat;

        return $this;
    }

    /**
     * Get disallowautorepeat
     *
     * @return boolean
     */
    public function getDisallowautorepeat()
    {
        return $this->disallowautorepeat;
    }

    /**
     * Set published
     *
     * @param boolean $published
     *
     * @return Dgmeffects
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set displayname
     *
     * @param string $displayname
     *
     * @return Dgmeffects
     */
    public function setDisplayname($displayname)
    {
        $this->displayname = $displayname;

        return $this;
    }

    /**
     * Get displayname
     *
     * @return string
     */
    public function getDisplayname()
    {
        return $this->displayname;
    }

    /**
     * Set iswarpsafe
     *
     * @param boolean $iswarpsafe
     *
     * @return Dgmeffects
     */
    public function setIswarpsafe($iswarpsafe)
    {
        $this->iswarpsafe = $iswarpsafe;

        return $this;
    }

    /**
     * Get iswarpsafe
     *
     * @return boolean
     */
    public function getIswarpsafe()
    {
        return $this->iswarpsafe;
    }

    /**
     * Set rangechance
     *
     * @param boolean $rangechance
     *
     * @return Dgmeffects
     */
    public function setRangechance($rangechance)
    {
        $this->rangechance = $rangechance;

        return $this;
    }

    /**
     * Get rangechance
     *
     * @return boolean
     */
    public function getRangechance()
    {
        return $this->rangechance;
    }

    /**
     * Set electronicchance
     *
     * @param boolean $electronicchance
     *
     * @return Dgmeffects
     */
    public function setElectronicchance($electronicchance)
    {
        $this->electronicchance = $electronicchance;

        return $this;
    }

    /**
     * Get electronicchance
     *
     * @return boolean
     */
    public function getElectronicchance()
    {
        return $this->electronicchance;
    }

    /**
     * Set propulsionchance
     *
     * @param boolean $propulsionchance
     *
     * @return Dgmeffects
     */
    public function setPropulsionchance($propulsionchance)
    {
        $this->propulsionchance = $propulsionchance;

        return $this;
    }

    /**
     * Get propulsionchance
     *
     * @return boolean
     */
    public function getPropulsionchance()
    {
        return $this->propulsionchance;
    }

    /**
     * Set distribution
     *
     * @param integer $distribution
     *
     * @return Dgmeffects
     */
    public function setDistribution($distribution)
    {
        $this->distribution = $distribution;

        return $this;
    }

    /**
     * Get distribution
     *
     * @return integer
     */
    public function getDistribution()
    {
        return $this->distribution;
    }

    /**
     * Set sfxname
     *
     * @param string $sfxname
     *
     * @return Dgmeffects
     */
    public function setSfxname($sfxname)
    {
        $this->sfxname = $sfxname;

        return $this;
    }

    /**
     * Get sfxname
     *
     * @return string
     */
    public function getSfxname()
    {
        return $this->sfxname;
    }

    /**
     * Set modifierinfo
     *
     * @param string $modifierinfo
     *
     * @return Dgmeffects
     */
    public function setModifierinfo($modifierinfo)
    {
        $this->modifierinfo = $modifierinfo;

        return $this;
    }

    /**
     * Get modifierinfo
     *
     * @return string
     */
    public function getModifierinfo()
    {
        return $this->modifierinfo;
    }

    /**
     * Set iconid
     *
     * @param \Vibs\EvesymBundle\Entity\Eveicons $iconid
     *
     * @return Dgmeffects
     */
    public function setIconid(\Vibs\EvesymBundle\Entity\Eveicons $iconid = null)
    {
        $this->iconid = $iconid;

        return $this;
    }

    /**
     * Get iconid
     *
     * @return \Vibs\EvesymBundle\Entity\Eveicons
     */
    public function getIconid()
    {
        return $this->iconid;
    }

    /**
     * Set durationattributeid
     *
     * @param \Vibs\EvesymBundle\Entity\Dgmattributetypes $durationattributeid
     *
     * @return Dgmeffects
     */
    public function setDurationattributeid(\Vibs\EvesymBundle\Entity\Dgmattributetypes $durationattributeid = null)
    {
        $this->durationattributeid = $durationattributeid;

        return $this;
    }

    /**
     * Get durationattributeid
     *
     * @return \Vibs\EvesymBundle\Entity\Dgmattributetypes
     */
    public function getDurationattributeid()
    {
        return $this->durationattributeid;
    }

    /**
     * Set trackingspeedattributeid
     *
     * @param \Vibs\EvesymBundle\Entity\Dgmattributetypes $trackingspeedattributeid
     *
     * @return Dgmeffects
     */
    public function setTrackingspeedattributeid(\Vibs\EvesymBundle\Entity\Dgmattributetypes $trackingspeedattributeid = null)
    {
        $this->trackingspeedattributeid = $trackingspeedattributeid;

        return $this;
    }

    /**
     * Get trackingspeedattributeid
     *
     * @return \Vibs\EvesymBundle\Entity\Dgmattributetypes
     */
    public function getTrackingspeedattributeid()
    {
        return $this->trackingspeedattributeid;
    }

    /**
     * Set dischargeattributeid
     *
     * @param \Vibs\EvesymBundle\Entity\Dgmattributetypes $dischargeattributeid
     *
     * @return Dgmeffects
     */
    public function setDischargeattributeid(\Vibs\EvesymBundle\Entity\Dgmattributetypes $dischargeattributeid = null)
    {
        $this->dischargeattributeid = $dischargeattributeid;

        return $this;
    }

    /**
     * Get dischargeattributeid
     *
     * @return \Vibs\EvesymBundle\Entity\Dgmattributetypes
     */
    public function getDischargeattributeid()
    {
        return $this->dischargeattributeid;
    }

    /**
     * Set rangeattributeid
     *
     * @param \Vibs\EvesymBundle\Entity\Dgmattributetypes $rangeattributeid
     *
     * @return Dgmeffects
     */
    public function setRangeattributeid(\Vibs\EvesymBundle\Entity\Dgmattributetypes $rangeattributeid = null)
    {
        $this->rangeattributeid = $rangeattributeid;

        return $this;
    }

    /**
     * Get rangeattributeid
     *
     * @return \Vibs\EvesymBundle\Entity\Dgmattributetypes
     */
    public function getRangeattributeid()
    {
        return $this->rangeattributeid;
    }

    /**
     * Set falloffattributeid
     *
     * @param \Vibs\EvesymBundle\Entity\Dgmattributetypes $falloffattributeid
     *
     * @return Dgmeffects
     */
    public function setFalloffattributeid(\Vibs\EvesymBundle\Entity\Dgmattributetypes $falloffattributeid = null)
    {
        $this->falloffattributeid = $falloffattributeid;

        return $this;
    }

    /**
     * Get falloffattributeid
     *
     * @return \Vibs\EvesymBundle\Entity\Dgmattributetypes
     */
    public function getFalloffattributeid()
    {
        return $this->falloffattributeid;
    }

    /**
     * Set npcusagechanceattributeid
     *
     * @param \Vibs\EvesymBundle\Entity\Dgmattributetypes $npcusagechanceattributeid
     *
     * @return Dgmeffects
     */
    public function setNpcusagechanceattributeid(\Vibs\EvesymBundle\Entity\Dgmattributetypes $npcusagechanceattributeid = null)
    {
        $this->npcusagechanceattributeid = $npcusagechanceattributeid;

        return $this;
    }

    /**
     * Get npcusagechanceattributeid
     *
     * @return \Vibs\EvesymBundle\Entity\Dgmattributetypes
     */
    public function getNpcusagechanceattributeid()
    {
        return $this->npcusagechanceattributeid;
    }

    /**
     * Set npcactivationchanceattributeid
     *
     * @param \Vibs\EvesymBundle\Entity\Dgmattributetypes $npcactivationchanceattributeid
     *
     * @return Dgmeffects
     */
    public function setNpcactivationchanceattributeid(\Vibs\EvesymBundle\Entity\Dgmattributetypes $npcactivationchanceattributeid = null)
    {
        $this->npcactivationchanceattributeid = $npcactivationchanceattributeid;

        return $this;
    }

    /**
     * Get npcactivationchanceattributeid
     *
     * @return \Vibs\EvesymBundle\Entity\Dgmattributetypes
     */
    public function getNpcactivationchanceattributeid()
    {
        return $this->npcactivationchanceattributeid;
    }

    /**
     * Set fittingusagechanceattributeid
     *
     * @param \Vibs\EvesymBundle\Entity\Dgmattributetypes $fittingusagechanceattributeid
     *
     * @return Dgmeffects
     */
    public function setFittingusagechanceattributeid(\Vibs\EvesymBundle\Entity\Dgmattributetypes $fittingusagechanceattributeid = null)
    {
        $this->fittingusagechanceattributeid = $fittingusagechanceattributeid;

        return $this;
    }

    /**
     * Get fittingusagechanceattributeid
     *
     * @return \Vibs\EvesymBundle\Entity\Dgmattributetypes
     */
    public function getFittingusagechanceattributeid()
    {
        return $this->fittingusagechanceattributeid;
    }
}
