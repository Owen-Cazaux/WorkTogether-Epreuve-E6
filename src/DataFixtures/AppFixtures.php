<?php

namespace App\DataFixtures;

use App\Entity\Administrateur;
use App\Entity\Baie;
use App\Entity\Client;
use App\Entity\Commande;
use App\Entity\Comptable;
use App\Entity\Etat;
use App\Entity\Intervention;
use App\Entity\Offre;
use App\Entity\Role;
use App\Entity\Technicien;
use App\Entity\Unite;
use App\Entity\Utilisateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

final class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $administrateur = new Administrateur();
        $manager->persist($administrateur);

        $comptable = new Comptable();
        $manager->persist($comptable);

        $role = (new Role())
            ->setNom('Administrateur')
            ->setAdministrateur($administrateur);
        $manager->persist($role);

        $utilisateur = (new Utilisateur())
            ->setNom('Martin')
            ->setPrenom('Camille')
            ->setEmail('camille.martin@example.test')
            ->setMotDePasse(password_hash('ChangeMe123!', PASSWORD_DEFAULT))
            ->setDateCreation(new \DateTime());
        $manager->persist($utilisateur);

        $offres = [
            ['Essentiel', 5, '29.90', '0.00', '10.00'],
            ['Professionnel', 20, '79.90', '5.00', '15.00'],
        ];

        foreach ($offres as [$nom, $nombreUnites, $prixMensuel, $remise, $remiseAnnuelle]) {
            $offre = (new Offre())
                ->setNom($nom)
                ->setNombreUnites($nombreUnites)
                ->setPrixMensuel($prixMensuel)
                ->setRemisePourcentage($remise)
                ->setRemiseAnnuellePourcentage($remiseAnnuelle)
                ->addAdministrateur($administrateur);
            $manager->persist($offre);
        }

        $clients = [];
        foreach ([
            ['Atelier du Canal', '01 40 20 30 40', '12 rue du Canal', '75010', 'Paris', 'France'],
            ['Bureau des Arts', '04 72 10 20 30', '8 place Bellecour', '69002', 'Lyon', 'France'],
        ] as [$raisonSociale, $telephone, $adresse, $codePostal, $ville, $pays]) {
            $client = (new Client())
                ->setRaisonSociale($raisonSociale)
                ->setTelephone($telephone)
                ->setAdresse($adresse)
                ->setCodePostal($codePostal)
                ->setVille($ville)
                ->setPays($pays);
            $manager->persist($client);
            $clients[] = $client;
        }

        foreach ([
            [$clients[0], '2025-01-15', '149', 'Payée'],
            [$clients[1], '2025-02-03', '399', 'En attente'],
        ] as [$client, $date, $montant, $statut]) {
            $commande = (new Commande())
                ->setClient($client)
                ->setDateCommande(new \DateTime($date))
                ->setMontantTotal($montant)
                ->setStatut($statut);
            $manager->persist($commande);
        }

        $techniciens = [];
        foreach ([['Durand', 'Alex'], ['Bernard', 'Sofia']] as [$nom, $prenom]) {
            $technicien = (new Technicien())
                ->setNom($nom)
                ->setPrenom($prenom);
            $manager->persist($technicien);
            $techniciens[] = $technicien;
        }

        foreach ([
            [$techniciens[0], 'Maintenance', 'Contrôle périodique de la baie.', '2025-03-10 09:00:00', '2025-03-10 10:30:00'],
            [$techniciens[1], 'Installation', 'Installation de nouvelles unités.', '2025-03-12 14:00:00', '2025-03-12 16:00:00'],
        ] as [$technicien, $type, $description, $dateDebut, $dateFin]) {
            $intervention = (new Intervention())
                ->setTechnicien($technicien)
                ->setType($type)
                ->setDescription($description)
                ->setDateDebut(new \DateTime($dateDebut))
                ->setDateFin(new \DateTime($dateFin));
            $manager->persist($intervention);
        }

        $etats = [];
        foreach (['Disponible', 'En maintenance', 'Hors service'] as $libelle) {
            $etat = (new Etat())->setLibelle($libelle);
            $manager->persist($etat);
            $etats[] = $etat;
        }

        $baies = [];
        foreach ([['BAIE-01', 2], ['BAIE-02', 2]] as [$numero, $nombreUnites]) {
            $baie = (new Baie())
                ->setNumero($numero)
                ->setNombreUnités($nombreUnites);
            $manager->persist($baie);
            $baies[] = $baie;
        }

        foreach ([
            ['Serveur web', $etats[0], $baies[0]],
            ['Serveur base de données', $etats[1], $baies[0]],
            ['Serveur applicatif', $etats[0], $baies[1]],
            ['Serveur sauvegarde', $etats[2], $baies[1]],
        ] as [$nom, $etat, $baie]) {
            $unite = (new Unite())
                ->setNom($nom)
                ->setEtat($etat)
                ->setBaie($baie);
            $manager->persist($unite);
        }

        $manager->flush();
    }
}
