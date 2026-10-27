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
    const   REFERENCE_UNITE1 = 'unite-1';
    public function load(ObjectManager $manager): void
    {

        $unites = [
            [self::REFERENCE_UNITE1,BaieFixtures::REFERENCE_BAIE1 , EtatFixtures::REFERENCE_DISPONIBLE ,'unites 1']
        ];
        foreach ($unites as [$reference,$baieReference,$etatReference, $nom])
        {
            $unite = new Unite()
                ->setBaie($this->getReference($baieReference, Baie::class))
                ->setEtat($this->getReference($etatReference, Etat::class))
                ->setNom($nom);
            $manager->persist($unite);
            $this->addReference($reference, $unite);
        }





        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [BaieFixtures::class, EtatFixtures::class];
    }
}
