CREATE DATABASE IF NOT EXISTS BASESEGURA
DEFAULT CHARACTER SET UTF8MB4 COLLATE UTF8MB4_GENERAL_CI;

USE BASESEGURA;

DROP TABLE IF EXISTS T_PERSONA;

CREATE TABLE IF NOT EXISTS T_PERSONA (
	ID INT(11) NOT NULL AUTO_INCREMENT,
	NOMBRE VARCHAR(45) DEFAULT NULL,
	PATERNO VARCHAR(45) DEFAULT NULL,
	MATERNO VARCHAR(45) DEFAULT NULL,
	TELEFONO VARCHAR(45) DEFAULT NULL,
	PRIMARY KEY (ID)
) ENGINE=INNODB AUTO_INCREMENT=1 DEFAULT CHARSET=UTF8MB4;