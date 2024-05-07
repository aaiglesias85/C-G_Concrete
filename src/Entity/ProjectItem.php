<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProjectItem
 *
 * @ORM\Table(name="project_item")
 * @ORM\Entity(repositoryClass="App\Repository\ProjectItemRepository")
 */
class ProjectItem
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
     * @var Project
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Project")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="project_id", referencedColumnName="project_id")
     * })
     */
    private $project;


    /**
     * @var Item
     *
     * @ORM\ManyToOne(targetEntity="App\Entity\Item")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="item_id", referencedColumnName="item_id")
     * })
     */
    private $item;

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

    /**
     * @return Project
     */
    public function getProject()
    {
        return $this->project;
    }

    public function setProject($project)
    {
        $this->project = $project;
    }

    /**
     * @return Item
     */
    public function getItem()
    {
        return $this->item;
    }

    public function setItem($item)
    {
        $this->item = $item;
    }

}