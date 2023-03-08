-- Active: 1678176946563@@127.0.0.1@3306@form_in_php
CREATE TABLE Regione (
    regione_id int NOT NULL AUTO_INCREMENT,
    Nome varchar(255),
    PRIMARY KEY (regione_id)
);

CREATE TABLE Provincia (
    provincia_id int NOT NULL AUTO_INCREMENT,
    Nome varchar(255),
    Sigla char(2),
    regione_id int,
    PRIMARY KEY (provincia_id),
    Foreign Key (regione_id) REFERENCES Regione(regione_id)
);

INSERT INTO regione (Nome) VALUES('Abruzzo');

TRUNCATE regione;


drop Table regione;

drop Table provincia;