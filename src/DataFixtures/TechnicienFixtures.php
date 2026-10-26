<?php

namespace App\DataFixtures;

use App\Entity\Technicien;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

final class TechnicienFixtures extends Fixture
{
    public const REFERENCE_ALEX = 'technicien-alex-durand';
    public const REFERENCE_SOFIA = 'technicien-sofia-bernard';

    public function load(ObjectManager $manager): void
    {
        foreach ([
            [self::REFERENCE_ALEX, 'Durand', 'Alex'],
            [self::REFERENCE_SOFIA, 'Bernard', 'Sofia'],
        ] as [$reference, $nom, $prenom]) {
            $technicien = (new Technicien())
                ->setNom($nom)
                ->setPrenom($prenom);
            $manager->persist($technicien);
            $this->addReference($reference, $technicien);
        }

        $manager->flush();
    }
}
