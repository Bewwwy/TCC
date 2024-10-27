CREATE DATABASE TCC;

CREATE TABLE tb_animal (
    ID_pet INT(3) NOT NULL AUTO_INCREMENT,
    nome_pet VARCHAR(30) NOT NULL,
    foto VARCHAR(255) NOT NULL,
    idade INT(2) NOT NULL,
    sexo ENUM('Masculino', 'Feminino') NOT NULL,
    descr VARCHAR(700) NOT NULL,
    status_pet BOOLEAN,
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
    senha VARCHAR(255) NOT NULL,
    PRIMARY KEY (ID_adm, user)
);

CREATE TABLE tb_f_adocao (
    ID_pet INT(3),
    ID_form INT(5) NOT NULL AUTO_INCREMENT,
    nome_completo VARCHAR(50) NOT NULL,
    idade DATE NOT NULL,
    CPF VARCHAR(14) NOT NULL,
    CEP VARCHAR(10) NOT NULL,
    email VARCHAR(80) NOT NULL,
    numero VARCHAR(15) NOT NULL,
    PRIMARY KEY (ID_form),
    FOREIGN KEY (ID_pet) REFERENCES tb_animal(ID_pet) ON DELETE CASCADE
);

CREATE TABLE tb_msg (
    ID_msg INT(3) NOT NULL AUTO_INCREMENT,
    nome_completo VARCHAR(50) NOT NULL,
    email VARCHAR(80) NOT NULL,
    msg VARCHAR(700) NOT NULL,
    PRIMARY KEY (ID_msg)
);