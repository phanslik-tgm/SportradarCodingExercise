-- Erstellt Testdatenbank und loescht vorhandene DB
DROP DATABASE IF EXISTS sportEvents;

CREATE DATABASE sportEvents;

USE sportEvents;

CREATE TABLE Event (
    EventID INT AUTO_INCREMENT,
    TeamNames VARCHAR(255),
    Sport VARCHAR(255),
    EventDate DATE,
    EventTime TIME,
    PRIMARY KEY (EventID)
);
-- Der Wochentag muss nicht gespeichert werden, da er beim Auslesen von PHP festgestellt werden kann
-- Statt DATE und TIME könnte ich auch DATETIME benutzen


INSERT INTO Event (TeamNames, Sport, EventDate, EventTime)
VALUES ('Salzburg – Sturm', 'Football', '2019-07-18', '18:30:00');

INSERT INTO Event (TeamNames, Sport, EventDate, EventTime)
VALUES ('KAC - Capitals', 'Ice Hockey', '2019-10-23', '09:45:00');


SELECT * FROM Event;
