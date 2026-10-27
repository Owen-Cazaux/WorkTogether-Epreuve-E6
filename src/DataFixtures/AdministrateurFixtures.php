<?php

namespace App\DataFixtures;

use App\Entity\Administrateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

final class AdministrateurFixtures extends Fixture
{
    public const REFERENCE_ADMIN_1 = 'administrateur_1';
    public const REFERENCE = 'administrateur';

    public function load(ObjectManager $manager): void
    {
        $administrateurs = [
            [self::REFERENCE_ADMIN_1,'admin1', 'admin1', 'admin.admin@gmail.com', 'admin' ]
        ];
        foreach ($administrateurs as [$reference, $nom, $prenom, $email, $plainPassword])
        {
            $administrateur = new Administrateur()
                ->setNom('admin')
                ->setPrenom('admin')
                ->setEmail('admin.admin@gmail.com');
                $password = $this->hasher->hashPassword($administrateur, $plainPassword);
                $administrateur->setPassword($password);
            $manager->persist($administrateur);
            $this->addReference(self::REFERENCE, $administrateur);
        }

        $manager->flush();
    }
}
