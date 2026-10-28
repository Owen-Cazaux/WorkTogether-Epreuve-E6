<?php

namespace App\DataFixtures;

use App\Entity\Comptable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

final class ComptableFixtures extends Fixture
{
    public const REFERENCE_COMPTABLE1 = 'comptable1';
    public const REFERENCE_COMPTABLE2 = 'comptable2';
    public const REFERENCE_COMPTABLE3 = 'comptable3';
    public const REFERENCE_COMPTABLE4 = 'comptable4';
    public const REFERENCE_COMPTABLE5 = 'comptable5';
    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }
    public function load(ObjectManager $manager): void
    {
        $comptables = [
            [self::REFERENCE_COMPTABLE1,'Martine', 'Martin', 'martin.martin@example.test', 'ChangeMe123'],
            [self::REFERENCE_COMPTABLE2, 'Durand', 'Julie', 'julie.durand@example.test', 'ChangeMe123'],
            [self::REFERENCE_COMPTABLE3, 'Leroy', 'Antoine', 'antoine.leroy@example.test', 'ChangeMe123'],
            [self::REFERENCE_COMPTABLE4, 'Moreau', 'Sarah', 'sarah.moreau@example.test', 'ChangeMe123'],
            [self::REFERENCE_COMPTABLE5, 'Simon', 'Nicolas', 'nicolas.simon@example.test', 'ChangeMe123'],
        ];
        foreach ($comptables as [$reference, $nom, $prenom, $email, $plainpassword]) {
            $comptable = (new Comptable())
                ->setNom($nom)
                ->setPrenom($prenom)
                ->setEmail($email);
            $password = $this->hasher->hashPassword($comptable, $plainpassword);
            $comptable->setPassword($password);
            $manager->persist($comptable);
            $this->addReference($reference, $comptable);
        }
        $manager->flush();
    }
}
