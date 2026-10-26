<?php

namespace App\DataFixtures;

use App\Entity\Baie;
use App\Entity\Etat;
use App\Entity\Unite;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

final class UniteFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        foreach ([
            ['Serveur web', EtatFixtures::REFERENCE_DISPONIBLE, BaieFixtures::REFERENCE_BAIE_01],
            ['Serveur base de données', EtatFixtures::REFERENCE_MAINTENANCE, BaieFixtures::REFERENCE_BAIE_01],
            ['Serveur applicatif', EtatFixtures::REFERENCE_DISPONIBLE, BaieFixtures::REFERENCE_BAIE_02],
            ['Serveur sauvegarde', EtatFixtures::REFERENCE_HORS_SERVICE, BaieFixtures::REFERENCE_BAIE_02],
        ] as [$nom, $etatReference, $baieReference]) {
            $unite = (new Unite())
                ->setNom($nom)
                ->setEtat($this->getReference($etatReference, Etat::class))
                ->setBaie($this->getReference($baieReference, Baie::class));
            $manager->persist($unite);
        }
    }

    public function getDependencies(): array
    {
        return [BaieFixtures::class, EtatFixtures::class];
    }
}
