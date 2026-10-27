<?php

namespace App\DataFixtures;

use App\Entity\Client;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

final class ClientFixtures extends Fixture
{
    public const REFERENCES_CAMILLE_MARTIN = 'camille-martin';

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }
    public function load(ObjectManager $manager): void
    {
        $clients = [
            [self::REFERENCES_CAMILLE_MARTIN, 'Martin', 'Camille', 'camille.martin@example.test', 'ChangeMe123', 'femme','06 08 98 36 72', '500000','Paris', 'Frane']
        ];

        foreach ($clients as [$reference, $nom, $prenom, $email, $plainpassword, $raisonsociale, $telephone, $adresse, $codepostal, $ville, $pays]) {
            $client = new Client()
                ->setNom($nom)
                ->setPrenom($prenom)
                ->setEmail($email);
            $password = $this->hasher->hashPassword($client, $plainpassword);
            $client->setPassword($password)
                ->setRaisonSociale('')
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
