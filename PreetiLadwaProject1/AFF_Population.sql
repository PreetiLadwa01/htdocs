/*
Aerial Fire Fighting Database
Population Script
Project 1 IS 667
Spring 2022
HG Locklear
*/

USE aerialfirefighting;

INSERT INTO aircraft VALUES ('DC-10','Heavy',876,21700,6500,12000);
INSERT INTO aircraft VALUES ('C-130','Medium',541,6900,3800,3000);
INSERT INTO aircraft VALUES ('P-3','Medium',607,2500,9200,3000);


INSERT INTO airfield VALUES ('AF-Alpha',2,12,10,11,'AFAlpha.png');
INSERT INTO airfield VALUES ('AF-Beta',1,6,50,30,'AFBeta.png');
INSERT INTO airfield VALUES ('AF-Gamma',2,10,80,20,'AFGamma.png');
INSERT INTO airfield VALUES ('AF-Delta',1,9,20,80,'AFDelta.png');
INSERT INTO airfield VALUES ('AF-Sigma',1,8,70,10,'AFSigma.png');
INSERT INTO airfield VALUES ('AF-Tau',2,10,90,70,'AFTau.png');

INSERT INTO availableAircraft VALUES ('DC-10-1','DC-10','AF-Alpha','Ready');
INSERT INTO availableAircraft VALUES ('DC-10-2','DC-10','AF-Alpha','Ready');
INSERT INTO availableAircraft VALUES ('DC-10-3','DC-10','AF-Alpha','Ready');
INSERT INTO availableAircraft VALUES ('P-3-1','P-3','AF-Beta','Ready');
INSERT INTO availableAircraft VALUES ('P-3-2','P-3','AF-Beta','Ready');
INSERT INTO availableAircraft VALUES ('P-3-3','P-3','AF-Beta','Ready');
INSERT INTO availableAircraft VALUES ('P-3-4','P-3','AF-Sigma','Ready');
INSERT INTO availableAircraft VALUES ('P-3-5','P-3','AF-Sigma','Ready');
INSERT INTO availableAircraft VALUES ('P-3-6','P-3','AF-Sigma','Ready');
INSERT INTO availableAircraft VALUES ('C-130-1','C-130','AF-Delta','Ready');
INSERT INTO availableAircraft VALUES ('C-130-2','C-130','AF-Delta','Ready');
INSERT INTO availableAircraft VALUES ('C-130-3','C-130','AF-Gamma','Ready');
INSERT INTO availableAircraft VALUES ('C-130-4','C-130','AF-Gamma','Ready');

INSERT INTO fireTarget (FireID,FireLocation,FireStatus,FireSize) 
VALUES ('Fire-1','Sector-1','Uncontained','Large');
INSERT INTO fireTarget (FireID,FireLocation,FireStatus,FireSize) 
VALUES ('Fire-2','Sector-2','Out','Small');
INSERT INTO fireTarget (FireID,FireLocation,FireStatus,FireSize) 
VALUES ('Fire-3','Sector-3','Contained','Medium');
INSERT INTO fireTarget (FireID,FireLocation,FireStatus,FireSize) 
VALUES ('Fire-4','Sector-4','Uncontained','Very Large');

INSERT INTO location VALUES ('Sector-1','Grass','Flat',400,200);
INSERT INTO location VALUES ('Sector-2','Grass','Hilly',800,700);
INSERT INTO location VALUES ('Sector-3','Bush','Broken',600,400);
INSERT INTO location VALUES ('Sector-4','Trees','Hilly',900,100);