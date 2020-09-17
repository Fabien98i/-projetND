<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200917061320 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE entreprises (id INT AUTO_INCREMENT NOT NULL, nom_entreprise VARCHAR(255) NOT NULL, adresse_entreprise LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formation (id INT AUTO_INCREMENT NOT NULL, filiere LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE individus (id INT AUTO_INCREMENT NOT NULL, nom_individu VARCHAR(15) NOT NULL, prenom_individu VARCHAR(15) NOT NULL, adresse_individu LONGTEXT NOT NULL, type_individu LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE individusentreprise (id INT AUTO_INCREMENT NOT NULL, fid_ind_id INT NOT NULL, fid_individu_id INT NOT NULL, intitule_poste LONGTEXT NOT NULL, nom_tuteur LONGTEXT NOT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, description_poste LONGTEXT NOT NULL, UNIQUE INDEX UNIQ_882B79306A32F769 (fid_ind_id), UNIQUE INDEX UNIQ_882B793036B546EE (fid_individu_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE individusformation (id INT AUTO_INCREMENT NOT NULL, fid_ind_id INT DEFAULT NULL, fid_form_id INT DEFAULT NULL, statut INT NOT NULL, data INT DEFAULT NULL, UNIQUE INDEX UNIQ_17F3A9ED6A32F769 (fid_ind_id), UNIQUE INDEX UNIQ_17F3A9EDB107B7EC (fid_form_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE individusentreprise ADD CONSTRAINT FK_882B79306A32F769 FOREIGN KEY (fid_ind_id) REFERENCES entreprises (id)');
        $this->addSql('ALTER TABLE individusentreprise ADD CONSTRAINT FK_882B793036B546EE FOREIGN KEY (fid_individu_id) REFERENCES individus (id)');
        $this->addSql('ALTER TABLE individusformation ADD CONSTRAINT FK_17F3A9ED6A32F769 FOREIGN KEY (fid_ind_id) REFERENCES individus (id)');
        $this->addSql('ALTER TABLE individusformation ADD CONSTRAINT FK_17F3A9EDB107B7EC FOREIGN KEY (fid_form_id) REFERENCES formation (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE individusentreprise DROP FOREIGN KEY FK_882B79306A32F769');
        $this->addSql('ALTER TABLE individusformation DROP FOREIGN KEY FK_17F3A9EDB107B7EC');
        $this->addSql('ALTER TABLE individusentreprise DROP FOREIGN KEY FK_882B793036B546EE');
        $this->addSql('ALTER TABLE individusformation DROP FOREIGN KEY FK_17F3A9ED6A32F769');
        $this->addSql('DROP TABLE entreprises');
        $this->addSql('DROP TABLE formation');
        $this->addSql('DROP TABLE individus');
        $this->addSql('DROP TABLE individusentreprise');
        $this->addSql('DROP TABLE individusformation');
    }
}
