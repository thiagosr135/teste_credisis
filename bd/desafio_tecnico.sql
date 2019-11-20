create database desafio_tecnico;
use desafio_tecnico;

create table municipio(
id_municipio int not null auto_increment primary key,
nome_municipio varchar(100) not null,
prefeito varchar(200),
populacao varchar(255)
);

create table estado(
id_estado int not null auto_increment primary key,
nome_estado varchar(50) not null,
sigla varchar(2) not null,
id_municipio int,
foreign key(id_municipio)
references municipio(id_municipio)
);

insert into municipio values (1, 'Ji-Paraná', 'Jesualdo Pires', '132.667 hab. (2017)');
insert into estado values(1, 'Rondônia', 'RO', 1);
