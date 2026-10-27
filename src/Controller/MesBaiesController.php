<?php

namespace App\Controller;

use App\Repository\BaieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MesBaiesController extends AbstractController
{
    #[Route('/baies', name: 'app_baies')]
    public function index(BaieRepository $baieRepository): Response
    {
        $baies = $baieRepository->getBaieParUtilisateur($this->getUser());

        return $this->render('baies/index.html.twig', [
            'baies' => $baies,
        ]);
    }
}
