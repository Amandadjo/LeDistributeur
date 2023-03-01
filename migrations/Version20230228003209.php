<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230228003209 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE attitude_man_store (id INT AUTO_INCREMENT NOT NULL, nom_boutique VARCHAR(255) DEFAULT NULL, titre_article VARCHAR(255) DEFAULT NULL, discount VARCHAR(255) DEFAULT NULL, prix VARCHAR(255) DEFAULT NULL, prix_sale VARCHAR(255) DEFAULT NULL, photo VARCHAR(255) DEFAULT NULL, photo_detail VARCHAR(255) DEFAULT NULL, description_courte VARCHAR(255) DEFAULT NULL, tailles VARCHAR(255) DEFAULT NULL, description_produit VARCHAR(255) DEFAULT NULL, description_longues LONGTEXT DEFAULT NULL, info_vendeur LONGTEXT DEFAULT NULL, note VARCHAR(255) DEFAULT NULL, excellent INT DEFAULT NULL, bien INT DEFAULT NULL, moyen INT DEFAULT NULL, mauvais INT DEFAULT NULL, terrible INT DEFAULT NULL, client_identite VARCHAR(255) DEFAULT NULL, titre_avis VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE attitude_man_store');
    }
}
