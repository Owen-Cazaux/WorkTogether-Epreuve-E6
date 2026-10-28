<?php

namespace App\DataFixtures;

use App\Entity\Administrateur;
use App\Entity\Offre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

final class OffreFixtures extends Fixture implements DependentFixtureInterface
{
    public const REFERENCE_OFFRE1 = 'offre1';
    public const REFERENCE_OFFRE2 = 'offre2';
    public const REFERENCE_OFFRE3 = 'offre3';
    public const REFERENCE_OFFRE4 = 'offre4';
    public const REFERENCE_OFFRE5 = self::REFERENCE_OFFRE4;
    public function load(ObjectManager $manager): void
    {
        foreach ([
            [self::REFERENCE_OFFRE1, 'Base', 1, '100.00', '0.00', '10.00'],
            [self::REFERENCE_OFFRE2, 'Start-up', 10, '900.00', '10.00', '15.00'],
            [self::REFERENCE_OFFRE3, 'PME', 21, '1680.00', '20.00', '20.00'],
            [self::REFERENCE_OFFRE4, 'Entreprise', 42, '2940.00', '30.00', '25.00'],
        ] as [$reference, $nom, $nombreUnites, $prixMensuel, $remise, $remiseAnnuelle]) {
            $offre = (new Offre())
                ->addAdministrateur($this->getReference(AdministrateurFixtures::REFERENCE_ADMIN_1, Administrateur::class))
                ->setNom($nom)
                ->setNombreUnites($nombreUnites)
                ->setPrixMensuel($prixMensuel)
                ->setRemisePourcentage($remise)
                ->setRemiseAnnuellePourcentage($remiseAnnuelle);
            $manager->persist($offre);
            $this->addReference($reference, $offre);
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [AdministrateurFixtures::class];
    }
}
