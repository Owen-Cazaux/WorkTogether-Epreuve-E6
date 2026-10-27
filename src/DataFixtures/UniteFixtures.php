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
            [baiefixtures::REFERENCE_BAIE1, 'Unite 1']
                 ] as [$baiereference, $nom])
        {
            $unite = new Unite()
                ->setBaie($this->getReference($baiereference, Baie::class))
                ->setNom($nom);
            $manager->persist($unite);
        }





        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [BaieFixtures::class, EtatFixtures::class];
    }
}
