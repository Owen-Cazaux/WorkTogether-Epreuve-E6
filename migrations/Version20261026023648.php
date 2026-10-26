<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20261026023648 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Restaure les champs nom, prenom et date_creation de la table utilisateur.';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE utilisateur ADD nom VARCHAR(255) DEFAULT NULL, ADD prenom VARCHAR(255) DEFAULT NULL, ADD date_creation DATETIME DEFAULT NULL');
        $this->addSql('UPDATE utilisateur SET nom = \'\', prenom = \'\' WHERE nom IS NULL OR prenom IS NULL');
        $this->addSql('UPDATE utilisateur SET date_creation = CURRENT_TIMESTAMP WHERE date_creation IS NULL');
        $this->addSql('ALTER TABLE utilisateur MODIFY nom VARCHAR(255) NOT NULL, MODIFY prenom VARCHAR(255) NOT NULL, MODIFY date_creation DATETIME NOT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE utilisateur DROP nom, DROP prenom, DROP date_creation');
    }
}
