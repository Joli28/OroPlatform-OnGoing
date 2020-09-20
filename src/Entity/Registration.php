<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Registration
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $StudentID;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $CourseID;

    /**
     * @ORM\Column(type="integer")
     */
    private $SemesterID;

    private $grade;



    public function getStudentID()
    {
        return $this->StudentID;
    }

    


    public function getCourseID()
    {
        return $this->CourseID;
    }


    public function getSemesterID()
    {
        return $this->SemesterID;
    }

    public function getGrade()
    {
        return $this->grade;
    }
  

    public function setGrade($grade)
    {
        $this->grade = $grade;
    }

    // ... getter and setter methods
}