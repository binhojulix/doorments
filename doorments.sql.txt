create database doorments;

use doorments;

create table usuario(id integer auto_increment, nome varchar(50), email varchar(50), senha varchar(255
), primary key(id));

CREATE TABLE noticias (
id int(5) NOT NULL auto_increment,
nome char(30) NOT NULL ,
sobrenome char(30) NOT NULL ,
cidade char(50) NOT NULL ,
estado char(2) NOT NULL ,
email char(80) ,
data date NOT NULL,
hora time NOT NULL ,
titulo char(100) NOT NULL ,
subtitulo char(200) ,
texto text NOT NULL ,
ver char(3) DEFAULT 'off' ,
PRIMARY KEY (id),
UNIQUE id (id)
);