<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contractor
 *
 * @ORM\Table(name="contractor")
 * @ORM\Entity(repositoryClass="App\Repository\ContractorRepository")
 */
class Contractor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="contractor_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $contractorId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=50, nullable=false)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_name", type="string", length=255, nullable=false)
     */
    private $contactName;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_email", type="string", length=255, nullable=false)
     */
    private $contactEmail;

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
     * Get contractorId
     *
     * @return integer
     */
    public function getContractorId()
    {
        return $this->contractorId;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    public function getContactName()
    {
        return $this->contactName;
    }

    public function setContactName($contactName): void
    {
        $this->contactName = $contactName;
    }

    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    public function setContactEmail($contactEmail): void
    {
        $this->contactEmail = $contactEmail;
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

}