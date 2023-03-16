create database dboformulario;
use dboformulario;

create table tbCliente(
codCli int not null auto_increment,
nome varchar(100),
sobrenome varchar(100),
email varchar(100),
cpf char(14) unique,
sexo char (1) default 'F' check(sexo in('F', 'M')),
usuario varchar (20) not null,
senha varchar (10) not null,
primary key(codCli)
);