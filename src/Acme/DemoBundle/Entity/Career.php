<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Career
 */
class Career
{
    /**
     * @var string
     */
    private $skills;

    /**
     * @var string
     */
    private $jobType;

    /**
     * @var string
     */
    private $jobRole;


    /**
     * Set skills
     *
     * @param string $skills
     * @return Career
     */
    public function setSkills($skills)
    {
        $this->skills = $skills;

        return $this;
    }

    /**
     * Get skills
     *
     * @return string 
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * Set jobType
     *
     * @param string $jobType
     * @return Career
     */
    public function setJobType($jobType)
    {
        $this->jobType = $jobType;

        return $this;
    }

    /**
     * Get jobType
     *
     * @return string 
     */
    public function getJobType()
    {
        return $this->jobType;
    }

    /**
     * Get jobRole
     *
     * @return string 
     */
    public function getJobRole()
    {
        return $this->jobRole;
    }
}
