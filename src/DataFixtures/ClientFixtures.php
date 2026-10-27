<?php

namespace App\DataFixtures;

use App\Entity\Client;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

final class ClientFixtures extends Fixture
{

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }
    public function load(ObjectManager $manager): void
    {
        $client = new Client()
            ->setNom('Martin')
        ->setPrenom('Camille')
        ->setEmail('camille.martin@example.test');
        $password = $this->hasher->hashPassword($client, 'ChangeMe123');
        $client->setPassword($password)
            ->setDateCreation(new \DateTimeImmutable())
            ->setRaisonSociale('')
            ->setTelephone('06 08 98 36 72')
            ->setAdresse('2 rue du martin')
            ->setCodePostal('50000')
            ->setVille('Paris')
            ->setPays('France');
        $manager->persist($client);
        $manager->flush();
    }
}
