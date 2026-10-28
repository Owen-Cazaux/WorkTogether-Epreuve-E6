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
    public const REFERENCE_UNITE1 = 'unite-1';
    public const REFERENCE_UNITE2 = 'unite-2';
    public const REFERENCE_UNITE3 = 'unite-3';
    public const REFERENCE_UNITE4 = 'unite-4';
    public const REFERENCE_UNITE5 = 'unite-5';
    public function load(ObjectManager $manager): void
    {

        $unites = [
            [self::REFERENCE_UNITE1,BaieFixtures::REFERENCE_BAIE1 , EtatFixtures::REFERENCE_DISPONIBLE ,'unites 1'],
            [self::REFERENCE_UNITE2, BaieFixtures::REFERENCE_BAIE2, EtatFixtures::REFERENCE_DISPONIBLE, 'unite 2'],
            [self::REFERENCE_UNITE3, BaieFixtures::REFERENCE_BAIE3, EtatFixtures::REFERENCE_MAINTENANCE, 'unite 3'],
            [self::REFERENCE_UNITE4, BaieFixtures::REFERENCE_BAIE4, EtatFixtures::REFERENCE_DISPONIBLE, 'unite 4'],
            [self::REFERENCE_UNITE5, BaieFixtures::REFERENCE_BAIE5, EtatFixtures::REFERENCE_HORS_SERVICE, 'unite 5'],
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
