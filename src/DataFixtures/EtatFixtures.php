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
        $etats = [
            [self::REFERENCE_DISPONIBLE, 'Disponible'],
            [self::REFERENCE_MAINTENANCE,'Maintenance'],
            [self::REFERENCE_HORS_SERVICE, 'Hors service']
        ];
        foreach ($etats as [$reference, $label]) {
            $etat = new Etat()
                ->setLibelle($label);
            $manager->persist($etat);
            $this->addReference($reference, $etat);
        }

        $manager->flush();
    }
}
