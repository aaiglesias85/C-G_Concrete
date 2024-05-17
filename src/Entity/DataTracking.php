<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DataTracking
 *
 * @ORM\Table(name="data_tracking")
 * @ORM\Entity(repositoryClass="App\Repository\DataTrackingRepository")
 */
class DataTracking
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="quantity", type="float", nullable=false)
     */
    private $quantity;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", nullable=false)
     */
    private $price;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="station_number", type="string", length=255, nullable=false)
     */
    private $station_number;

    /**
     * @var string
     *
     * @ORM\Column(name="measured_by", type="string", length=255, nullable=false)
     */
    private $measured_by;

    /**
     * @var string
     *
     * @ORM\Column(name="conc_vendor", type="string", length=255, nullable=false)
     */
    private $conc_vendor;

    /**
     * @var string
     *
     * @ORM\Column(name="crew_lead", type="string", length=255, nullable=false)
     */
    private $crew_lead;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="string", length=255, nullable=false)
     */
    private $notes;

    /**
     * @var string
     *
     * @ORM\Column(name="other_materials", type="string", length=255, nullable=false)
     */
    private $other_materials;

    /**
     * @var float
     *
     * @ORM\Column(name="total_conc_used", type="float", nullable=false)
     */
    private $totalConcUsed;

    /**
     * @var float
     *
     * @ORM\Column(name="total_labor", type="float", nullable=false)
     */
    private $total_labor;

    /**
     * @var float
     *
     * @ORM\Column(name="total_stamps", type="float", nullable=false)
     */
    private $total_stamps;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var ProjectItem
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\ProjectItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="project_item_id", referencedColumnName="id")
     * })
     */
    private $projectItem;


    /**
     * @var Inspector
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Inspector")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="inspector_id", referencedColumnName="inspector_id")
     * })
     */
    private $inspector;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getDate(): \DateTime
    {
        return $this->date;
    }

    public function setDate(\DateTime $date): void
    {
        $this->date = $date;
    }

    /**
     * @return ProjectItem
     */
    public function getProjectItem()
    {
        return $this->projectItem;
    }

    public function setProjectItem($projectItem)
    {
        $this->projectItem = $projectItem;
    }

    /**
     * @return Inspector
     */
    public function getInspector()
    {
        return $this->inspector;
    }

    public function setInspector($inspector)
    {
        $this->inspector = $inspector;
    }

    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    public function getStationNumber()
    {
        return $this->station_number;
    }

    public function setStationNumber($station_number)
    {
        $this->station_number = $station_number;
    }

    public function getMeasuredBy()
    {
        return $this->measured_by;
    }

    public function setMeasuredBy($measured_by)
    {
        $this->measured_by = $measured_by;
    }

    public function getConcVendor()
    {
        return $this->conc_vendor;
    }

    public function setConcVendor($conc_vendor)
    {
        $this->conc_vendor = $conc_vendor;
    }

    public function getCrewLead()
    {
        return $this->crew_lead;
    }

    public function setCrewLead($crew_lead)
    {
        $this->crew_lead = $crew_lead;
    }

    public function getNotes()
    {
        return $this->notes;
    }

    public function setNotes($notes)
    {
        $this->notes = $notes;
    }

    public function getOtherMaterials()
    {
        return $this->other_materials;
    }

    public function setOtherMaterials($other_materials)
    {
        $this->other_materials = $other_materials;
    }

    public function getTotalConcUsed()
    {
        return $this->totalConcUsed;
    }

    public function setTotalConcUsed($totalConcUsed)
    {
        $this->totalConcUsed = $totalConcUsed;
    }

    public function getTotalLabor()
    {
        return $this->total_labor;
    }

    public function setTotalLabor($total_labor)
    {
        $this->total_labor = $total_labor;
    }

    public function getTotalStamps()
    {
        return $this->total_stamps;
    }

    public function setTotalStamps($total_stamps)
    {
        $this->total_stamps = $total_stamps;
    }
}