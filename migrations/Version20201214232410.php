<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201214232410 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Add image_file and cpacity to events table.';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE events ADD capacity INT DEFAULT 1 NOT NULL, ADD image_file_name VARCHAR(255) DEFAULT \'placeholder.jpg\' NOT NULL, CHANGE starts_at starts_at DATETIME NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE events DROP capacity, DROP image_file_name, CHANGE starts_at starts_at DATETIME DEFAULT NULL');
    }
}
