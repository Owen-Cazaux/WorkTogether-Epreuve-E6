<?php

namespace App\DataFixtures;

use App\Entity\Baie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

final class BaieFixtures extends Fixture
{
    public const REFERENCE_BAIE1 = 'baie1';
    
    public function load(ObjectManager $manager): void
    {
        $baies = [
            [self::REFERENCE_BAIE1, 'B-001', 42]
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
