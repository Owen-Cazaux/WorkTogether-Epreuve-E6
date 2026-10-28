<?php

namespace App\Controller;

use App\Repository\OffreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class NosOffresController extends AbstractController
{
    #[Route('/nosoffres', name: 'app_nos_offres')]
    public function index(OffreRepository $offreRepository): Response
    {
        $nos_offres = $offreRepository->findAll();
        return $this->render('nos_offres/index.html.twig', [
            'nos_offres' => $nos_offres,
        ]);

    }
}
