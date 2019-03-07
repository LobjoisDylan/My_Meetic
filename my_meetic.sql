DROP DATABASE IF EXISTS my_meetic;
CREATE DATABASE my_meetic;

USE my_meetic;

DROP TABLE IF EXISTS `renseignement`;

CREATE TABLE `renseignement` (
	`nom` varchar(255) NOT NULL,
	`prenom` varchar(255) NOT NULL,
	`date_de_naissance` varchar(255) NOT NULL,
	`sexe` varchar(255) NOT NULL,
	`ville` varchar(255) NOT NULL,
	`email` varchar(255) NOT NULL,
	`mot_de_passe` varchar(255) NOT NULL,
	`suppression` int(10) DEFAULT 1,
	`age` int(10) NULL 
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `renseignement` (`nom`, `prenom`, `date_de_naissance`, `sexe`, `ville`, `email`, `mot_de_passe`, `suppression`) VALUES
('Lobjois', 'Dylan', '1998-07-23', 'homme', 'Paris', 'dylan1.lobjois@epitech.eu', '123456', '1'),
('Camara', 'Mahdi', '1997-09-09', 'homme', 'Marseille', 'mahdi.camara@epitech.eu', '123456', '1'),
('Cyrus', 'Jérôme', '1992-06-01', 'homme', 'Lyon', 'jerome.cyrus@epitech.eu', '123456', '1'),
('Fradetal', 'Fleur', '1995-03-08', 'femme', 'Paris', 'fleur.fradetal@epitech.eu', '123456', '1'),
('Lobjois', 'Cécile', '1969-04-17', 'femme', 'Marseille', 'cecile.lobjois@outlook.com', '123456', '1'),
('Derderian', 'Joëlle', '1997-02-13', 'femme', 'Lyon', 'joelle.derderian@eoutlook.com', '123456', '1'),
('Benyacoub', 'Yazid', '1989-02-13', 'autre', 'Lyon', 'yazid.benyacoub@outlook.com', '123456', '1'),
('Marokino', 'Salah', '1962-07-02', 'autre', 'Paris', 'salah.marokino@outlook.com', '123456', '1'),
('Leduc', 'Romain', '1934-01-17', 'femme', 'Marseille', 'romain.leduc@outlook.com', '123456', '1'),
('Matuidi', 'Blaise', '1945-09-13', 'autre', 'Lyon', 'blaise.matuidi@outlook.com', '123456', '1'),
('Chinois', 'Tanguy', '1967-04-13', 'homme', 'Paris', 'tanguy.chinois@outlook.com', '123456', '1'),
('Sissoko', 'Alan', '1963-12-01', 'autre', 'Paris', 'alan.sissoko@outlook.com', '123456', '1'),
('Decamps', 'Dany', '1957-03-14', 'homme', 'Marseille', 'dany.decamps@outlook.com', '123456', '1'),
('Rhoc', 'Kallista', '1977-06-30', 'autre', 'Lyon', 'kallista.rhoc@outlook.com', '123456', '1'),
('Lethon', 'Simon', '1983-04-13', 'femme', 'Marseille', 'simon.lethon@outlook.com', '123456', '1'),
('Beaugoss', 'Morgane', '1995-04-02', 'homme', 'Paris', 'morgane.beaugoss@outlook.com', '123456', '1')