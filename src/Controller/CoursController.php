<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CoursController extends AbstractController
{
    #[Route(path: '/cours/index', name: 'cours_index')]
    #[Route(path: '/cours/liste', name: 'cours_liste')]
    public function index(): Response
    {
        return $this->render(view: 'cours/liste.html.twig', parameters: [
            'controller_name' => 'CoursController',
        ]);
    }
}
