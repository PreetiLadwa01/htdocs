DROP DATABASE IF EXISTS aerialfirefighting;
CREATE DATABASE aerialfirefighting;
USE aerialfirefighting;

/*TABLE CREATION FOR Aircraft*/ 
DROP TABLE IF EXISTS Aircraft;
CREATE TABLE Aircraft(
ACModel VARCHAR(100),
ACType VARCHAR(100),
FlightSpeed INT,
FuelCapacity INT,
MissionRange INT,
WaterCapacity INT,
CONSTRAINT pk_ACModel PRIMARY KEY(ACModel));

DROP TABLE IF EXISTS Airfield;
CREATE TABLE Airfield(
AFID VARCHAR(100),
Runways INT,
Hangers INT,
LOC_LAT INT,
LOC_LON INT,
Image VARCHAR(100),
CONSTRAINT pk_Airfield PRIMARY KEY(AFID),
CONSTRAINT uk_Airfield UNIQUE KEY (LOC_LAT),
CONSTRAINT uk_Airfield1 UNIQUE KEY (LOC_LON)); 


DROP TABLE IF EXISTS AvailableAircraft;
CREATE TABLE AvailableAircraft(
ACID VARCHAR(50),
ACModel VARCHAR(100),
AFAssigned VARCHAR(100),
ACStatus ENUM('Ready','Not Ready') NOT NULL,
CONSTRAINT pk_AvailAir PRIMARY KEY(ACID),
CONSTRAINT fk_AvailAircraft FOREIGN KEY(ACModel) REFERENCES Aircraft(ACModel),
CONSTRAINT fk_AvailAircraft1 FOREIGN KEY(AFAssigned) REFERENCES Airfield(AFID)); 

DROP TABLE IF EXISTS FireTarget;
CREATE TABLE FireTarget(
FireNumber INT NOT NULL AUTO_INCREMENT,
FireID VARCHAR(25) NOT NULL,
FireLocation VARCHAR(100),
FireStatus ENUM('Uncontained','Contained','Out'),
FireSize ENUM('Small','Medium','Large','Very Large'),
CONSTRAINT pk_FireNum PRIMARY KEY(FireNumber),
CONSTRAINT uk_FireTarget UNIQUE KEY(FireLocation));

DROP TABLE IF EXISTS Location;
CREATE TABLE Location(
LocationID VARCHAR(25),
Vegetation ENUM('Grass','Bush','Trees') NOT NULL,
Terrain ENUM('Flat','Hilly','Broken') NOT NULL,
LOC_LAT INT,
LOC_LONG INT,
CONSTRAINT pk_Location PRIMARY KEY(LocationID),
CONSTRAINT uk_LLat UNIQUE KEY(LOC_LAT),
CONSTRAINT UK_LLong UNIQUE KEY(LOC_LONG));
