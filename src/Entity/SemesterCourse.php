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
    private $CourseCode;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $SemesterCode;

    /**
     * @ORM\Column(type="integer")
     */
   


    public function getCourseCode()
    {
        return $this->StudentID;
    }

    


    public function getSemesterCode()
    {
        return $this->CourseID;
    }



    // ... getter and setter methods
}