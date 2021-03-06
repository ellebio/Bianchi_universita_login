DROP DATABASE IF EXISTS bianchi_università;

CREATE DATABASE IF NOT EXISTS bianchi_università;

USE bianchi_università;

CREATE TABLE Creds (
    user varchar(25) NOT NULL,
    pwd varchar(25) NOT NULL,
    PRIMARY KEY (user, pwd)
);

CREATE TABLE Studente (
    matricola INT AUTO_INCREMENT,
    nome VARCHAR (25) NOT NULL,
    cognome VARCHAR (25) NOT NULL,
    età INT NOT NULL CHECK (
        età > 0
        AND età < 120
    ),
    PRIMARY KEY (matricola)
);

INSERT INTO
    Creds (user, pwd)
VALUES
    ("user1", "pw1"),
    ("user2", "pw2"),
    ("user3", "pw3");