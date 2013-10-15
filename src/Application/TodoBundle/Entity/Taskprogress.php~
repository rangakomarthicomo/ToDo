<?php

namespace Application\TodoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Taskprogress
 */
class Taskprogress
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $taskId;

    /**
     * @var integer
     */
    private $estimateddays;

    /**
     * @var integer
     */
    private $completeddays;


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
     * Set taskId
     *
     * @param integer $taskId
     * @return Taskprogress
     */
    public function setTaskId($taskId)
    {
        $this->taskId = $taskId;
    
        return $this;
    }

    /**
     * Get taskId
     *
     * @return integer 
     */
    public function getTaskId()
    {
        return $this->taskId;
    }

    /**
     * Set estimateddays
     *
     * @param integer $estimateddays
     * @return Taskprogress
     */
    public function setEstimateddays($estimateddays)
    {
        $this->estimateddays = $estimateddays;
    
        return $this;
    }

    /**
     * Get estimateddays
     *
     * @return integer 
     */
    public function getEstimateddays()
    {
        return $this->estimateddays;
    }

    /**
     * Set completeddays
     *
     * @param integer $completeddays
     * @return Taskprogress
     */
    public function setCompleteddays($completeddays)
    {
        $this->completeddays = $completeddays;
    
        return $this;
    }

    /**
     * Get completeddays
     *
     * @return integer 
     */
    public function getCompleteddays()
    {
        return $this->completeddays;
    }
    /**
     * @var \Application\TodoBundle\Entity\Task
     */
    private $task;


    /**
     * Set task
     *
     * @param \Application\TodoBundle\Entity\Task $task
     * @return Taskprogress
     */
    public function setTask(\Application\TodoBundle\Entity\Task $task = null)
    {
        $this->task = $task;
    
        return $this;
    }

    /**
     * Get task
     *
     * @return \Application\TodoBundle\Entity\Task 
     */
    public function getTask()
    {
        return $this->task;
    }
   
}