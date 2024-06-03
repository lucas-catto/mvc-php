
DROP DATABASE mvc_php;
CREATE DATABASE mvc_php;
USE mvc_php;

CREATE TABLE pessoa (
    pessoaId INT PRIMARY KEY AUTO_INCREMENT,
    pessoaNome VARCHAR(45) NOT NULL,
    pessoaCPF CHAR(11) NOT NULL,
    pessoaDataNascimento DATE NOT NULL
);
