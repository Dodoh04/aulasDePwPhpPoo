create database dbClientes CHARACTER SET utf8 COLLATE utf8_general_ci;

use dbClientes;

create table tbClientes(
codCli int not null auto_increment,
nomeCli varchar(100),
sobreNomeCli varchar(100),
emailCli varchar(100),
cpf varchar(14) not null,
sexo varchar(10) not null,
usuario varchar(20) not null,
senha varchar(10) not null,
primary key(codCli))ENGINE=InnoDB DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci;