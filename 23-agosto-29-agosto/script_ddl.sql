create table aluno(
   id integer auto_increment primary key,
   nome varchar(100) not null
);

insert into aluno (nome) values ('um nom qualquer');


select * from aluno 