<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/desafio1/fizz/buzz", name="desafio1")
     */
    public function fizzBuzzTwig(): Response
    {
        return $this->render('tests/test1.html.twig', [
            'title' => 'Desafío 1: FizzBuzz Twig Extension',
            'number' => 1,
        ]);
    }
}