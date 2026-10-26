<?php

namespace App\DataFixtures;

use App\Entity\Utilisateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

final class UtilisateurFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $utilisateur = (new Utilisateur())
            ->setNom('Martin')
            ->setPrenom('Camille')
            ->setEmail('camille.martin@example.test')
            ->setPassword(password_hash('ChangeMe123!', PASSWORD_DEFAULT))
            ->setDateCreation(new \DateTimeImmutable());
        $manager->persist($utilisateur);
        $manager->flush();
    }
}
