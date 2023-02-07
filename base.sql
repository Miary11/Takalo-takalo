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
insert into Utilisateur values(null ,'Rakoto John','Johnraks@gmail.com','srt2004');
insert into Utilisateur values(null ,'Ramanandraibe Toky','Tokyrh@gmail.com','rhtoky12');
insert into Utilisateur values(null ,'Rabenarivo Miantsa','Miantsa12@gmail.com','wahuan21');
insert into Utilisateur values(null ,'Rakotoson Naina','Nainaraks@gmail.com','artiste23');
insert into Utilisateur values(null ,'Rajoelina Tsito','Tsitorajoelina@gmail.com','mits34');

insert into Objet values(null,1,'montre rolex','montre1.jpg',200,'montre personnalisée noire,avec une minuterie',4);
insert into Objet values(null,2,'montre watch','montre2.jpg',150,'montre noire,version2 avec blueotooth',4);
insert into Objet values(null,3,'cargo homme','pantalon1.jpg',50,'cargo beige pour homme taille S',1);
insert into Objet values(null,4,'pantalon noir','pantalon2.jpg',30,'pantalon noir taille L',1);
insert into Objet values(null,5,'dvd Coraline','dvd1.jpg',10,'dessin animé Coraline',2);




