<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Table(name="project")
 * @ORM\Entity(repositoryClass="App\Repository\ProjectRepository")
 */
class Project
{
    /**
     * @var integer
     *
     * @ORM\Column(name="project_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $projectId;

    /**
     * @var string
     *
     * @ORM\Column(name="project_number", type="string", length=50, nullable=false)
     */
    private $projectNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255, nullable=false)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="po_number", type="string", length=255, nullable=false)
     */
    private $poNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="po_cg", type="string", length=255, nullable=false)
     */
    private $poCG;

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
     * @var Contractor
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Contractor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contractor_id", referencedColumnName="contractor_id")
     * })
     */
    private $contractor;


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
     * Get projectId
     *
     * @return integer
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
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

    public function getProjectNumber()
    {
        return $this->projectNumber;
    }

    public function setProjectNumber($projectNumber)
    {
        $this->projectNumber = $projectNumber;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function getPoNumber()
    {
        return $this->poNumber;
    }

    public function setPoNumber($poNumber)
    {
        $this->poNumber = $poNumber;
    }

    public function getPoCG()
    {
        return $this->poCG;
    }

    public function setPoCG($poCG)
    {
        $this->poCG = $poCG;
    }

    /**
     * @return Contractor
     */
    public function getContractor()
    {
        return $this->contractor;
    }

    public function setContractor($contractor)
    {
        $this->contractor = $contractor;
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

}