CREATE TABLE Regione (
    regione_id int NOT NULL AUTO_INCREMENT,
    Nome varchar(255),
    PRIMARY KEY (regione_id)
);

INSERT INTO regione (Nome) VALUES('Abruzzo');

TRUNCATE regione;


drop Table regione;