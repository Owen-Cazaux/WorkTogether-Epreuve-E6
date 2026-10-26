<?php

namespace App\DataFixtures;

use App\Entity\Administrateur;
use App\Entity\Offre;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

final class OffreFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $administrateur = $this->getReference(AdministrateurFixtures::REFERENCE, Administrateur::class);

        foreach ([
            ['Essentiel', 5, '29.90', '0.00', '10.00'],
            ['Professionnel', 20, '79.90', '5.00', '15.00'],
        ] as [$nom, $nombreUnites, $prixMensuel, $remise, $remiseAnnuelle]) {
            $offre = (new Offre())
                ->setNom($nom)
                ->setNombreUnites($nombreUnites)
                ->setPrixMensuel($prixMensuel)
                ->setRemisePourcentage($remise)
                ->setRemiseAnnuellePourcentage($remiseAnnuelle)
                ->addAdministrateur($administrateur);
            $manager->persist($offre);
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [AdministrateurFixtures::class];
    }
}
