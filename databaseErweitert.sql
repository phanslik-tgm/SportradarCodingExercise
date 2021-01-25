-- Erstellt Testdatenbank und loescht vorhandene DB
DROP DATABASE IF EXISTS sportEvents2;

CREATE DATABASE sportEvents2;

USE sportEvents2;

CREATE TABLE Sport (
  SportID INT AUTO_INCREMENT,
  SportName VARCHAR(255),
  UNIQUE (SportName),
  PRIMARY KEY (SportID)
);

-- TODO ??? ich könnte dem Team auch die SportID als foreignKey mitgeben und sie aus dem event entfernen
CREATE TABLE Team (
  TeamID INT AUTO_INCREMENT,
  TeamName VARCHAR(255),
  UNIQUE (TeamName),
  PRIMARY KEY (TeamID)
);

CREATE TABLE Event (
    EventID INT NOT NULL AUTO_INCREMENT,
    _TeamAID INT,
    _TeamBID INT,
    _SportID INT,
    EventDate DATE,
    EventTime TIME,
    PRIMARY KEY (EventID),
    FOREIGN KEY (_SportID) REFERENCES Sport(SportID),
    CONSTRAINT _TeamAID FOREIGN KEY (_TeamAID) REFERENCES Team(TeamID),
    CONSTRAINT _TeamBID FOREIGN KEY (_TeamAID) REFERENCES Team(TeamID)

);
-- Der Wochentag muss nicht gespeichert werden, da er beim Auslesen von PHP festgestellt werden kann
-- Statt DATE und TIME könnte ich auch DATETIME benutzen


INSERT INTO Sport (SportName)
VALUES ('Football');

INSERT INTO Sport (SportName)
VALUES ('Ice Hockey');

INSERT INTO Team (TeamName)
VALUES ('Salzburg');

INSERT INTO Team (TeamName)
VALUES ('Sturm');

INSERT INTO Team (TeamName)
VALUES ('KAC');

INSERT INTO Team (TeamName)
VALUES ('Capitals');


-- funktioniert noch nicht
--> TODO ??? ich habe schon eine Idee wie es funktionieren könnte muss mich jedoch noch einlesen
insert into Event (_TeamAID, _TeamBID, _SportID, EventDate, EventTime)
select
    TeamAID, TeamBID, SportID, '2019-07-18', '18:30:00'
from Sport where SportName = 'Football'
AND Team where TeamName = 'Salzburg'
AND Team where TeamName = 'Sturm';


insert into Event (TeamNames, _SportID, EventDate, EventTime)
select
    'KAC - Capitals', SportID, '2019-10-23', '09:45:00'
from Sport where SportName = 'Ice Hockey',
AND Team where TeamName = 'KAC'
AND Team where TeamName = 'Capitals';



SELECT * FROM Event;
