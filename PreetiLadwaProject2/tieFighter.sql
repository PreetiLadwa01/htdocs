CREATE DATABASE tieFighter;

USE tieFighter;

/*creating tables for the database*/
DROP TABLE IF EXISTS tieModel;
CREATE TABLE tieModel(
Model VARCHAR(50),
Class VARCHAR(50),
Cost INT,
Manufacturer ENUM('Sienar Industries','Other Industries'),
CONSTRAINT PK_TM PRIMARY KEY(Model)
);

DROP TABLE IF EXISTS tieSpecifications;
CREATE TABLE tieSpecifications(
Model VARCHAR(50),
Length INT,
Width INT,
Height INT,
Mass INT,
Crew INT,
CONSTRAINT FK_TS FOREIGN KEY(Model) REFERENCES tieModel(Model)
);

DROP TABLE IF EXISTS tiePerformance;
CREATE TABLE tiePerformance(
Model VARCHAR(50),
MaxSpeed INT,
MaxClimb INT,
CONSTRAINT FK_TP FOREIGN KEY(Model) REFERENCES tieModel(Model)
);

DROP TABLE IF EXISTS tiePropulsion;
CREATE TABLE tiePropulsion(
Model VARCHAR(50),
Propulsion ENUM('Ion Engine','Hyper Ion Engine','Tri-Ion Engine'),
CONSTRAINT FK_TP1 FOREIGN KEY(Model) REFERENCES tieModel(Model)
);

DROP TABLE IF EXISTS tieConstruction;
CREATE TABLE tieConstruction(
Model VARCHAR(50),
Hull ENUM('Durian Alloy','Alanium Graphite','Enhanced Alanium Graphite'),
CONSTRAINT FK_TC FOREIGN KEY(Model) REFERENCES tieModel(Model)
);

DROP TABLE IF EXISTS tieArmament;
CREATE TABLE tieArmament(
Model VARCHAR(50),
CannonType ENUM('L1 Laser','L1A1 Laser','L2 Laser'),
Cannons INT,
InternalOrdnance ENUM('None','Proton Bombs'),
OrdnanceCount INT,
CONSTRAINT FK_TA FOREIGN KEY(Model) REFERENCES tieModel(Model)
);

DROP TABLE IF EXISTS tieInventory;
CREATE TABLE tieInventory(
TFID VARCHAR(50),
Model VARCHAR(50),
Status ENUM('Damaged','Operational','Destroyed'),
CONSTRAINT PK_TI PRIMARY KEY(TFID),
CONSTRAINT FK_TI FOREIGN KEY(Model) REFERENCES tieModel(Model)
);

