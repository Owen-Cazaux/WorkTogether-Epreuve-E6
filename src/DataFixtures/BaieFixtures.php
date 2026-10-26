<?php

namespace App\DataFixtures;

use App\Entity\Baie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

final class BaieFixtures extends Fixture
{
    public const REFERENCE_BAIE_01 = 'baie-01';
    public const REFERENCE_BAIE_02 = 'baie-02';

    public function load(ObjectManager $manager): void
    {
        foreach ([
            [self::REFERENCE_BAIE_01, 'BAIE-01', 2],
            [self::REFERENCE_BAIE_02, 'BAIE-02', 2],
        ] as [$reference, $numero, $nombreUnites]) {
            $baie = (new Baie())
                ->setNumero($numero)
                ->setNombreUnités($nombreUnites);
            $manager->persist($baie);
            $this->addReference($reference, $baie);
        }
    }
}
