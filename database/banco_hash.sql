create database banco_hash;
use banco_hash;

create table usuarios(
    id int auto_increment primary key,
    nome varchar(120) not null,
    email varchar(120) not null unique,
    senha varchar(120) not null,
    data_criacao timestamp default current_timestamp,
    foto_perfil varchar(255) default 'default_jpg'
);