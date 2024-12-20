<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ProfesseurController extends AbstractController
{
    #[Route(path: '/professeur/index', name: 'professeur_index')]
    public function index(): Response
    {
        return $this->render(view: 'professeur/index.html.twig', parameters: [
            'controller_name' => 'ProfesseurController',
        ]);
    }
}
