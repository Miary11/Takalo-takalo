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



insert into Objet values(null,4,2,'Rolex','assets/img/montre1.jpg',4000000,'Rolex noire personnalisée avec minuterie');
insert into Objet values(null,4,3,'Apple Watch','assets/img/montre2.jpg',1200000,'Apple Watch noire 2ème génération.');
insert into Objet values(null,1,4,'Cargo','assets/img/pantalon1.jpg',50000,'Pantalon Cargo beige taille S Homme.');
insert into Objet values(null,1,5,'Chino Noir','assets/img/pantalon2.jpg',30000,'Chino noir taille L Femme coupe droite.');
insert into Objet values(null,2,6,'Coraline','assets/img/dvd1.jpg',25000,'DVD du dessin animé Coraline.');

insert into Objet values(null,3,2,'Running Noir','assets/img/chaussures1.jpg',140000,'Chaussures de running noires pointure 42 Homme.');
insert into Objet values(null,1,3,'Short en Jean','assets/img/short.jpg',16000,'Short en Jean taille S Femme.');
insert into Objet values(null,1,4,'T-Shirt Noir','assets/img/tshirt1.jpg',8000,'T-Shirt Noir taille M Homme.');
insert into Objet values(null,1,5,'T-Shirt Bleu','assets/img/tshirt2.jpg',8000,'T-Shirt Bleu taille M Homme.');
insert into Objet values(null,2,6,'Dark Night Saga','assets/img/dvd2.jpg',500000,'Coffret DVD de la saga Dark Night');

insert into Objet values(null,2,6,'The Chosen One Saison 2','assets/img/dvd3.jpg',200000,'Coffret DVD de la saison 2 de la série : The Chosen One.');
insert into Objet values(null,5,3,'Quatre Nuits','assets/img/livre.jpg',20000,'Le livre des Quatre Nuits');

insert into Categorie values(null,'Vêtements');
insert into Categorie values(null,'DVD');
insert into Categorie values(null,'Chaussures');
insert into Categorie values(null,'Montres');
insert into Categorie values(null,'Livres');


create table proposition(
	utilisateur1 int not null,
	utilisateur2 int not null,
	objet1 int not null,
	objet2 int not null,
	foreign key (utilisateur1) references Utilisateur(idUtilisateur),
	foreign key (utilisateur2) references Utilisateur(idUtilisateur),
	foreign key (objet1) references Objet(idObjet),
	foreign key (objet2) references Objet(idObjet)
);

create or replace view ObjetDetail as(select idObjet,Categorie.nom as CategorieNom,Utilisateur.nom as Propriétaire,Objet.nom,image,prix,description 
	from Objet
	join Categorie on Categorie.idCategorie = Objet.categorie
	join Utilisateur on Objet.propriétaire = Utilisateur.idUtilisateur
);