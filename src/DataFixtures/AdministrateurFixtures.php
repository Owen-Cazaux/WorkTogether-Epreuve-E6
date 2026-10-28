<?php

namespace App\DataFixtures;

use App\Entity\Administrateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

final class AdministrateurFixtures extends Fixture
{
    public const REFERENCE_ADMIN_1 = 'administrateur_1';
    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    public function load(ObjectManager $manager): void
    {
        $administrateurs = [
            [self::REFERENCE_ADMIN_1,'admin1', 'admin1', 'admin.admin@gmail.com', 'admin' ]
        ];
        foreach ($administrateurs as [$reference, $nom, $prenom, $email, $plainPassword])
        {
            $administrateur = new Administrateur()
                ->setRoles(['ROLE_ADMIN', 'ROLE_USER'])
                ->setNom('admin')
                ->setPrenom('admin')
                ->setEmail('admin.admin@gmail.com');
                $password = $this->hasher->hashPassword($administrateur, $plainPassword);
                $administrateur->setPassword($password);
            $manager->persist($administrateur);
            $this->addReference($reference, $administrateur);
        }

        $manager->flush();
    }
}
