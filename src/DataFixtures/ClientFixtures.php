<?php

namespace App\DataFixtures;

use App\Entity\Client;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

final class ClientFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $client = new Client();
        $client->setNom('Martin');
        $client->setPrenom('Camille');
        $client->setEmail('camille.martin@example.test');
        $client->setPassword(password_hash('ChangeMe123', PASSWORD_DEFAULT));
        $client->setDateCreation(new \DateTimeImmutable());
        $client->setRaisonSociale('');
        $client->setTelephone('06 08 98 36 72');
        $client->setAdresse('2 rue du martin');
        $client->setCodePostal('50000');
        $client->setVille('Paris');
        $client->setPays('France');
        $manager->persist($client);
        $manager->flush();
    }
}
