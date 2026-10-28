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
    public const REFERENCE_UNITE_CAMILLE1 = 'unite-camille-1';
    public const REFERENCE_UNITE_CAMILLE2 = 'unite-camille-2';
    public const REFERENCE_UNITE_CAMILLE3 = 'unite-camille-3';
    public const REFERENCE_UNITE_CAMILLE4 = 'unite-camille-4';
    public const REFERENCE_UNITE_CAMILLE5 = 'unite-camille-5';
    public const REFERENCE_UNITE_CAMILLE6 = 'unite-camille-6';
    public const REFERENCE_UNITE_CAMILLE7 = 'unite-camille-7';
    public const REFERENCE_UNITE_CAMILLE8 = 'unite-camille-8';
    public const REFERENCE_UNITE_CAMILLE9 = 'unite-camille-9';
    public const REFERENCE_UNITE_CAMILLE10 = 'unite-camille-10';
    public const REFERENCE_UNITE_CAMILLE11 = 'unite-camille-11';
    public const REFERENCE_UNITE_CAMILLE12 = 'unite-camille-12';
    public const REFERENCE_UNITE_CAMILLE13 = 'unite-camille-13';
    public const REFERENCE_UNITE_CAMILLE14 = 'unite-camille-14';
    public const REFERENCE_UNITE_CAMILLE15 = 'unite-camille-15';
    public const REFERENCE_UNITE_CAMILLE16 = 'unite-camille-16';
    public const REFERENCE_UNITE_CAMILLE17 = 'unite-camille-17';
    public const REFERENCE_UNITE_CAMILLE18 = 'unite-camille-18';
    public const REFERENCE_UNITE_CAMILLE19 = 'unite-camille-19';
    public const REFERENCE_UNITE_CAMILLE20 = 'unite-camille-20';
    public const REFERENCE_UNITE_CAMILLE21 = 'unite-camille-21';
    public const REFERENCE_UNITE_CAMILLE22 = 'unite-camille-22';
    public const REFERENCE_UNITE_CAMILLE23 = 'unite-camille-23';
    public const REFERENCE_UNITE_CAMILLE24 = 'unite-camille-24';
    public const REFERENCE_UNITE_CAMILLE25 = 'unite-camille-25';
    public const REFERENCE_UNITE_CAMILLE26 = 'unite-camille-26';
    public const REFERENCE_UNITE_CAMILLE27 = 'unite-camille-27';
    public const REFERENCE_UNITE_CAMILLE28 = 'unite-camille-28';
    public const REFERENCE_UNITE_CAMILLE29 = 'unite-camille-29';
    public const REFERENCE_UNITE_CAMILLE30 = 'unite-camille-30';
    public const REFERENCE_UNITE_CAMILLE31 = 'unite-camille-31';
    public const REFERENCE_UNITE_CAMILLE32 = 'unite-camille-32';
    public const REFERENCE_UNITE_CAMILLE33 = 'unite-camille-33';
    public const REFERENCE_UNITE_CAMILLE34 = 'unite-camille-34';
    public const REFERENCE_UNITE_CAMILLE35 = 'unite-camille-35';
    public const REFERENCE_UNITE_CAMILLE36 = 'unite-camille-36';
    public const REFERENCE_UNITE_CAMILLE37 = 'unite-camille-37';
    public const REFERENCE_UNITE_CAMILLE38 = 'unite-camille-38';
    public const REFERENCE_UNITE_CAMILLE39 = 'unite-camille-39';
    public const REFERENCE_UNITE_CAMILLE40 = 'unite-camille-40';
    public const REFERENCE_UNITE_CAMILLE41 = 'unite-camille-41';
    public const REFERENCE_UNITE_CAMILLE42 = 'unite-camille-42';
    public const REFERENCE_UNITE_CAMILLE43 = 'unite-camille-43';
    public const REFERENCE_UNITE_CAMILLE44 = 'unite-camille-44';
    public const REFERENCE_UNITE_CAMILLE45 = 'unite-camille-45';
    public const REFERENCE_UNITE_CAMILLE46 = 'unite-camille-46';
    public const REFERENCE_UNITE_CAMILLE47 = 'unite-camille-47';
    public const REFERENCE_UNITE_CAMILLE48 = 'unite-camille-48';
    public const REFERENCE_UNITE_CAMILLE49 = 'unite-camille-49';
    public const REFERENCE_UNITE_CAMILLE50 = 'unite-camille-50';
    public const REFERENCE_UNITE_CAMILLE51 = 'unite-camille-51';
    public const REFERENCE_UNITE_CAMILLE52 = 'unite-camille-52';
    public const REFERENCE_UNITE_CAMILLE53 = 'unite-camille-53';
    public const REFERENCE_UNITE_CAMILLE54 = 'unite-camille-54';
    public const REFERENCE_UNITE_CAMILLE55 = 'unite-camille-55';
    public const REFERENCE_UNITE_CAMILLE56 = 'unite-camille-56';
    public const REFERENCE_UNITE_CAMILLE57 = 'unite-camille-57';
    public const REFERENCE_UNITE_CAMILLE58 = 'unite-camille-58';
    public const REFERENCE_UNITE_CAMILLE59 = 'unite-camille-59';
    public const REFERENCE_UNITE_CAMILLE60 = 'unite-camille-60';
    public const REFERENCE_UNITE_CAMILLE61 = 'unite-camille-61';
    public const REFERENCE_UNITE_CAMILLE62 = 'unite-camille-62';
    public const REFERENCE_UNITE_CAMILLE63 = 'unite-camille-63';
    public const REFERENCE_UNITE_CAMILLE64 = 'unite-camille-64';
    public const REFERENCE_UNITE_CAMILLE65 = 'unite-camille-65';
    public const REFERENCE_UNITE_CAMILLE66 = 'unite-camille-66';
    public const REFERENCE_UNITE_CAMILLE67 = 'unite-camille-67';
    public const REFERENCE_UNITE_CAMILLE68 = 'unite-camille-68';
    public const REFERENCE_UNITE_CAMILLE69 = 'unite-camille-69';
    public const REFERENCE_UNITE_CAMILLE70 = 'unite-camille-70';

    public function load(ObjectManager $manager): void
    {

        $unites = [
            [self::REFERENCE_UNITE1,BaieFixtures::REFERENCE_BAIE1 , EtatFixtures::REFERENCE_DISPONIBLE ,'unites 1'],
            [self::REFERENCE_UNITE2, BaieFixtures::REFERENCE_BAIE2, EtatFixtures::REFERENCE_DISPONIBLE, 'unite 2'],
            [self::REFERENCE_UNITE3, BaieFixtures::REFERENCE_BAIE3, EtatFixtures::REFERENCE_MAINTENANCE, 'unite 3'],
            [self::REFERENCE_UNITE4, BaieFixtures::REFERENCE_BAIE4, EtatFixtures::REFERENCE_DISPONIBLE, 'unite 4'],
            [self::REFERENCE_UNITE5, BaieFixtures::REFERENCE_BAIE5, EtatFixtures::REFERENCE_HORS_SERVICE, 'unite 5'],
            [self::REFERENCE_UNITE_CAMILLE1, BaieFixtures::REFERENCE_BAIE_CAMILLE1, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 01'],
            [self::REFERENCE_UNITE_CAMILLE2, BaieFixtures::REFERENCE_BAIE_CAMILLE1, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 02'],
            [self::REFERENCE_UNITE_CAMILLE3, BaieFixtures::REFERENCE_BAIE_CAMILLE1, EtatFixtures::REFERENCE_MAINTENANCE, 'Camille - Unite 03'],
            [self::REFERENCE_UNITE_CAMILLE4, BaieFixtures::REFERENCE_BAIE_CAMILLE1, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 04'],
            [self::REFERENCE_UNITE_CAMILLE5, BaieFixtures::REFERENCE_BAIE_CAMILLE1, EtatFixtures::REFERENCE_HORS_SERVICE, 'Camille - Unite 05'],
            [self::REFERENCE_UNITE_CAMILLE6, BaieFixtures::REFERENCE_BAIE_CAMILLE2, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 06'],
            [self::REFERENCE_UNITE_CAMILLE7, BaieFixtures::REFERENCE_BAIE_CAMILLE2, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 07'],
            [self::REFERENCE_UNITE_CAMILLE8, BaieFixtures::REFERENCE_BAIE_CAMILLE2, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 08'],
            [self::REFERENCE_UNITE_CAMILLE9, BaieFixtures::REFERENCE_BAIE_CAMILLE2, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 09'],
            [self::REFERENCE_UNITE_CAMILLE10, BaieFixtures::REFERENCE_BAIE_CAMILLE2, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 10'],
            [self::REFERENCE_UNITE_CAMILLE11, BaieFixtures::REFERENCE_BAIE_CAMILLE3, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 11'],
            [self::REFERENCE_UNITE_CAMILLE12, BaieFixtures::REFERENCE_BAIE_CAMILLE3, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 12'],
            [self::REFERENCE_UNITE_CAMILLE13, BaieFixtures::REFERENCE_BAIE_CAMILLE3, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 13'],
            [self::REFERENCE_UNITE_CAMILLE14, BaieFixtures::REFERENCE_BAIE_CAMILLE3, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 14'],
            [self::REFERENCE_UNITE_CAMILLE15, BaieFixtures::REFERENCE_BAIE_CAMILLE3, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 15'],
            [self::REFERENCE_UNITE_CAMILLE16, BaieFixtures::REFERENCE_BAIE_CAMILLE4, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 16'],
            [self::REFERENCE_UNITE_CAMILLE17, BaieFixtures::REFERENCE_BAIE_CAMILLE4, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 17'],
            [self::REFERENCE_UNITE_CAMILLE18, BaieFixtures::REFERENCE_BAIE_CAMILLE4, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 18'],
            [self::REFERENCE_UNITE_CAMILLE19, BaieFixtures::REFERENCE_BAIE_CAMILLE4, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 19'],
            [self::REFERENCE_UNITE_CAMILLE20, BaieFixtures::REFERENCE_BAIE_CAMILLE4, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 20'],
            [self::REFERENCE_UNITE_CAMILLE21, BaieFixtures::REFERENCE_BAIE_CAMILLE5, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 21'],
            [self::REFERENCE_UNITE_CAMILLE22, BaieFixtures::REFERENCE_BAIE_CAMILLE5, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 22'],
            [self::REFERENCE_UNITE_CAMILLE23, BaieFixtures::REFERENCE_BAIE_CAMILLE5, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 23'],
            [self::REFERENCE_UNITE_CAMILLE24, BaieFixtures::REFERENCE_BAIE_CAMILLE5, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 24'],
            [self::REFERENCE_UNITE_CAMILLE25, BaieFixtures::REFERENCE_BAIE_CAMILLE5, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 25'],
            [self::REFERENCE_UNITE_CAMILLE26, BaieFixtures::REFERENCE_BAIE_CAMILLE6, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 26'],
            [self::REFERENCE_UNITE_CAMILLE27, BaieFixtures::REFERENCE_BAIE_CAMILLE6, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 27'],
            [self::REFERENCE_UNITE_CAMILLE28, BaieFixtures::REFERENCE_BAIE_CAMILLE6, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 28'],
            [self::REFERENCE_UNITE_CAMILLE29, BaieFixtures::REFERENCE_BAIE_CAMILLE6, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 29'],
            [self::REFERENCE_UNITE_CAMILLE30, BaieFixtures::REFERENCE_BAIE_CAMILLE6, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 30'],
            [self::REFERENCE_UNITE_CAMILLE31, BaieFixtures::REFERENCE_BAIE_CAMILLE7, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 31'],
            [self::REFERENCE_UNITE_CAMILLE32, BaieFixtures::REFERENCE_BAIE_CAMILLE7, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 32'],
            [self::REFERENCE_UNITE_CAMILLE33, BaieFixtures::REFERENCE_BAIE_CAMILLE7, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 33'],
            [self::REFERENCE_UNITE_CAMILLE34, BaieFixtures::REFERENCE_BAIE_CAMILLE7, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 34'],
            [self::REFERENCE_UNITE_CAMILLE35, BaieFixtures::REFERENCE_BAIE_CAMILLE7, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 35'],
            [self::REFERENCE_UNITE_CAMILLE36, BaieFixtures::REFERENCE_BAIE_CAMILLE8, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 36'],
            [self::REFERENCE_UNITE_CAMILLE37, BaieFixtures::REFERENCE_BAIE_CAMILLE8, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 37'],
            [self::REFERENCE_UNITE_CAMILLE38, BaieFixtures::REFERENCE_BAIE_CAMILLE8, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 38'],
            [self::REFERENCE_UNITE_CAMILLE39, BaieFixtures::REFERENCE_BAIE_CAMILLE8, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 39'],
            [self::REFERENCE_UNITE_CAMILLE40, BaieFixtures::REFERENCE_BAIE_CAMILLE8, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 40'],
            [self::REFERENCE_UNITE_CAMILLE41, BaieFixtures::REFERENCE_BAIE_CAMILLE9, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 41'],
            [self::REFERENCE_UNITE_CAMILLE42, BaieFixtures::REFERENCE_BAIE_CAMILLE9, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 42'],
            [self::REFERENCE_UNITE_CAMILLE43, BaieFixtures::REFERENCE_BAIE_CAMILLE9, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 43'],
            [self::REFERENCE_UNITE_CAMILLE44, BaieFixtures::REFERENCE_BAIE_CAMILLE9, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 44'],
            [self::REFERENCE_UNITE_CAMILLE45, BaieFixtures::REFERENCE_BAIE_CAMILLE9, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 45'],
            [self::REFERENCE_UNITE_CAMILLE46, BaieFixtures::REFERENCE_BAIE_CAMILLE10, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 46'],
            [self::REFERENCE_UNITE_CAMILLE47, BaieFixtures::REFERENCE_BAIE_CAMILLE10, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 47'],
            [self::REFERENCE_UNITE_CAMILLE48, BaieFixtures::REFERENCE_BAIE_CAMILLE10, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 48'],
            [self::REFERENCE_UNITE_CAMILLE49, BaieFixtures::REFERENCE_BAIE_CAMILLE10, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 49'],
            [self::REFERENCE_UNITE_CAMILLE50, BaieFixtures::REFERENCE_BAIE_CAMILLE10, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 50'],
            [self::REFERENCE_UNITE_CAMILLE51, BaieFixtures::REFERENCE_BAIE_CAMILLE1, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 51'],
            [self::REFERENCE_UNITE_CAMILLE52, BaieFixtures::REFERENCE_BAIE_CAMILLE1, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 52'],
            [self::REFERENCE_UNITE_CAMILLE53, BaieFixtures::REFERENCE_BAIE_CAMILLE2, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 53'],
            [self::REFERENCE_UNITE_CAMILLE54, BaieFixtures::REFERENCE_BAIE_CAMILLE2, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 54'],
            [self::REFERENCE_UNITE_CAMILLE55, BaieFixtures::REFERENCE_BAIE_CAMILLE3, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 55'],
            [self::REFERENCE_UNITE_CAMILLE56, BaieFixtures::REFERENCE_BAIE_CAMILLE3, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 56'],
            [self::REFERENCE_UNITE_CAMILLE57, BaieFixtures::REFERENCE_BAIE_CAMILLE4, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 57'],
            [self::REFERENCE_UNITE_CAMILLE58, BaieFixtures::REFERENCE_BAIE_CAMILLE4, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 58'],
            [self::REFERENCE_UNITE_CAMILLE59, BaieFixtures::REFERENCE_BAIE_CAMILLE5, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 59'],
            [self::REFERENCE_UNITE_CAMILLE60, BaieFixtures::REFERENCE_BAIE_CAMILLE5, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 60'],
            [self::REFERENCE_UNITE_CAMILLE61, BaieFixtures::REFERENCE_BAIE_CAMILLE6, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 61'],
            [self::REFERENCE_UNITE_CAMILLE62, BaieFixtures::REFERENCE_BAIE_CAMILLE6, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 62'],
            [self::REFERENCE_UNITE_CAMILLE63, BaieFixtures::REFERENCE_BAIE_CAMILLE7, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 63'],
            [self::REFERENCE_UNITE_CAMILLE64, BaieFixtures::REFERENCE_BAIE_CAMILLE7, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 64'],
            [self::REFERENCE_UNITE_CAMILLE65, BaieFixtures::REFERENCE_BAIE_CAMILLE8, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 65'],
            [self::REFERENCE_UNITE_CAMILLE66, BaieFixtures::REFERENCE_BAIE_CAMILLE8, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 66'],
            [self::REFERENCE_UNITE_CAMILLE67, BaieFixtures::REFERENCE_BAIE_CAMILLE9, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 67'],
            [self::REFERENCE_UNITE_CAMILLE68, BaieFixtures::REFERENCE_BAIE_CAMILLE9, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 68'],
            [self::REFERENCE_UNITE_CAMILLE69, BaieFixtures::REFERENCE_BAIE_CAMILLE10, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 69'],
            [self::REFERENCE_UNITE_CAMILLE70, BaieFixtures::REFERENCE_BAIE_CAMILLE10, EtatFixtures::REFERENCE_DISPONIBLE, 'Camille - Unite 70'],
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
