<?php

namespace App\Controller;

use App\Entity\Client;
use App\Form\EditProfilClientType;
use App\Form\EditProfilComptableType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

final class ProfilController extends AbstractController
{
    #[Route('/profil', name: 'app_profil')]
    #[IsGranted('ROLE_USER')]
    public function index(
        Request $request,
        EntityManagerInterface $em,
        UserPasswordHasherInterface $passwordHasher,
    ): Response
    {
        $utilisateur = $this->getUser();
        $role = $utilisateur->getRoles();
        if ($role == ['ROLE_CLIENT', 'ROLE_USER']) {
            $client = $utilisateur;
            $form = $this->createForm(EditProfilClientType::class, $client);
            $form->handleRequest($request);
                if ($form->isSubmitted() && $form->isValid()) {
                    $password = $form->get('motDePasse')->getData();
                    if (!is_string($password)) {
                        throw new \LogicException('Le mot de passe soumis doit être une chaîne de caractères.');
                    }
                    $client->setPassword($passwordHasher->hashPassword($client, $password));
                    $em->persist($client);
                    $em->flush();
                    return $this->redirectToRoute('app_profil');
                }

        }
        if ($role == ['ROLE_COMPTABLE', 'ROLE_USER']) {
            $comptable = $utilisateur;
            $form = $this->createForm(EditProfilComptableType::class, $comptable);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
                $password = $form->get('motDePasse')->getData();
                if (!is_string($password)) {
                    throw new \LogicException('Le mot de passe soumis doit être une chaîne de caractères.');
                }
                $comptable->setPassword($passwordHasher->hashPassword($comptable, $password));
                $em->persist($comptable);
                $em->flush();
                return $this->redirectToRoute('app_profil');
            }

        }
        return $this->render('profil/index.html.twig', [
            'client' => $client,]);
    }
}
