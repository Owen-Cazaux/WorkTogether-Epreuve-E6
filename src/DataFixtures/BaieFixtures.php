<?php

namespace App\DataFixtures;

use App\Entity\Baie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

final class BaieFixtures extends Fixture
{
    public const REFERENCE_BAIE1 = 'baie1';
    public const REFERENCE_BAIE2 = 'baie2';
    public const REFERENCE_BAIE3 = 'baie3';
    public const REFERENCE_BAIE4 = 'baie4';
    public const REFERENCE_BAIE5 = 'baie5';
    
    public function load(ObjectManager $manager): void
    {
        $baies = [
            [self::REFERENCE_BAIE1, 'B-001', 42],
            [self::REFERENCE_BAIE2, 'B-002', 40],
            [self::REFERENCE_BAIE3, 'B-003', 36],
            [self::REFERENCE_BAIE4, 'B-004', 48],
            [self::REFERENCE_BAIE5, 'B-005', 32],
        ];
        foreach ($baies as [$reference, $numero, $nombre]){
            $baie = new Baie();
            $baie->setNumero($numero);
            $baie->setNombreUnités($nombre);
            $manager->persist($baie);
            $this->addReference($reference, $baie);
        }


        $manager->flush();
    }
}
