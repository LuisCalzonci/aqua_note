<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20210115142711 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE f_s_a_comment_action (id INT AUTO_INCREMENT NOT NULL, comment VARCHAR(255) NOT NULL, idUser INT NOT NULL, createdDate DATETIME NOT NULL, idActionPlan INT NOT NULL, migration VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE f_s_a_plan_action (id INT AUTO_INCREMENT NOT NULL, action VARCHAR(255) NOT NULL, dueDate DATETIME NOT NULL, correctionDate DATETIME NOT NULL, createdDate DATETIME NOT NULL, updatedDate DATETIME NOT NULL, migration VARCHAR(255) NOT NULL, idStatus INT NOT NULL, createdBy VARCHAR(255) NOT NULL, updatedBy VARCHAR(255) NOT NULL, rootCause VARCHAR(255) NOT NULL, idAuditDetail INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE f_s_a_responsable (id INT AUTO_INCREMENT NOT NULL, idActionPlan INT NOT NULL, idResponsable INT NOT NULL, createdDate DATETIME NOT NULL, migrations VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE f_s_a_status (id INT AUTO_INCREMENT NOT NULL, description VARCHAR(255) NOT NULL, migration VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE f_s_a_comment_action');
        $this->addSql('DROP TABLE f_s_a_plan_action');
        $this->addSql('DROP TABLE f_s_a_responsable');
        $this->addSql('DROP TABLE f_s_a_status');
    }
}
