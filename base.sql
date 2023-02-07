create database troc;
use troc;

create table Categorie(
	idCategorie int AUTO_INCREMENT primary key,
	nom varchar(30)
);

create table Utilisateur(
	idUtilisateur int AUTO_INCREMENT primary key,
	nom varchar(80),
	email varchar(80) unique not null,
	motDePasse varchar(30)
);

create table Objet(
	idObjet int AUTO_INCREMENT primary key,
	categorie int not null,
	propriétaire int not null,
	nom varchar(80) not null,
	image varchar(120) not null,
	prix double not null,
	description varchar(240) not null,
	foreign key (categorie) references Categorie(idCategorie),
	foreign key (propriétaire) references Utilisateur(idUtilisateur)
);

insert into Utilisateur values(null,'superuser','superuser@gmail.com','superuser1234');

insert into Utilisateur values(null ,'Rakoto John','Johnraks@gmail.com','srt2004');
insert into Utilisateur values(null ,'Ramanandraibe Toky','Tokyrh@gmail.com','rhtoky12');
insert into Utilisateur values(null ,'Rabenarivo Miantsa','Miantsa12@gmail.com','wahuan21');
insert into Utilisateur values(null ,'Rakotoson Naina','Nainaraks@gmail.com','artiste23');
insert into Utilisateur values(null ,'Rajoelina Tsito','Tsitorajoelina@gmail.com','mits34');
