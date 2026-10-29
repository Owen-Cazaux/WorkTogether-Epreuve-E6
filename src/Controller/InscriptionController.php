<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\InscriptionFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

final class InscriptionController extends AbstractController
{
    #[Route('/inscription', name: 'app_inscription')]
    public function index(
        Request $request,
        EntityManagerInterface $em,
        UserPasswordHasherInterface $passwordHasher,
    ): Response {
        $utilisateur = new Utilisateur();
        $form = $this->createForm(InscriptionFormType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $password = $form->get('motDePasse')->getData();
            if (!is_string($password)) {
                throw new \LogicException('Le mot de passe soumis doit être une chaîne de caractères.');
            }

            $utilisateur->setPassword($passwordHasher->hashPassword($utilisateur, $password));
            $em->persist($utilisateur);
            $em->flush();

            return $this->redirectToRoute('app_connexion');
        }

        return $this->render('inscription/index.html.twig', []);

    }
    #[Route('/inscription/client', name: 'app_inscription_client')]
    public function client() {


        return $this->render('inscription/client.html.twig', []);
    }

    #[Route('/inscription/comptable', name: 'app_inscription_comptable')]
    public function comptable() {


        return $this->render('inscription/comptable.html.twig', []);
    }
}
