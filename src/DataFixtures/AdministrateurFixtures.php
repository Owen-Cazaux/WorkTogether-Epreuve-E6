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
        $administrateur->setNom('admin');
        $administrateur->setPrenom('admin');
        $administrateur->setEmail('admin.admin@gmail.com');
        $administrateur->setPassword('admin');
        $manager->persist($administrateur);
        $this->addReference(self::REFERENCE, $administrateur);
        $manager->flush();
    }
}
