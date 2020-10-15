create database if not exists auditoriadb default character set utf8 default collate utf8_general_ci;

use auditoriadb;

create table if not exists tb_auditor(
id int auto_increment not null primary key,
nome varchar(255) not null,
telefone varchar(20) not null
)default character set utf8 default collate utf8_general_ci;

create table if not exists tb_auditoria(
id int auto_increment not null primary key,
achado varchar(255) not null,
manifestacao varchar(255) not null,
conclusao varchar(255) not null,
prazo int not null,
estimativa int not null,
auditor_id int not null,
foreign key (auditor_id) references tb_auditor(id)
)default character set utf8 default collate utf8_general_ci;


insert into tb_auditor values(default,'Juliano Cunha', '(84) 98118-1818');
insert into tb_auditor values(default,'Jessica Cabral', '(84) 98785-1588');
insert into tb_auditor values(default,'Maria Lucia', '(83) 98338-2020');

insert into tb_auditoria values(default,'Achado 1.1 falhas nas Contratações de TI', 'discorda da declaração das falhas','Concluo esta auditoria com fins da Lei do consumidor', 15, 15, 1);