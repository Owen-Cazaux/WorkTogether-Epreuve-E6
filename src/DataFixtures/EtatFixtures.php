<?php

namespace App\DataFixtures;

use App\Entity\Etat;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

final class EtatFixtures extends Fixture
{
    public const REFERENCE_DISPONIBLE = 'etat-disponible';
    public const REFERENCE_MAINTENANCE = 'etat-maintenance';
    public const REFERENCE_HORS_SERVICE = 'etat-hors-service';

    public function load(ObjectManager $manager): void
    {
        foreach ([
            self::REFERENCE_DISPONIBLE => 'Disponible',
            self::REFERENCE_MAINTENANCE => 'En maintenance',
            self::REFERENCE_HORS_SERVICE => 'Hors service',
        ] as $reference => $libelle) {
            $etat = (new Etat())->setLibelle($libelle);
            $manager->persist($etat);
            $this->addReference($reference, $etat);
        }
    }
}
