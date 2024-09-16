<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240328150056 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE incident ADD equipement VARCHAR(255) NOT NULL, ADD equipement_type VARCHAR(255) NOT NULL, ADD entreprise VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE user DROP equipement, DROP equipement_type');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD equipement VARCHAR(255) NOT NULL, ADD equipement_type VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE incident DROP equipement, DROP equipement_type, DROP entreprise');
    }
}
