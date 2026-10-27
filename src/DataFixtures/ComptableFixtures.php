<?php

namespace App\DataFixtures;

use App\Entity\Comptable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

final class ComptableFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
       $comptable = (new Comptable())
            ->setNom('Martine')
            ->setPrenom('Martin')
            ->setEmail('martin.martine@example.test')
            ->setPassword(password_hash('ChangeMe123!', PASSWORD_DEFAULT))
            ->setDateCreation(new \DateTimeImmutable());
        $manager->persist($comptable);
        $manager->flush();
    }
}
