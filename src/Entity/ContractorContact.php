<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ContractorContact
 *
 * @ORM\Table(name="contractor_contact")
 * @ORM\Entity(repositoryClass="App\Repository\ContractorContactRepository")
 */
class ContractorContact
{
    /**
     * @var integer
     *
     * @ORM\Column(name="contact_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $contactId;

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
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

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
     * Get contactId
     *
     * @return integer
     */
    public function getContactId()
    {
        return $this->contactId;
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

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getContractor(): Contractor
    {
        return $this->contractor;
    }

    public function setContractor($contractor)
    {
        $this->contractor = $contractor;
    }

}