<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20210108191349 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $query=<<<SQL
DROP table Notes;
SQL;
        $this->addSql($query);


    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $query=<<<SQL
CREATE TABLE `notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `started` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `migrations` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
SQL;
        $this->addSql($query);


    }
}
