-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema cantante-bd
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema cantante-bd
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `cantante-bd` DEFAULT CHARACTER SET utf8 ;
USE `cantante-bd` ;

-- -----------------------------------------------------
-- Table `cantante-bd`.`album`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cantante-bd`.`album` (
  `alb_id` INT NOT NULL AUTO_INCREMENT,
  `alb_titulo` VARCHAR(45) NULL,
  `alb_imagen` VARCHAR(200) NULL,
  `alb_date` DATE NULL,
  `alb_canciones` INT NULL,
  `alb_descripcion` LONGTEXT NULL,
  PRIMARY KEY (`alb_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cantante-bd`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cantante-bd`.`usuario` (
  `usu_id` INT NOT NULL AUTO_INCREMENT,
  `usu_email` VARCHAR(50) NULL,
  `usu_password` CHAR(60) NULL,
  PRIMARY KEY (`usu_id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


CREATE TABLE `cantante-bd`.`conciertos` (
  `con_id` INT NOT NULL AUTO_INCREMENT,
  `con_fecha` DATE NULL,
  `con_pais` VARCHAR(50) NULL,
  `con_lugar` VARCHAR(50) NULL,
  PRIMARY KEY (`con_id`));


INSERT INTO `cantante-bd`.`album` (`alb_titulo`, `alb_date`, `alb_canciones`, `alb_descripcion`) VALUES ('Danger', '01-01-01', '6', 'Muy bueno hip');
INSERT INTO `cantante-bd`.`album` (`alb_titulo`, `alb_date`, `alb_canciones`, `alb_descripcion`) VALUES ('It do you eant', '01-02-02', '9', 'Prueba');