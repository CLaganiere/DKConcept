
CREATE TABLE `chunkysoup`.`users` (
	`id` 				INT NOT NULL AUTO_INCREMENT,
	`username` 			TEXT NOT NULL,
	`password` 			TEXT NOT NULL,
	`visibility` 		INT NOT NULL,

	PRIMARY KEY (id)
) ENGINE = InnoDB;

CREATE TABLE `chunkysoup`.`equipes` (
	`id` 				INT NOT NULL AUTO_INCREMENT,
	`nom` 				TEXT NOT NULL,
	`poste` 			TEXT NOT NULL,
	`description` 		TEXT NOT NULL,
	`image` 			BLOB NOT NULL,

	PRIMARY KEY(id)
) ENGINE = InnoDB;

CREATE TABLE `chunkysoup`.`textes` (
	`id` 				INT NOT NULL AUTO_INCREMENT,
	`texte` 			TEXT NOT NULL,

	PRIMARY KEY(id)
) ENGINE = InnoDB;

CREATE TABLE `chunkysoup`.`carrieres` (
	`id` 				INT NOT NULL AUTO_INCREMENT,
	`nom` 				TEXT NOT NULL,
	`group` 			TEXT NOT NULL,
	`salary` 			TEXT NOT NULL,
	`description` 		TEXT NOT NULL,

	PRIMARY KEY(id)
) ENGINE = InnoDB;

CREATE TABLE `chunkysoup`.`repas` (
	`id` 				INT NOT NULL AUTO_INCREMENT,
	`nom` 				TEXT NOT NULL,
	`group` 			TEXT NOT NULL,
	`description` 		TEXT NOT NULL ,
	`image` 			BLOB NOT NULL,

	PRIMARY KEY(id)
) ENGINE = InnoDB;

CREATE TABLE `chunkysoup`.`textespage` (
	`id` 				INT NOT NULL AUTO_INCREMENT,
	`idpage`			TEXT NOT NULL,
	`tag` 				TEXT NOT NULL,
	`idtext` 			TEXT NOT NULL,

	PRIMARY KEY(id)
) ENGINE = InnoDB;
