<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240217115348 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE asset (id INT AUTO_INCREMENT NOT NULL, bid VARCHAR(255) NOT NULL, ask VARCHAR(255) NOT NULL, lot_size VARCHAR(255) NOT NULL, date_update DATETIME on update CURRENT_TIMESTAMP, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME on update CURRENT_TIMESTAMP, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE log (id INT AUTO_INCREMENT NOT NULL, action_name VARCHAR(100) NOT NULL, user_id INT NOT NULL, date_created VARCHAR(255) DEFAULT \'CURRENT_TIMESTAMP\' NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME on update CURRENT_TIMESTAMP, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE trade (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, agent_id INT NOT NULL, trade_size VARCHAR(255) NOT NULL, lot_count INT NOT NULL, pnl VARCHAR(255) NOT NULL, payout VARCHAR(255) NOT NULL, user_margin VARCHAR(255) NOT NULL, entry_rate INT NOT NULL, close_rate INT NOT NULL, date_created DATETIME NOT NULL, date_close DATETIME NOT NULL, status VARCHAR(20) NOT NULL, position VARCHAR(20) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE agent CHANGE login_time login_time VARCHAR(255) NOT NULL, CHANGE updated_at updated_at DATETIME on update CURRENT_TIMESTAMP');
        $this->addSql('ALTER TABLE user CHANGE login_time login_time VARCHAR(255) NOT NULL, CHANGE updated_at updated_at DATETIME on update CURRENT_TIMESTAMP');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE asset');
        $this->addSql('DROP TABLE log');
        $this->addSql('DROP TABLE trade');
        $this->addSql('ALTER TABLE agent CHANGE login_time login_time VARCHAR(255) DEFAULT \'CURRENT_TIMESTAMP\' NOT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE login_time login_time VARCHAR(255) DEFAULT \'CURRENT_TIMESTAMP\' NOT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
    }
}
