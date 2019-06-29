CREATE DATABASE provapratica;
USE provapratica;
CREATE TABLE user (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR (100) NOT NULL,
    apelido VARCHAR (50) NOT NULL,
    telefone VARCHAR(14),
    email VARCHAR(100)
);