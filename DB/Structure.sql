
-- CREATE {DATABASE | SCHEMA } xyz_db CHARACTER SET = utf8
-- CREATE USER 'foo'@'192.168.0.1' IDENTIFIED BY 'pwd';

DROP TABLE tab_users;
DROP TABLE tab_sites;
DROP TABLE tab_galerie;
DROP TABLE tab_carriere;
DROP TABLE tab_courriels;


CREATE TABLE IF NOT EXISTS tab_users (
	user_id 			INT AUTO_INCREMENT PRIMARY KEY,
	nom 				VARCHAR(50) NOT NULL,
	prenom 				VARCHAR(50) NOT NULL,
	adr_courriel		VARCHAR(70) NOT NULL,
	poste				VARCHAR(50) NOT NULL,
	mot_de_passe		TEXT NOT NULL,
	visibility			VARCHAR(50) NOT NULL,
	date_creation 		TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)  ENGINE=INNODB;


CREATE TABLE IF NOT EXISTS tab_sites (
    site_id 			INT AUTO_INCREMENT PRIMARY KEY,
	nom 				VARCHAR(50) NOT NULL,
	decription			TEXT,
)  ENGINE=INNODB;


CREATE TABLE IF NOT EXISTS tab_galerie (
    photo_id 			INT AUTO_INCREMENT PRIMARY KEY,
	chemin 				TEXT NOT NULL,
	nom					TEXT,
	description			TEXT,
	saison 				VARCHAR(70)
	-- peut-être ajouter la photo dans les attributs de cette table
)  ENGINE=INNODB;


CREATE TABLE IF NOT EXISTS tab_carriere (
    carriere_id 		INT AUTO_INCREMENT PRIMARY KEY,
	poste 				VARCHAR(70) NOT NULL,
	salaire				VARCHAR(20),
	type_poste			TEXT NOT NULL,
	experience_re		TEXT,
	formation_re		TEXT,
	description			TEXT NOT NULL,
	date_creation 		TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)  ENGINE=INNODB;


CREATE TABLE IF NOT EXISTS tab_courriels (
    courriel_id 		INT AUTO_INCREMENT PRIMARY KEY,
	nom 				VARCHAR(50) NOT NULL,
	prenom 				VARCHAR(50) NOT NULL,
	adr_courriel		VARCHAR(70) NOT NULL,
	titre				TEXT NOT NULL,
	message				TEXT NOT NULL,
	date_creation 		TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)  ENGINE=INNODB;