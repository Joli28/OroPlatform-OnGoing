<?php

// src/Controller/ProductController.php
namespace App\Controller;

// ...
use App\Entity\Course;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;

class CourseController extends AbstractController
{
    /**
     * @Route("/product", name="create_product")
     */
    public function createCourse(): Response
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createProduct(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $course = new Course();
        $course->setName('Math');
        $course->setCode(02);
        $course->setDescription('Example');

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($course);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$course->getCode());
    }
}
