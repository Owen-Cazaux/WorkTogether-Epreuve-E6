<?php

namespace App\DataFixtures;

use App\Entity\Client;
use App\Entity\Commande;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

final class CommandeFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        foreach ([
            [ClientFixtures::REFERENCE_ATELIER, '2025-01-15', '149', 'Payée'],
            [ClientFixtures::REFERENCE_BUREAU, '2025-02-03', '399', 'En attente'],
        ] as [$clientReference, $date, $montant, $statut]) {
            $commande = (new Commande())
                ->setClient($this->getReference($clientReference, Client::class))
                ->setDateCommande(new \DateTime($date))
                ->setMontantTotal($montant)
                ->setStatut($statut);
            $manager->persist($commande);
        }
    }

    public function getDependencies(): array
    {
        return [ClientFixtures::class];
    }
}
