CREATE DATABASE produtos;
USE produtos;

CREATE TABLE IF NOT EXISTS `produtos`.`Produto` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `produto` VARCHAR(45) NULL,
  `qt_venda` MEDIUMINT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB

php console doctrine:schema:update --force
