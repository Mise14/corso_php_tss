-- Active: 1678176946563@@127.0.0.1@3306@form_in_php
CREATE TABLE regione (
    regione_id int NOT NULL AUTO_INCREMENT,
    nome varchar(255),
    PRIMARY KEY (regione_id)
);

CREATE TABLE provincia (
    provincia_id int NOT NULL AUTO_INCREMENT,
    nome varchar(255),
    sigla char(2),
    regione_id int,
    PRIMARY KEY (provincia_id),
    Foreign Key (regione_id) REFERENCES regione(regione_id)
);

INSERT INTO regione (nome) VALUES('Abruzzo');

TRUNCATE regione;


drop Table regione;

drop Table provincia;