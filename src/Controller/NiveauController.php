<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class NiveauController extends AbstractController
{
    #[Route(path: '/niveau/index', name: 'niveau_index')]
    public function index(): Response
    {
        return $this->render(view: 'niveau/index.html.twig', parameters: [
            'controller_name' => 'NiveauController',
        ]);
    }
}
