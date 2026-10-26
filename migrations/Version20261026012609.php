<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20261026012609 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Ajoute les informations de sécurité des utilisateurs sans supprimer leurs données existantes.';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67D19EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE intervention ADD CONSTRAINT FK_D11814AB13457256 FOREIGN KEY (technicien_id) REFERENCES technicien (id)');
        $this->addSql('ALTER TABLE offre_administrateur ADD CONSTRAINT FK_8978FCEE4CC8505A FOREIGN KEY (offre_id) REFERENCES offre (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE offre_administrateur ADD CONSTRAINT FK_8978FCEE7EE5403C FOREIGN KEY (administrateur_id) REFERENCES administrateur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE role ADD CONSTRAINT FK_57698A6A7EE5403C FOREIGN KEY (administrateur_id) REFERENCES administrateur (id)');
        $this->addSql('ALTER TABLE unite ADD CONSTRAINT FK_1D64C118D5E86FF FOREIGN KEY (etat_id) REFERENCES etat (id)');
        $this->addSql('ALTER TABLE unite ADD CONSTRAINT FK_1D64C11843375062 FOREIGN KEY (baie_id) REFERENCES baie (id)');
        $this->addSql('ALTER TABLE utilisateur ADD roles JSON DEFAULT NULL, CHANGE mot_de_passe password VARCHAR(255) NOT NULL, CHANGE email email VARCHAR(180) NOT NULL');
        $this->addSql('UPDATE utilisateur SET roles = \'[]\' WHERE roles IS NULL');
        $this->addSql('ALTER TABLE utilisateur MODIFY roles JSON NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL ON utilisateur (email)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67D19EB6921');
        $this->addSql('ALTER TABLE intervention DROP FOREIGN KEY FK_D11814AB13457256');
        $this->addSql('ALTER TABLE offre_administrateur DROP FOREIGN KEY FK_8978FCEE4CC8505A');
        $this->addSql('ALTER TABLE offre_administrateur DROP FOREIGN KEY FK_8978FCEE7EE5403C');
        $this->addSql('ALTER TABLE role DROP FOREIGN KEY FK_57698A6A7EE5403C');
        $this->addSql('ALTER TABLE unite DROP FOREIGN KEY FK_1D64C118D5E86FF');
        $this->addSql('ALTER TABLE unite DROP FOREIGN KEY FK_1D64C11843375062');
        $this->addSql('DROP INDEX UNIQ_IDENTIFIER_EMAIL ON utilisateur');
        $this->addSql('ALTER TABLE utilisateur DROP roles, CHANGE password mot_de_passe VARCHAR(255) NOT NULL, CHANGE email email VARCHAR(255) NOT NULL');
    }
}
