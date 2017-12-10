/* BASE DE DONNÉES POUR LE SITE DE SPORT*/

CREATE TABLE Utilisateur(
	id INT PRIMARY KEY
	Login VARCHAR(50),
	Nom VARCHAR(40) NOT NULL,
	Prenom VARCHAR(40) NOT NULL,
	Password VARCHAR(255) NOT NULL,
	Mail VARCHAR(100) NOT NULL,
	Avatar TEXT NOT NULL,
	CONSTRAINTS c1 UNIQUE (Nom, Prenom),
	CONSTRAINTS c2 UNIQUE (Password, Mail)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE Membre(
	idMembre INT PRIMARY KEY,
	Login VARCHAR(50) REFERENCES ,
	nomEquipe VARCHAR(50) REFERENCES ,
	isAdmin BOOLEAN,
	isEntraineur BOOLEAN,
	/*PRIMARY KEY(Login, Password),*/
	FOREIGN KEY(idMembre) REFERENCES Utilisateur(id),
	FOREIGN KEY(Login) REFERENCES Utilisateur,
	FOREIGN KEY(Password) REFERENCES Utilisateur,

) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE Equipe(
	NomEquipe VARCHAR(50) PRIMARY KEY,
	Mdp_Inscrit VARCHAR(255) NOT NULL,
	Sport VARCHAR(50) NOT NULL,
	Ville VARCHAR(60) NOT NULL,
	Description TEXT DEFAULT NULL,
	Mixite ENUM('Oui', 'Non'), /*Definir une contrainte*/
	idAdmin
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE Admin(
	idAdmin INT PRIMARY KEY,
	Login VARCHAR(50),
	Nom_Equipe VARCHAR(50),
	PRIMARY KEY(Login, Nom_Equipe),
	FOREIGN KEY(Login) REFERENCES Membre,
	FOREIGN KEY(Nom_Equipe) REFERENCES Equipe(Nom)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Invitations(
	idInvitation INT PRIMARY KEY,
	LoginMembreInvite VARCHAR(50),
	LoginAdmin VARCHAR(50),
	NomEquipe VARCHAR(50)

) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Evenement(
	Type VARCHAR(30),
	Debut DATE,
	Fin DATE,
	Periodicite INT,
	Lieu VARCHAR(50),
	Description TEXT DEFAULT NULL,
	NomEquipe VARCHAR
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE Entraineur(
	idEntraineur INT PRIMARY KEY,
	Login VARCHAR(50) REFERENCES Membre
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE Calendrier(
	numCal INT PRIMARY KEY,
	Login VARCHAR(50),
	...
) ENGINE=InnoDB DEFAULT CHARSET=utf8;