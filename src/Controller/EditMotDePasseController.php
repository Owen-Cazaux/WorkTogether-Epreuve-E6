<?php

namespace App\Controller;

use App\Form\EditMdpType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

final class EditMotDePasseController extends AbstractController
{
    #[Route('/edit/mot/de/passe', name: 'app_edit_mot_de_passe')]
    public function index(
        Request $request,
        EntityManagerInterface $em,
        UserPasswordHasherInterface $passwordHasher,): Response {

        $utilisateur = $this->getUser();
        $form = $this->createForm(EditMdpType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newPassword = $form->get('nouveauMotDePasse')->getData();

            $utilisateur->setPassword($passwordHasher->hashPassword($utilisateur, $newPassword));
            $em->persist($utilisateur);
            $em->flush();

            $this->addFlash('success','Mot de passe modifié');
            return $this->redirectToRoute('app_profil');
        }
        return $this->render('edit_mot_de_passe/index.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form->createView(),
        ]);
    }
}
