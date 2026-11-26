<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20261126145537 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE unite_intervention (unite_id INT NOT NULL, intervention_id INT NOT NULL, INDEX IDX_9C1B7828EC4A74AB (unite_id), INDEX IDX_9C1B78288EAE3863 (intervention_id), PRIMARY KEY (unite_id, intervention_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE unite_intervention ADD CONSTRAINT FK_9C1B7828EC4A74AB FOREIGN KEY (unite_id) REFERENCES unite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE unite_intervention ADD CONSTRAINT FK_9C1B78288EAE3863 FOREIGN KEY (intervention_id) REFERENCES intervention (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE unite_intervention DROP FOREIGN KEY FK_9C1B7828EC4A74AB');
        $this->addSql('ALTER TABLE unite_intervention DROP FOREIGN KEY FK_9C1B78288EAE3863');
        $this->addSql('DROP TABLE unite_intervention');
    }
}
