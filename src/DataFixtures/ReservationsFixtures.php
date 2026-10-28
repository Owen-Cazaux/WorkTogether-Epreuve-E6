<?php

namespace App\DataFixtures;

use App\Entity\Commande;
use App\Entity\Offre;
use App\Entity\Reservations;
use App\Entity\Unite;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use phpDocumentor\Reflection\Types\Self_;

class ReservationsFixtures extends Fixture implements DependentFixtureInterface
{
    public const RESERVATIONS1 = 'reservations1';
    public const RESERVATIONS2 = 'reservations2';
    public const RESERVATIONS3 = 'reservations3';
    public const RESERVATIONS4 = 'reservations4';
    public const RESERVATIONS5 = 'reservations5';

    public function load(ObjectManager $manager): void
    {
        $reservations = [
            [self::RESERVATIONS1, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE1, UniteFixtures::REFERENCE_UNITE1, ('28-08-2008'), ('29-09-2008'), 'mensuel', 70.00 ],
            [self::RESERVATIONS2, CommandeFixtures::REFERENCE_COMMANDE2, OffreFixtures::REFERENCE_OFFRE2, UniteFixtures::REFERENCE_UNITE2, '2026-01-01', '2026-12-31', 'annuel', 799.00],
            [self::RESERVATIONS3, CommandeFixtures::REFERENCE_COMMANDE3, OffreFixtures::REFERENCE_OFFRE3, UniteFixtures::REFERENCE_UNITE3, '2026-02-01', '2026-03-01', 'mensuel', 149.90],
            [self::RESERVATIONS4, CommandeFixtures::REFERENCE_COMMANDE4, OffreFixtures::REFERENCE_OFFRE4, UniteFixtures::REFERENCE_UNITE4, '2026-03-01', '2027-02-28', 'annuel', 2499.00],
            [self::RESERVATIONS5, CommandeFixtures::REFERENCE_COMMANDE5, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE5, '2026-04-01', '2026-05-01', 'mensuel', 499.90],
        ];
        foreach ($reservations as [$reference, $commandeReference, $offreReference, $uniteReference, $dateDebut, $dateFin, $periodicite, $prix]) {
            $reservation = new Reservations()
                ->setCommande($this->getReference($commandeReference, Commande::class))
                ->setOffre($this->getReference($offreReference, Offre::class))
                ->addUnite($this->getReference($uniteReference, Unite::class))
                ->setDateDebut(new \DateTime($dateDebut))
                ->setDateFin(new \DateTime($dateFin))
                ->setPeriodicite($periodicite)
                ->setPrix($prix);
            $manager->persist($reservation);
            $this->addReference($reference, $reservation);
        }
        $manager->flush();
    }
    public function getDependencies(): array
    {
        return [CommandeFixtures::class, OffreFixtures::class, UniteFixtures::class];
    }
}
