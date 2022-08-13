<?php
namespace App\Controller;

use App\Entity\FizzBuzz;
use App\Form\FizzBuzzType;
use App\Service\FizzBuzzService;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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

    /**
     * @Route("/desafio2/fizz/buzz", name="desafio2")
     */
    public function fizzBuzzService(Request $request, FizzBuzzService $fizzBuzzService, EntityManagerInterface $entityManager): Response
    {
        $fizzBuzzFormat = '';
        $fizzBuzz = new FizzBuzz();
        $form = $this->createForm(FizzBuzzType::class, $fizzBuzz);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $fizzBuzz = $form->getData();

            $fizzBuzzFormat = $fizzBuzzService->getFizzBuzzFormat($fizzBuzz->getInitNumber(), $fizzBuzz->getEndNumber());
            
            if (strlen($fizzBuzzFormat) > 255) throw new Exception('La respuesta FizzBuzz es demasiado grande para ser almacenado en la Base de Datos.');

            $fizzBuzz->setFizzBuzz($fizzBuzzFormat);

            $entityManager->persist($fizzBuzz);
            $entityManager->flush();
        }

        return $this->render('tests/test2.html.twig', [
            'title' => 'Desafío 2: FizzBuzz Service',
            'fizzBuzz' => $fizzBuzzFormat,
            'form' => $form->createView(),
        ]);
    }
}