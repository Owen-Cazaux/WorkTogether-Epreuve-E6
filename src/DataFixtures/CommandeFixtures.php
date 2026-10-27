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
        $commande = new Commande()
            ->setDateCommande(new \DateTime())
            ->setMontantTotal(40.00)
            ->setStatut('en attente');
        $manager->persist($commande);
        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [ClientFixtures::class];
    }
}
