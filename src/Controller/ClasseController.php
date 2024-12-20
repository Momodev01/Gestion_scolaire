<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ClasseController extends AbstractController
{
    #[Route(path: '/classe/index', name: 'classe_index')]
    public function index(): Response
    {
        return $this->render(view: 'classe/index.html.twig', parameters: [
            'controller_name' => 'ClasseController',
        ]);
    }
}
