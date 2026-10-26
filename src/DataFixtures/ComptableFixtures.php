<?php

namespace App\DataFixtures;

use App\Entity\Comptable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

final class ComptableFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $manager->persist(new Comptable());
        $manager->flush();
    }
}
