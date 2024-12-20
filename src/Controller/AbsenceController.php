<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AbsenceController extends AbstractController
{
    #[Route(path: '/absence/index', name: 'absence_index')]
    public function index(): Response
    {
        return $this->render(view: 'absence/index.html.twig', parameters: [
            'controller_name' => 'AbsenceController',
        ]);
    }
}
