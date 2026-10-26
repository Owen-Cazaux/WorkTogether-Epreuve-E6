<?php

namespace App\DataFixtures;

use App\Entity\Administrateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

final class AdministrateurFixtures extends Fixture
{
    public const REFERENCE = 'administrateur';

    public function load(ObjectManager $manager): void
    {
        $administrateur = new Administrateur();
        $manager->persist($administrateur);
        $this->addReference(self::REFERENCE, $administrateur);
    }
}
