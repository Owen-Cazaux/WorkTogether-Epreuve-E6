<?php

namespace App\Controller;

use App\Repository\OffreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PannierController extends AbstractController
{
    #[Route('/pannier', name: 'app_pannier')]
    public function index(): Response
    {
        return $this->render('pannier/index.html.twig', [

        ]);
    }

    #[Route('/pannier/ajouter/', name: 'app_ajouter_pannier',)]
    public function addPannier(): Response
    {


        return $this->render('pannier/ajouter.html.twig', [

        ]);
    }
}
