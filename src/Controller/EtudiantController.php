<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class EtudiantController extends AbstractController
{
    #[Route(path: '/etudiant/index', name: 'etudiant_index')]
    public function index(): Response
    {
        return $this->render(view: 'etudiant/index.html.twig', parameters: [
            'controller_name' => 'EtudiantController',
        ]);
    }
}
