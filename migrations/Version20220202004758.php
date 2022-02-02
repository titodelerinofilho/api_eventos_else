<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220202004758 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE eventos (id INT NOT NULL, title VARCHAR(255) NOT NULL, date_start TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, date_end TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, description TEXT NOT NULL, status INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE SEQUENCE eventos_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE palestras (id INT NOT NULL, title VARCHAR(255) NOT NULL, date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, event_id INT NOT NULL, time_start TIME(0) WITHOUT TIME ZONE NOT NULL, time_end TIME(0) WITHOUT TIME ZONE NOT NULL, description TEXT NOT NULL, speaker VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE SEQUENCE palestras_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE eventos_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE palestras_id_seq CASCADE');
        $this->addSql('DROP TABLE eventos');
        $this->addSql('DROP TABLE palestras');
    }
}
