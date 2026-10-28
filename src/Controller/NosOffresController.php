<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class NosOffresController extends AbstractController
{
    #[Route('/nos/offres', name: 'app_nos_offres')]
    public function index(): Response
    {
        return $this->render('nos_offres/index.html.twig', [
            'controller_name' => 'NosOffresController',
        ]);
    }
}
