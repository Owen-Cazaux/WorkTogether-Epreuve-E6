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
    public const RESERVATION_CAMILLE1 = 'reservation-camille-1';
    public const RESERVATION_CAMILLE2 = 'reservation-camille-2';
    public const RESERVATION_CAMILLE3 = 'reservation-camille-3';
    public const RESERVATION_CAMILLE4 = 'reservation-camille-4';
    public const RESERVATION_CAMILLE5 = 'reservation-camille-5';
    public const RESERVATION_CAMILLE6 = 'reservation-camille-6';
    public const RESERVATION_CAMILLE7 = 'reservation-camille-7';
    public const RESERVATION_CAMILLE8 = 'reservation-camille-8';
    public const RESERVATION_CAMILLE9 = 'reservation-camille-9';
    public const RESERVATION_CAMILLE10 = 'reservation-camille-10';
    public const RESERVATION_CAMILLE11 = 'reservation-camille-11';
    public const RESERVATION_CAMILLE12 = 'reservation-camille-12';
    public const RESERVATION_CAMILLE13 = 'reservation-camille-13';
    public const RESERVATION_CAMILLE14 = 'reservation-camille-14';
    public const RESERVATION_CAMILLE15 = 'reservation-camille-15';
    public const RESERVATION_CAMILLE16 = 'reservation-camille-16';
    public const RESERVATION_CAMILLE17 = 'reservation-camille-17';
    public const RESERVATION_CAMILLE18 = 'reservation-camille-18';
    public const RESERVATION_CAMILLE19 = 'reservation-camille-19';
    public const RESERVATION_CAMILLE20 = 'reservation-camille-20';
    public const RESERVATION_CAMILLE21 = 'reservation-camille-21';
    public const RESERVATION_CAMILLE22 = 'reservation-camille-22';
    public const RESERVATION_CAMILLE23 = 'reservation-camille-23';
    public const RESERVATION_CAMILLE24 = 'reservation-camille-24';
    public const RESERVATION_CAMILLE25 = 'reservation-camille-25';
    public const RESERVATION_CAMILLE26 = 'reservation-camille-26';
    public const RESERVATION_CAMILLE27 = 'reservation-camille-27';
    public const RESERVATION_CAMILLE28 = 'reservation-camille-28';
    public const RESERVATION_CAMILLE29 = 'reservation-camille-29';
    public const RESERVATION_CAMILLE30 = 'reservation-camille-30';
    public const RESERVATION_CAMILLE31 = 'reservation-camille-31';
    public const RESERVATION_CAMILLE32 = 'reservation-camille-32';
    public const RESERVATION_CAMILLE33 = 'reservation-camille-33';
    public const RESERVATION_CAMILLE34 = 'reservation-camille-34';
    public const RESERVATION_CAMILLE35 = 'reservation-camille-35';
    public const RESERVATION_CAMILLE36 = 'reservation-camille-36';
    public const RESERVATION_CAMILLE37 = 'reservation-camille-37';
    public const RESERVATION_CAMILLE38 = 'reservation-camille-38';
    public const RESERVATION_CAMILLE39 = 'reservation-camille-39';
    public const RESERVATION_CAMILLE40 = 'reservation-camille-40';
    public const RESERVATION_CAMILLE41 = 'reservation-camille-41';
    public const RESERVATION_CAMILLE42 = 'reservation-camille-42';
    public const RESERVATION_CAMILLE43 = 'reservation-camille-43';
    public const RESERVATION_CAMILLE44 = 'reservation-camille-44';
    public const RESERVATION_CAMILLE45 = 'reservation-camille-45';
    public const RESERVATION_CAMILLE46 = 'reservation-camille-46';
    public const RESERVATION_CAMILLE47 = 'reservation-camille-47';
    public const RESERVATION_CAMILLE48 = 'reservation-camille-48';
    public const RESERVATION_CAMILLE49 = 'reservation-camille-49';
    public const RESERVATION_CAMILLE50 = 'reservation-camille-50';
    public const RESERVATION_CAMILLE51 = 'reservation-camille-51';
    public const RESERVATION_CAMILLE52 = 'reservation-camille-52';
    public const RESERVATION_CAMILLE53 = 'reservation-camille-53';
    public const RESERVATION_CAMILLE54 = 'reservation-camille-54';
    public const RESERVATION_CAMILLE55 = 'reservation-camille-55';
    public const RESERVATION_CAMILLE56 = 'reservation-camille-56';
    public const RESERVATION_CAMILLE57 = 'reservation-camille-57';
    public const RESERVATION_CAMILLE58 = 'reservation-camille-58';
    public const RESERVATION_CAMILLE59 = 'reservation-camille-59';
    public const RESERVATION_CAMILLE60 = 'reservation-camille-60';
    public const RESERVATION_CAMILLE61 = 'reservation-camille-61';
    public const RESERVATION_CAMILLE62 = 'reservation-camille-62';
    public const RESERVATION_CAMILLE63 = 'reservation-camille-63';
    public const RESERVATION_CAMILLE64 = 'reservation-camille-64';
    public const RESERVATION_CAMILLE65 = 'reservation-camille-65';
    public const RESERVATION_CAMILLE66 = 'reservation-camille-66';
    public const RESERVATION_CAMILLE67 = 'reservation-camille-67';
    public const RESERVATION_CAMILLE68 = 'reservation-camille-68';
    public const RESERVATION_CAMILLE69 = 'reservation-camille-69';
    public const RESERVATION_CAMILLE70 = 'reservation-camille-70';

    public function load(ObjectManager $manager): void
    {
        $reservations = [
            [self::RESERVATIONS1, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE1, UniteFixtures::REFERENCE_UNITE1, ('28-08-2008'), ('29-09-2008'), 'mensuel', 70.00 ],
            [self::RESERVATIONS2, CommandeFixtures::REFERENCE_COMMANDE2, OffreFixtures::REFERENCE_OFFRE2, UniteFixtures::REFERENCE_UNITE2, '2026-01-01', '2026-12-31', 'annuel', 799.00],
            [self::RESERVATIONS3, CommandeFixtures::REFERENCE_COMMANDE3, OffreFixtures::REFERENCE_OFFRE3, UniteFixtures::REFERENCE_UNITE3, '2026-02-01', '2026-03-01', 'mensuel', 149.90],
            [self::RESERVATIONS4, CommandeFixtures::REFERENCE_COMMANDE4, OffreFixtures::REFERENCE_OFFRE4, UniteFixtures::REFERENCE_UNITE4, '2026-03-01', '2027-02-28', 'annuel', 2499.00],
            [self::RESERVATIONS5, CommandeFixtures::REFERENCE_COMMANDE5, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE5, '2026-04-01', '2026-05-01', 'mensuel', 499.90],
            [self::RESERVATION_CAMILLE1, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE1, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE2, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE2, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE3, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE3, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE4, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE4, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE5, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE5, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE6, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE6, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE7, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE7, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE8, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE8, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE9, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE9, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE10, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE10, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE11, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE11, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE12, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE12, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE13, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE13, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE14, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE14, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE15, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE15, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE16, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE16, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE17, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE17, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE18, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE18, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE19, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE19, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE20, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE20, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE21, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE21, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE22, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE22, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE23, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE23, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE24, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE24, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE25, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE25, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE26, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE26, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE27, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE27, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE28, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE28, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE29, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE29, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE30, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE30, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE31, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE31, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE32, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE32, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE33, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE33, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE34, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE34, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE35, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE35, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE36, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE36, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE37, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE37, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE38, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE38, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE39, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE39, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE40, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE40, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE41, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE41, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE42, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE42, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE43, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE43, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE44, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE44, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE45, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE45, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE46, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE46, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE47, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE47, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE48, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE48, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE49, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE49, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE50, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE50, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE51, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE51, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE52, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE52, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE53, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE53, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE54, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE54, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE55, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE55, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE56, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE56, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE57, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE57, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE58, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE58, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE59, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE59, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE60, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE60, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE61, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE61, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE62, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE62, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE63, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE63, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE64, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE64, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE65, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE65, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE66, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE66, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE67, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE67, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE68, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE68, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE69, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE69, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
            [self::RESERVATION_CAMILLE70, CommandeFixtures::REFERENCE_COMMANDE1, OffreFixtures::REFERENCE_OFFRE5, UniteFixtures::REFERENCE_UNITE_CAMILLE70, '2026-01-01', '2026-12-31', 'annuel', 2499.00],
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
