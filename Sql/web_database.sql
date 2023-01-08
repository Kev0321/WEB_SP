create database web;

use web;

DROP TABLE IF EXISTS `customers` ;

CREATE TABLE IF NOT EXISTS `customers` (
  `first_name` VARCHAR(45) NULL,
  `last_name` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `day` DATE NULL);

INSERT INTO `customers` (`first_name`, `last_name`, `email`, `day`) VALUES ('Jano', 'Novy', 'janonovy@email.com', str_to_date("21-1-2022","%d-%m-%Y"));
INSERT INTO `customers` (`first_name`, `last_name`, `email`, `day`) VALUES ('Martin', 'Stary', 'martinstary@email.com', str_to_date("30-8-2022","%d-%m-%Y"));
INSERT INTO `customers` (`first_name`, `last_name`, `email`, `day`) VALUES ('Hana', 'Mon', 'hanamon@email.com', str_to_date("12-6-2022","%d-%m-%Y"));
INSERT INTO `customers` (`first_name`, `last_name`, `email`, `day`) VALUES ('Sofia', 'Var', 'sofiavar@email.com', str_to_date("18-12-2022","%d-%m-%Y"));
INSERT INTO `customers` (`first_name`, `last_name`, `email`, `day`) VALUES ('Kristina', 'Pako', 'kikapako@email.com', str_to_date("17-3-2022","%d-%m-%Y"));
INSERT INTO `customers` (`first_name`, `last_name`, `email`, `day`) VALUES ('Kevin', 'Var', 'kevinvar@email.com', str_to_date("6-2-2023","%d-%m-%Y"));


select * from customers;

delete from customers where first_name = "test";