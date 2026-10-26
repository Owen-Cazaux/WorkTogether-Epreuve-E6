<?php

namespace App\DataFixtures;

use App\Entity\Client;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

final class ClientFixtures extends Fixture
{
    public const REFERENCE_ATELIER = 'client-atelier-du-canal';
    public const REFERENCE_BUREAU = 'client-bureau-des-arts';

    public function load(ObjectManager $manager): void
    {
        foreach ([
            [self::REFERENCE_ATELIER, 'Atelier du Canal', '01 40 20 30 40', '12 rue du Canal', '75010', 'Paris', 'France'],
            [self::REFERENCE_BUREAU, 'Bureau des Arts', '04 72 10 20 30', '8 place Bellecour', '69002', 'Lyon', 'France'],
        ] as [$reference, $raisonSociale, $telephone, $adresse, $codePostal, $ville, $pays]) {
            $client = (new Client())
                ->setRaisonSociale($raisonSociale)
                ->setTelephone($telephone)
                ->setAdresse($adresse)
                ->setCodePostal($codePostal)
                ->setVille($ville)
                ->setPays($pays);
            $manager->persist($client);
            $this->addReference($reference, $client);
        }
    }
}
