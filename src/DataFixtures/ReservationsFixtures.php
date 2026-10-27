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

    public function load(ObjectManager $manager): void
    {
        $reservations = [
            [self::RESERVATIONS1, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE1, UniteFixtures::REFERENCE_UNITE1, ('28-08-2008'), ('29-09-2008'), 'mensuel', 70.00 ],
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
