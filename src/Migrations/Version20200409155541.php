<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200409155541 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE empresa (id INT AUTO_INCREMENT NOT NULL, tipus VARCHAR(255) NOT NULL, logo VARCHAR(255) NOT NULL, correu VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE candidat (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, cognoms VARCHAR(255) NOT NULL, telefon INT NOT NULL, estudis VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oferta (id INT AUTO_INCREMENT NOT NULL, empresa_id INT NOT NULL, candidat_id INT DEFAULT NULL, descripcio VARCHAR(255) NOT NULL, data_pub DATE NOT NULL, titol VARCHAR(255) NOT NULL, INDEX IDX_7479C8F2521E1991 (empresa_id), INDEX IDX_7479C8F28D0EB82 (candidat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE oferta ADD CONSTRAINT FK_7479C8F2521E1991 FOREIGN KEY (empresa_id) REFERENCES empresa (id)');
        $this->addSql('ALTER TABLE oferta ADD CONSTRAINT FK_7479C8F28D0EB82 FOREIGN KEY (candidat_id) REFERENCES candidat (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE oferta DROP FOREIGN KEY FK_7479C8F2521E1991');
        $this->addSql('ALTER TABLE oferta DROP FOREIGN KEY FK_7479C8F28D0EB82');
        $this->addSql('DROP TABLE empresa');
        $this->addSql('DROP TABLE candidat');
        $this->addSql('DROP TABLE oferta');
    }
}
