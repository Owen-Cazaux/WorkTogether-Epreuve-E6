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
    public const REFERENCE_COMMANDE2 = 'commande2';
    public const REFERENCE_COMMANDE3 = 'commande3';
    public const REFERENCE_COMMANDE4 = 'commande4';
    public const REFERENCE_COMMANDE5 = 'commande5';
    public function load(ObjectManager $manager): void
    {
        $commandes = [
            [self::REFERENCE_COMMANDE1, ClientFixtures::REFERENCES_CAMILLE_MARTIN, 40.00, 'en attente'],
            [self::REFERENCE_COMMANDE2, ClientFixtures::REFERENCE_CLIENT2, 79.90, 'payee'],
            [self::REFERENCE_COMMANDE3, ClientFixtures::REFERENCE_CLIENT3, 29.90, 'en attente'],
            [self::REFERENCE_COMMANDE4, ClientFixtures::REFERENCE_CLIENT4, 159.80, 'payee'],
            [self::REFERENCE_COMMANDE5, ClientFixtures::REFERENCE_CLIENT5, 59.80, 'annulee'],
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
