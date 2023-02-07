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

