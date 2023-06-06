<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiciesController extends AbstractController
{
    #[Route('/servicies', name: 'app_servicies')]
    public function index(): Response
    {
        return $this->render('servicies/index.html.twig', [
            'controller_name' => 'ServiciesController',
        ]);
    }
}
