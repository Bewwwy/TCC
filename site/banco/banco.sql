CREATE DATABASE TCC;

CREATE TABLE tb_animal (
    ID_pet INT(3) NOT NULL AUTO_INCREMENT,
    nome_pet VARCHAR(30) NOT NULL,
    foto MEDIUMBLOB NOT NULL,
    idade INT(2) NOT NULL,
    sexo ENUM('Masculino', 'Feminino') NOT NULL,
    descr VARCHAR(700) NOT NULL,
    status_pet BOOLEAN NOT NULL,
    PRIMARY KEY (ID_pet)
);

CREATE TABLE tb_doacoes (
    ID_doa INT(2) NOT NULL AUTO_INCREMENT,
    razao VARCHAR(50) NOT NULL,
    pix VARCHAR(50) NOT NULL,
    banco VARCHAR(30) NOT NULL,
    agencia INT(4),
    nome VARCHAR(50) NOT NULL,
    qr_code BLOB NOT NULL,
    PRIMARY KEY (ID_doa)
);

CREATE TABLE tb_adm (
    ID_adm INT(2) NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    user VARCHAR(15) NOT NULL,
    senha VARCHAR(15) NOT NULL,
    PRIMARY KEY (ID_adm, user)
);

CREATE TABLE tb_forms (
    ID_pet INT(3),
    ID_form INT(4) NOT NULL AUTO_INCREMENT,
    nome_completo VARCHAR(50) NOT NULL,
    idade INT(3) NOT NULL,
    CPF VARCHAR(10) NOT NULL,
    CEP INT(8) NOT NULL,
    email VARCHAR(50) NOT NULL,
    numero VARCHAR(15) NOT NULL,
    PRIMARY KEY (ID_form),
    FOREIGN KEY (ID_pet) REFERENCES tb_animal (ID_pet) ON DELETE RESTRICT
);