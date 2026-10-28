<?php

namespace App\DataFixtures;

use App\Entity\Client;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

final class ClientFixtures extends Fixture
{
    public const REFERENCES_CAMILLE_MARTIN = 'camille-martin';
    public const REFERENCE_CLIENT2 = 'client2';
    public const REFERENCE_CLIENT3 = 'client3';
    public const REFERENCE_CLIENT4 = 'client4';
    public const REFERENCE_CLIENT5 = 'client5';

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }
    public function load(ObjectManager $manager): void
    {
        $clients = [
            [self::REFERENCES_CAMILLE_MARTIN, 'Martin', 'Camille', 'camille.martin@example.test', 'ChangeMe123', 'femme','06 08 98 36 72','4 rue du roux' , '500000','Paris', 'France'],
            [self::REFERENCE_CLIENT2, 'Bernard', 'Lucas', 'lucas.bernard@example.test', 'ChangeMe123', 'Atelier Bernard', '06 11 22 33 44', '12 rue des Lilas', '75011', 'Paris', 'France'],
            [self::REFERENCE_CLIENT3, 'Petit', 'Emma', 'emma.petit@example.test', 'ChangeMe123', 'Solutions Petit', '06 22 33 44 55', '8 avenue Victor Hugo', '69002', 'Lyon', 'France'],
            [self::REFERENCE_CLIENT4, 'Robert', 'Hugo', 'hugo.robert@example.test', 'ChangeMe123', 'Services Robert', '06 33 44 55 66', '25 rue Nationale', '59000', 'Lille', 'France'],
            [self::REFERENCE_CLIENT5, 'Richard', 'Chloe', 'chloe.richard@example.test', 'ChangeMe123', 'Richard Informatique', '06 44 55 66 77', '3 place du Marche', '33000', 'Bordeaux', 'France'],
        ];

        foreach ($clients as [$reference, $nom, $prenom, $email, $plainPassword, $raisonSociale, $telephone, $adresse, $codepostal, $ville, $pays]) {
            $client = new Client()
                ->setNom($nom)
                ->setPrenom($prenom)
                ->setEmail($email);
            $password = $this->hasher->hashPassword($client, $plainPassword);
            $client->setPassword($password)
                ->setRaisonSociale($raisonSociale)
                ->setTelephone($telephone)
                ->setAdresse($adresse)
                ->setCodePostal($codepostal)
                ->setVille($ville)
                ->setPays($pays);
            $manager->persist($client);
            $this->addReference($reference, $client);
        }

        $manager->flush();
    }
}
