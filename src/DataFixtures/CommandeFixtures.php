<?php

namespace App\DataFixtures;

use App\Entity\Client;
use App\Entity\Commande;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

final class CommandeFixtures extends Fixture implements DependentFixtureInterface
{
    public const REFERENCE_COMMANDE1 = 'commande1';
    public function load(ObjectManager $manager): void
    {
        $commandes = [
            [self::REFERENCE_COMMANDE1, ClientFixtures::REFERENCES_CAMILLE_MARTIN, 40.00, 'en attente']
        ];
        foreach ($commandes as [$reference, $clientReference, $montant, $statut]) {
            $commande = new Commande()
                ->setClient($this->getReference($clientReference, client::class))
                ->setMontantTotal($montant)
                ->setStatut($statut);
            $manager->persist($commande);
            $this->addReference($reference, $commande);

        }
        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [ClientFixtures::class];
    }
}
