CREATE DATABASE SimulationEmprunt;
USE  SimulationEmprunt;

CREATE TABLE Users(
    id int primary key auto_increment,
    pseudo varchar(50) not null,
    mdp varchar(65) not null
) engine=InnoDB;

CREATE TABLE Emprunt(
    id int primary key auto_increment,
    idUSer int references Users(id),
    nom varchar(50) default NULL,
    montant double precision not null,
    tauxInteret decimal (3,2) not null,
    dureeAmortissement int not null,
    dateEmprunt date not null
) engine=InnoDB;