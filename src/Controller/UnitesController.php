<?php

namespace App\Controller;

use App\Repository\UniteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class UnitesController extends AbstractController
{
    #[Route('/unites', name: 'app_unites')]
    public function index(UniteRepository $uniteRepository): Response
    {
        $unites = $uniteRepository->findBy([], ['nom' => 'ASC']);

        return $this->render('unites/index.html.twig', [
            'unites' => $unites,
        ]);
    }
}
