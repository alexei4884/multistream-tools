<?php

declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

class Version20210917180722 extends AbstractMigration
{
    /**
    * @param \Doctrine\DBAL\Schema\Schema $schema
    *
    * @return void
    */
    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE platform ADD enabled BOOLEAN DEFAULT \'false\' NOT NULL');
        $this->addSql('UPDATE platform SET enabled = true');
    }

    /**
    * @param \Doctrine\DBAL\Schema\Schema $schema
    *
    * @return void
    */
    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE platform DROP enabled');
    }
}
