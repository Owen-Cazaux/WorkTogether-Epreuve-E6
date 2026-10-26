<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class UnitesController extends AbstractController
{
    #[Route('/unites', name: 'app_unites')]
    public function index(): Response
    {
        return $this->render('unites/index.html.twig', [
            'controller_name' => 'UnitesController',
        ]);
    }
}
