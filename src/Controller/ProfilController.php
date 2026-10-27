<?php

namespace App\Controller;

use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

final class ProfilController extends AbstractController
{
    #[Route('/profil', name: 'app_profil')]
    #[IsGranted('ROLE_USER')]
    public function index(UtilisateurRepository $utilisateurRepository): Response
    {
        $utilisateur = $this->getUser();

        return $this->render('profil/index.html.twig', [
            'utilisateur' => $utilisateur,
        ]);


    }
}
