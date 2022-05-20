<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220519101430 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE pedido (id INT AUTO_INCREMENT NOT NULL, usuario_id INT NOT NULL, fecha DATE NOT NULL, coste NUMERIC(10, 2) NOT NULL, INDEX IDX_C4EC16CEDB38439E (usuario_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pedidos_producto (id INT AUTO_INCREMENT NOT NULL, cod_pedido_id INT NOT NULL, cod_producto_id INT NOT NULL, unidades INT NOT NULL, INDEX IDX_C4078F69E0C44A80 (cod_pedido_id), INDEX IDX_C4078F69C3BEBA75 (cod_producto_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE pedido ADD CONSTRAINT FK_C4EC16CEDB38439E FOREIGN KEY (usuario_id) REFERENCES usuarios (id)');
        $this->addSql('ALTER TABLE pedidos_producto ADD CONSTRAINT FK_C4078F69E0C44A80 FOREIGN KEY (cod_pedido_id) REFERENCES pedido (id)');
        $this->addSql('ALTER TABLE pedidos_producto ADD CONSTRAINT FK_C4078F69C3BEBA75 FOREIGN KEY (cod_producto_id) REFERENCES productos (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pedidos_producto DROP FOREIGN KEY FK_C4078F69E0C44A80');
        $this->addSql('DROP TABLE pedido');
        $this->addSql('DROP TABLE pedidos_producto');
    }
}
