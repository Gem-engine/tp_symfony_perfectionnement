<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211007093928 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire ADD poster_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC5BB66C05 FOREIGN KEY (poster_id) REFERENCES utilisateur (id)');
        $this->addSql('CREATE INDEX IDX_67F068BC5BB66C05 ON commentaire (poster_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC5BB66C05');
        $this->addSql('DROP INDEX IDX_67F068BC5BB66C05 ON commentaire');
        $this->addSql('ALTER TABLE commentaire DROP poster_id');
    }
}
