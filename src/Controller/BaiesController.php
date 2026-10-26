<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BaiesController extends AbstractController
{
    #[Route('/baies', name: 'app_baies')]
    public function index(): Response
    {
        return $this->render('baies/index.html.twig', [
            'controller_name' => 'BaiesController',
        ]);
    }
}
