<?php

namespace App\DataFixtures;

use App\Entity\Administrateur;
use App\Entity\Role;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

final class RoleFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $role = (new Role())
            ->setNom('Administrateur')
            ->setAdministrateur($this->getReference(AdministrateurFixtures::REFERENCE, Administrateur::class));
        $manager->persist($role);
        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [AdministrateurFixtures::class];
    }
}
