CREATE DATABASE IF NOT EXISTS sterrenstelsel;
USE sterrenstelsel;
CREATE TABLE planeten (
    naam varchar(255)
);
INSERT INTO planeten (naam) 
VALUES ('Zon'), ('Mercurius'), ('Venus'), ('Aarde'), ('Mars');
TRUNCATE TABLE planeten;
ALTER TABLE planeten ADD diameter int(11), ADD afstand int(11), ADD massa int(11);
ALTER TABLE planeten MODIFY COLUMN naam varchar(255) NOT NULL DEFAULT 0;
ALTER TABLE planeten MODIFY COLUMN diameter int(11) NOT NULL DEFAULT 0;
ALTER TABLE planeten MODIFY COLUMN afstand int(11) NOT NULL DEFAULT 0;
ALTER TABLE planeten MODIFY COLUMN massa int(11) NOT NULL DEFAULT 0;
INSERT INTO planeten (naam, diameter, afstand, massa)
VALUES ('Zon', '1392000', '0', '332946'), ('Mercurius', '4880', '579100000', '0'), ('Venus', '12104', '108208930', '1'), ('Aarde', '12756', '149597870', '1'), ('Mars', '6794', '227936640', '0');
ALTER TABLE planeten ADD bezoek_datum DATE;
INSERT INTO planeten (naam, diameter, afstand, massa, bezoek_datum) 
VALUES ('Maan', '3474', '384400', '7511' '1969-08-01');
UPDATE planeten SET bezoek_datum = 1969 WHERE naam = 'maan';
UPDATE planeten set bezoek_datum = 0 WHERE naam NOT 'maan';




