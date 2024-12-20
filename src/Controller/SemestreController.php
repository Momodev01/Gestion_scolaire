<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class SemestreController extends AbstractController
{
    #[Route(path: '/semestre/index', name: 'semestre_index')]
    public function index(): Response
    {
        return $this->render(view: 'semestre/index.html.twig', parameters: [
            'controller_name' => 'SemestreController',
        ]);
    }
}
