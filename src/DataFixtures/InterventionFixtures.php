<?php

namespace App\DataFixtures;

use App\Entity\Intervention;
use App\Entity\Technicien;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

final class InterventionFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        foreach ([
            [TechnicienFixtures::REFERENCE_ALEX, 'Maintenance', 'Contrôle périodique de la baie.', '2025-03-10 09:00:00', '2025-03-10 10:30:00'],
            [TechnicienFixtures::REFERENCE_SOFIA, 'Installation', 'Installation de nouvelles unités.', '2025-03-12 14:00:00', '2025-03-12 16:00:00'],
        ] as [$technicienReference, $type, $description, $dateDebut, $dateFin]) {
            $intervention = (new Intervention())
                ->setTechnicien($this->getReference($technicienReference, Technicien::class))
                ->setType($type)
                ->setDescription($description)
                ->setDateDebut(new \DateTime($dateDebut))
                ->setDateFin(new \DateTime($dateFin));
            $manager->persist($intervention);
        }

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [TechnicienFixtures::class];
    }
}
