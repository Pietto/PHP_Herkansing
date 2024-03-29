DROP DATABASE IF EXISTS `calendar`;
CREATE DATABASE IF NOT EXISTS `calendar`;
USE `calendar`;

CREATE TABLE `birthdays` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`person` VARCHAR(255) NOT NULL,
	`day` TINYINT(4) NOT NULL,
	`month` TINYINT(4) NOT NULL,
	`year` SMALLINT(6) NULL DEFAULT NULL,
	PRIMARY KEY (`id`)
);

INSERT INTO birthdays(person, day, month, year) VALUES
('Vera', '5', '8', '1963'), 
('Nadia', '14', '5', '1996'), 
('Petrov', '7', '12', '1985'), 
('Anoushka', '22', '2', '1981'), 
('Dimitri', '21', '5', '2001'),
('Anna', '28', '4', '1989'),
('Miroslav', '17', '7', '2010'), 
('Vesela', '14', '5', '1992'),
('Vlad', '18', '3', '1975'),
('Mila', '22', '2', '1993'), 
('Goran', '19', '12', '2006'), 
('Brana', '7', '3', '1967'),
('Darko', '4', '6', '1973'), 
('Dragoslav', '13', '6', '1982'), 
('Godemir', '9', '9', '1984'),
('Boris', '19','4', '2001'),
('Ludmila', '5', '5', '1969'), 
('Stanibor', '14', '5', '1999'); 