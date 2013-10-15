<?php

namespace Application\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Task
 */
class Task
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \Date
     */
    private $createddate;

    /**
     * @var \Date
     */
    private $updateddate;


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
     * Set name
     *
     * @param string $name
     * @return Task
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set createddate
     *
     * @param \Date $createddate
     * @return Task
     */
    public function setCreateddate($createddate)
    {
        $this->createddate = $createddate;
    
        return $this;
    }

    /**
     * Get createddate
     *
     * @return \Date 
     */
    public function getCreateddate()
    {
        return $this->createddate;
    }

    /**
     * Set updateddate
     *
     * @param \Date $updateddate
     * @return Task
     */
    public function setUpdateddate($updateddate)
    {
        $this->updateddate = $updateddate;
    
        return $this;
    }

    /**
     * Get updateddate
     *
     * @return \Date
     */
    public function getUpdateddate()
    {
        return $this->updateddate;
    }
    /**
     * @var string
     */
    private $comments;


    /**
     * Set comments
     *
     * @param string $comments
     * @return Task
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    
        return $this;
    }

    /**
     * Get comments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->comments;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $progress;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->progress = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add progress
     *
     * @param \Application\TodoBundle\Entity\Taskprogress $progress
     * @return Task
     */
    public function addProgres(\Application\TodoBundle\Entity\Taskprogress $progress)
    {
        $this->progress[] = $progress;
    
        return $this;
    }

    /**
     * Remove progress
     *
     * @param \Application\TodoBundle\Entity\Taskprogress $progress
     */
    public function removeProgres(\Application\TodoBundle\Entity\Taskprogress $progress)
    {
        $this->progress->removeElement($progress);
    }

    /**
     * Get progress
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProgress()
    {
        return $this->progress;
    }
    
    public function __toString() 
    {
        return $this->getName();
    }
    /**
     * @var integer
     */
    private $allocateddays;


    /**
     * Set allocateddays
     *
     * @param integer $allocateddays
     * @return Task
     */
    public function setAllocateddays($allocateddays)
    {
        $this->allocateddays = $allocateddays;
    
        return $this;
    }

    /**
     * Get allocateddays
     *
     * @return integer 
     */
    public function getAllocateddays()
    {
        return $this->allocateddays;
    }
}