<?php
namespace TYPO3\Flow\Persistence\Doctrine\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
	Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20150427134816 extends AbstractMigration {

	/**
	 * @param Schema $schema
	 * @return void
	 */
	public function up(Schema $schema) {
		// this up() migration is autogenerated, please modify it to your needs
		$this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");

		$this->addSql("CREATE TABLE packagefactory_knowledgebase_domain_model_wiki (persistence_object_identifier VARCHAR(40) NOT NULL, logo VARCHAR(40) DEFAULT NULL, title VARCHAR(255) NOT NULL, INDEX IDX_D5503A53E48E9A13 (logo), PRIMARY KEY(persistence_object_identifier)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
		$this->addSql("ALTER TABLE packagefactory_knowledgebase_domain_model_wiki ADD CONSTRAINT FK_D5503A53E48E9A13 FOREIGN KEY (logo) REFERENCES typo3_flow_resource_resource (persistence_object_identifier)");
	}

	/**
	 * @param Schema $schema
	 * @return void
	 */
	public function down(Schema $schema) {
		// this down() migration is autogenerated, please modify it to your needs
		$this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
		$this->addSql("DROP TABLE packagefactory_knowledgebase_domain_model_wiki");
	}
}
