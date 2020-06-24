<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190729134408 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE translation (id INT AUTO_INCREMENT NOT NULL, culture_id INT NOT NULL, code VARCHAR(191) NOT NULL, vocal VARCHAR(191) DEFAULT NULL, image VARCHAR(191) DEFAULT NULL, INDEX IDX_B469456FB108249D (culture_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reporting (id INT AUTO_INCREMENT NOT NULL, question_id INT NOT NULL, patient_id INT NOT NULL, response_id INT NOT NULL, value VARCHAR(191) NOT NULL, INDEX IDX_BD7CFA9F1E27F6BF (question_id), INDEX IDX_BD7CFA9F6B899279 (patient_id), INDEX IDX_BD7CFA9FFBF32840 (response_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE question (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(191) NOT NULL, layout VARCHAR(191) DEFAULT NULL, duplicable TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE question_response (question_id INT NOT NULL, response_id INT NOT NULL, INDEX IDX_5D73BBF71E27F6BF (question_id), INDEX IDX_5D73BBF7FBF32840 (response_id), PRIMARY KEY(question_id, response_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE response (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(191) NOT NULL, trig VARCHAR(191) DEFAULT NULL, value VARCHAR(191) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE response_question (response_id INT NOT NULL, question_id INT NOT NULL, INDEX IDX_1E1AF33FBF32840 (response_id), INDEX IDX_1E1AF331E27F6BF (question_id), PRIMARY KEY(response_id, question_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE patient (id INT AUTO_INCREMENT NOT NULL, culture_id INT NOT NULL, name VARCHAR(191) DEFAULT NULL, age INT DEFAULT NULL, INDEX IDX_1ADAD7EBB108249D (culture_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE culture (id INT AUTO_INCREMENT NOT NULL, flag VARCHAR(191) DEFAULT NULL, locale VARCHAR(191) NOT NULL, UNIQUE INDEX UNIQ_B6A99CEBD1F4EB9A (flag), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE translation ADD CONSTRAINT FK_B469456FB108249D FOREIGN KEY (culture_id) REFERENCES culture (id)');
        $this->addSql('ALTER TABLE reporting ADD CONSTRAINT FK_BD7CFA9F1E27F6BF FOREIGN KEY (question_id) REFERENCES question (id)');
        $this->addSql('ALTER TABLE reporting ADD CONSTRAINT FK_BD7CFA9F6B899279 FOREIGN KEY (patient_id) REFERENCES patient (id)');
        $this->addSql('ALTER TABLE reporting ADD CONSTRAINT FK_BD7CFA9FFBF32840 FOREIGN KEY (response_id) REFERENCES response (id)');
        $this->addSql('ALTER TABLE question_response ADD CONSTRAINT FK_5D73BBF71E27F6BF FOREIGN KEY (question_id) REFERENCES question (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE question_response ADD CONSTRAINT FK_5D73BBF7FBF32840 FOREIGN KEY (response_id) REFERENCES response (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE response_question ADD CONSTRAINT FK_1E1AF33FBF32840 FOREIGN KEY (response_id) REFERENCES response (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE response_question ADD CONSTRAINT FK_1E1AF331E27F6BF FOREIGN KEY (question_id) REFERENCES question (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE patient ADD CONSTRAINT FK_1ADAD7EBB108249D FOREIGN KEY (culture_id) REFERENCES culture (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE reporting DROP FOREIGN KEY FK_BD7CFA9F1E27F6BF');
        $this->addSql('ALTER TABLE question_response DROP FOREIGN KEY FK_5D73BBF71E27F6BF');
        $this->addSql('ALTER TABLE response_question DROP FOREIGN KEY FK_1E1AF331E27F6BF');
        $this->addSql('ALTER TABLE reporting DROP FOREIGN KEY FK_BD7CFA9FFBF32840');
        $this->addSql('ALTER TABLE question_response DROP FOREIGN KEY FK_5D73BBF7FBF32840');
        $this->addSql('ALTER TABLE response_question DROP FOREIGN KEY FK_1E1AF33FBF32840');
        $this->addSql('ALTER TABLE reporting DROP FOREIGN KEY FK_BD7CFA9F6B899279');
        $this->addSql('ALTER TABLE translation DROP FOREIGN KEY FK_B469456FB108249D');
        $this->addSql('ALTER TABLE patient DROP FOREIGN KEY FK_1ADAD7EBB108249D');
        $this->addSql('DROP TABLE translation');
        $this->addSql('DROP TABLE reporting');
        $this->addSql('DROP TABLE question');
        $this->addSql('DROP TABLE question_response');
        $this->addSql('DROP TABLE response');
        $this->addSql('DROP TABLE response_question');
        $this->addSql('DROP TABLE patient');
        $this->addSql('DROP TABLE culture');
    }
}
