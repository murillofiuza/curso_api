<b>Curso de API REST utilizando os recursos:</b>
<br>-Laravel 9.5
<br>-PHP 8
<br>-Insomnia - para fazer os end point e consumir.
<br>-VSCode - para trabalhar o codigo

<br>BANCO DE DADOS
<br>
create database teste_api;
<br>
use teste_api;

<br>
create table testamento(
<br>id int auto_increment primary key,
<br>nome varchar(40)
<br>);

<br>
create table livro(
<br>id int auto_increment primary key,
<br>nome varchar(40) ,
<br>abreviacao varchar(10),
<br>id_testamento int
<br>);

<br>
create table capitulo(
<br>id int auto_increment primary key,
<br>capitulo int,
<br>versiculo varchar(40),
<br>texto text,
<br>id_livro int
<br>);
