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
    public const REFERENCE_BAIE_CAMILLE1 = 'baie-camille-1';
    public const REFERENCE_BAIE_CAMILLE2 = 'baie-camille-2';
    public const REFERENCE_BAIE_CAMILLE3 = 'baie-camille-3';
    public const REFERENCE_BAIE_CAMILLE4 = 'baie-camille-4';
    public const REFERENCE_BAIE_CAMILLE5 = 'baie-camille-5';
    public const REFERENCE_BAIE_CAMILLE6 = 'baie-camille-6';
    public const REFERENCE_BAIE_CAMILLE7 = 'baie-camille-7';
    public const REFERENCE_BAIE_CAMILLE8 = 'baie-camille-8';
    public const REFERENCE_BAIE_CAMILLE9 = 'baie-camille-9';
    public const REFERENCE_BAIE_CAMILLE10 = 'baie-camille-10';

    public function load(ObjectManager $manager): void
    {
        $baies = [
            [self::REFERENCE_BAIE1, 'B-001', 42],
            [self::REFERENCE_BAIE2, 'B-002', 42],
            [self::REFERENCE_BAIE3, 'B-003', 42],
            [self::REFERENCE_BAIE4, 'B-004', 42],
            [self::REFERENCE_BAIE5, 'B-005', 42],
            [self::REFERENCE_BAIE_CAMILLE1, 'CAM-001', 5],
            [self::REFERENCE_BAIE_CAMILLE2, 'CAM-002', 5],
            [self::REFERENCE_BAIE_CAMILLE3, 'CAM-003', 5],
            [self::REFERENCE_BAIE_CAMILLE4, 'CAM-004', 5],
            [self::REFERENCE_BAIE_CAMILLE5, 'CAM-005', 5],
            [self::REFERENCE_BAIE_CAMILLE6, 'CAM-006', 5],
            [self::REFERENCE_BAIE_CAMILLE7, 'CAM-007', 5],
            [self::REFERENCE_BAIE_CAMILLE8, 'CAM-008', 5],
            [self::REFERENCE_BAIE_CAMILLE9, 'CAM-009', 5],
            [self::REFERENCE_BAIE_CAMILLE10, 'CAM-010', 5],
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
