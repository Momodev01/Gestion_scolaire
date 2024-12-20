<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SeanceController extends AbstractController
{
    #[Route(path: '/seance/index', name: 'seance_index')]
    public function index(): Response
    {
        return $this->render(view: 'seance/index.html.twig', parameters: [
            'controller_name' => 'SeanceController',
        ]);
    }
}
