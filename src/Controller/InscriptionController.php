<?php

namespace App\Controller;

use App\Entity\Role;
use App\Entity\Utilisateur;
use App\Entity\Client;
use App\Entity\Comptable;
use App\Form\InscriptionComptableType;
use App\Form\InscriptionClientType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

final class InscriptionController extends AbstractController
{
    #[Route('/inscription', name: 'app_inscription')]
    public function index() {

        return $this->render('inscription/index.html.twig', []);
    }
    #[Route('/inscription/client', name: 'app_inscription_client')]
    public function client(Request $request,
                           EntityManagerInterface $em,
                           UserPasswordHasherInterface $passwordHasher,) : Response {
        $client = new Client();
        $form = $this->createForm(InscriptionClientType::class, $client);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $password = $form->get('motDePasse')->getData();
            if (!is_string($password)) {
                throw new \LogicException('Le mot de passe soumis doit être une chaîne de caractères.');
            }

            $client->setPassword($passwordHasher->hashPassword($client, $password));
            $client->setRoles(['ROLE_CLIENT', 'ROLE_USER']);
            $em->persist($client);
            $em->flush();

            return $this->redirectToRoute('app_connexion');
        }


        return $this->render('inscription/client.html.twig', [
            'form' => $form
            ]);
    }

    #[Route('/inscription/comptable', name: 'app_inscription_comptable')]
    public function comptable(Request $request,
                              EntityManagerInterface $em,
                              UserPasswordHasherInterface $passwordHasher,) : Response {
        $comptable = new Comptable();
        $form = $this->createForm(InscriptionComptableType::class, $comptable);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $password = $form->get('motDePasse')->getData();
            if (!is_string($password)) {
                throw new \LogicException('Le mot de passe soumis doit être une chaîne de caractères.');
            }

            $comptable->setPassword($passwordHasher->hashPassword($comptable, $password));
            $comptable->setRoles(['ROLE_COMPTABLE', 'ROLE_USER']);
            $em->persist($comptable);
            $em->flush();

            return $this->redirectToRoute('app_connexion');
        }


        return $this->render('inscription/comptable.html.twig', [
            'form' => $form
            ]);
    }
}
