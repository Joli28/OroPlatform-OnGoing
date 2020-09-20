<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Semester
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $code;

    /**
     * @ORM\Column(type="integer")
     */
    private $from;


     /**
     * @ORM\Column(type="string")
     */
    private $to;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }


    public function getCode()
    {
        return $this->code;
    }


    public function getFrom()
    {
        return $this->from;
    }


    public function setFrom($from)
    {
        $this->from = $from;
    }



    public function getTo()
    {
        return $this->to;
    }


    public function setTo($to)
    {
        $this->to = $to;
    }
    // ... getter and setter methods
}