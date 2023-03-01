<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230228005211 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE attitude_man_store ADD taille2 VARCHAR(255) DEFAULT NULL, ADD taille3 VARCHAR(255) DEFAULT NULL, ADD taille4 VARCHAR(255) DEFAULT NULL, ADD taille5 VARCHAR(255) DEFAULT NULL, ADD taille6 VARCHAR(255) DEFAULT NULL, ADD taille7 VARCHAR(255) DEFAULT NULL, ADD taille8 VARCHAR(255) DEFAULT NULL, ADD taille9 VARCHAR(255) DEFAULT NULL, ADD taille10 VARCHAR(255) DEFAULT NULL, CHANGE tailles taille1 VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE attitude_man_store ADD tailles VARCHAR(255) DEFAULT NULL, DROP taille1, DROP taille2, DROP taille3, DROP taille4, DROP taille5, DROP taille6, DROP taille7, DROP taille8, DROP taille9, DROP taille10');
    }
}
