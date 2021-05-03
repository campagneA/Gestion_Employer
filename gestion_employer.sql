-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 03 mai 2021 à 11:19
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_employer`
--

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

CREATE TABLE `employes` (
  `noemp` int(4) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `emploi` varchar(20) DEFAULT NULL,
  `sup` int(4) DEFAULT NULL,
  `embauche` date DEFAULT NULL,
  `sal` float(9,2) DEFAULT NULL,
  `comm` float(9,2) DEFAULT NULL,
  `noserv` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employes`
--

INSERT INTO `employes` (`noemp`, `nom`, `prenom`, `emploi`, `sup`, `embauche`, `sal`, `comm`, `noserv`) VALUES
(1000, 'Leroy', 'Paul', 'President', NULL, '1987-10-25', 55005.50, NULL, 1),
(1100, 'Delpierre', 'Dorothee', 'Secretaire', 1000, '1987-10-25', 12351.00, NULL, 1),
(1101, 'Dumont', 'Louis', 'Vendeur', 1300, '1987-10-25', 9047.00, 0.00, 1),
(1102, 'Minet', 'Marc', 'Vendeur', 1300, '1987-10-25', 8085.00, 17230.00, 1),
(1104, 'Nys', 'Etienne', 'Technicien', 1200, '1987-10-25', 12342.00, NULL, 1),
(1105, 'Denimal', 'Jerome', 'Comptable', 1600, '1987-10-25', 15746.00, NULL, 1),
(1200, 'Lemaire', 'Guy', 'Directeur', 1000, '1987-03-11', 36303.00, NULL, 2),
(1201, 'Martin', 'Jean', 'Technicien', 1200, '1987-06-25', 11235.00, NULL, 2),
(1202, 'Dupont', 'Jacques', 'Technicien', 1200, '1988-11-30', 10313.00, NULL, 2),
(1300, 'Lenoir', 'Gerard', 'Directeur', 1000, '1987-04-02', 31353.00, 13071.00, 3),
(1301, 'Gerard', 'Robert', 'Vendeur', 1300, '1999-04-16', 7694.00, 12430.00, 3),
(1303, 'Masure', 'Emile', 'Technicien', 1200, '1988-06-17', 10451.00, NULL, 3),
(1500, 'Dupont', 'Jean', 'Directeur', 1000, '1987-10-23', 28434.00, NULL, 5),
(1501, 'Dupire', 'Pierre', 'Analyste', 1500, '1984-10-24', 23102.00, NULL, 5),
(1502, 'Durand', 'Bernard', 'Programmeur', 1500, '1987-07-30', 13201.00, NULL, 5),
(1503, 'Delnatte', 'Luc', 'Pupitreur', 1500, '1999-01-15', 8801.00, NULL, 5),
(1600, 'Lavare', 'Paul', 'Directeur', 1000, '1991-12-13', 31238.00, NULL, 6),
(1601, 'Caron', 'Alain', 'Comptable', 1600, '1985-09-16', 33003.00, NULL, 6),
(1602, 'Dubois', 'Jules', 'Vendeur', 1300, '1990-12-20', 9520.00, 35535.00, 6),
(1603, 'Morel', 'Robert', 'Comptable', 1600, '1985-07-18', 33003.00, NULL, 6),
(1604, 'Havet', 'Alain', 'Vendeur', 1300, '1991-01-01', 9388.00, 33415.00, 6),
(1605, 'Richard', 'Jules', 'Comptable', 1600, '1985-10-22', 33503.00, NULL, 5),
(1615, 'Duprez', 'Jean', 'Balayeur', 1000, '1998-10-22', 6000.60, NULL, 5);

-- --------------------------------------------------------

--
-- Structure de la table `employes2`
--

CREATE TABLE `employes2` (
  `noemp` int(4) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `prenom` varchar(20) DEFAULT NULL,
  `emploi` varchar(20) DEFAULT NULL,
  `sup` int(4) DEFAULT NULL,
  `embauche` date DEFAULT NULL,
  `sal` float(9,2) DEFAULT NULL,
  `comm` float(9,2) DEFAULT NULL,
  `noserv` int(2) NOT NULL,
  `noproj` int(11) DEFAULT NULL,
  `date_ajout` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employes2`
--

INSERT INTO `employes2` (`noemp`, `nom`, `prenom`, `emploi`, `sup`, `embauche`, `sal`, `comm`, `noserv`, `noproj`, `date_ajout`) VALUES
(1000, 'Leroy', 'Paul', 'President', NULL, '1987-05-08', 52798.00, 0.00, 1, 103, '0000-00-00'),
(1010, 'Moyen', 'Toto', 'Secretaire', 1000, '1999-12-12', 18713.30, 10002.00, 1, 103, '0000-00-00'),
(1011, 'Campagne', 'Laurent', 'Developpeur', 1000, '1995-05-25', 32502.00, 3200.00, 1, 103, '0000-00-00'),
(1012, 'Grand', 'Brandon', 'Balayeur', 1000, '2015-03-20', 9052.00, 1026.00, 1, 103, '0000-00-00'),
(1101, 'Dumont', 'Louis', 'Vendeur', 1300, '1987-10-25', 9047.00, 0.00, 1, 103, '0000-00-00'),
(1102, 'Minet', 'Marc', 'Vendeur', 1300, '1987-10-25', 8085.00, 17230.00, 1, 103, '0000-00-00'),
(1104, 'Nys', 'Etienne', 'Technicien', 1200, '1987-10-25', 12342.00, NULL, 1, 103, '0000-00-00'),
(1105, 'Denimal', 'Jerome', 'Comptable', 1600, '1987-10-25', 15746.00, NULL, 1, 103, '0000-00-00'),
(1200, 'Lemaire', 'Guy', 'Directeur', 1000, '1987-03-11', 36303.00, NULL, 2, 103, '0000-00-00'),
(1201, 'Martin', 'Jean', 'Technicien', 1200, '1987-06-25', 11235.00, NULL, 2, 103, '0000-00-00'),
(1202, 'Dupont', 'Jacques', 'Technicien', 1200, '1988-11-30', 10313.00, NULL, 2, 103, '0000-00-00'),
(1212, 'Tram', 'George', 'Vendeur', 1200, '2021-04-19', 9852.00, 0.00, 3, 103, '2021-04-20'),
(1300, 'Petit', 'Bernard', 'Directeur', 1000, '1987-05-08', 35200.00, 26000.00, 3, 103, '0000-00-00'),
(1301, 'Gerard', 'Robert', 'Vendeur', 1300, '1999-04-16', 7694.00, 12430.00, 3, 103, '0000-00-00'),
(1303, 'Masure', 'Emile', 'Technicien', 1200, '1988-06-17', 10451.00, NULL, 3, 103, '0000-00-00'),
(1500, 'Dupont', 'Jean', 'Directeur', 1000, '1987-10-23', 28434.00, NULL, 5, 102, '0000-00-00'),
(1501, 'Dupire', 'Pierre', 'Analyste', 1500, '1984-10-24', 23102.00, NULL, 5, 102, '0000-00-00'),
(1502, 'Durand', 'Bernard', 'Programmeur', 1500, '1987-07-30', 13201.00, NULL, 5, 102, '0000-00-00'),
(1503, 'Delnatte', 'Luc', 'Pupitreur', 1500, '1999-01-15', 8801.00, NULL, 5, 102, '0000-00-00'),
(1530, 'Campagne', 'Alexandre', 'Developpeur', 1500, '2005-10-20', 9000.00, 3000.00, 5, 102, '0000-00-00'),
(1600, 'Lavare', 'Paul', 'Directeur', 1000, '1991-12-13', 31238.00, NULL, 6, 102, '0000-00-00'),
(1601, 'Caron', 'Alain', 'Comptable', 1600, '1985-09-16', 33003.00, NULL, 6, 102, '0000-00-00'),
(1602, 'Dubois', 'Jules', 'Vendeur', 1300, '1990-12-20', 9520.00, 35535.00, 6, 102, '0000-00-00'),
(1603, 'Morel', 'Robert', 'Comptable', 1600, '1985-07-18', 33003.00, NULL, 6, 102, '0000-00-00'),
(1604, 'Havet', 'Alain', 'Vendeur', 1300, '1991-01-01', 9388.00, 33415.00, 6, 102, '0000-00-00'),
(1605, 'Richard', 'Jules', 'Comptable', 1600, '1985-10-22', 33503.00, NULL, 5, 102, '0000-00-00'),
(1615, 'toto', 'tata', 'Balayeur  ', 1000, '1998-10-22', 6000.00, 0.00, 5, 102, '0000-00-00'),
(1700, 'Glass', 'Val', 'Directeur', 1000, '2021-04-19', 38462.00, 0.00, 7, 102, '2021-04-20'),
(1701, 'Green', 'Bart', 'Secretaire', 1700, '2021-04-19', 25122.00, 0.00, 7, 103, '2021-04-20');

-- --------------------------------------------------------

--
-- Structure de la table `proj`
--

CREATE TABLE `proj` (
  `noproj` int(3) NOT NULL,
  `nomproj` varchar(10) DEFAULT NULL,
  `budget` float(13,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `proj`
--

INSERT INTO `proj` (`noproj`, `nomproj`, `budget`) VALUES
(101, 'alpha', 250000.00),
(102, 'beta', 175000.00),
(103, 'gamma', 1500000.00);

-- --------------------------------------------------------

--
-- Structure de la table `service2`
--

CREATE TABLE `service2` (
  `NOSERV` int(2) NOT NULL,
  `SERVICE` varchar(20) DEFAULT NULL,
  `VILLE` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `service2`
--

INSERT INTO `service2` (`NOSERV`, `SERVICE`, `VILLE`) VALUES
(1, 'Direction', 'Paris'),
(2, 'Logistique', 'Seclin'),
(3, 'Ventes', 'Roubaix'),
(4, 'Formation', 'Villeneuve d\'Ascq'),
(5, 'Informatique', 'Lille'),
(6, 'Comptabilite', 'Lille'),
(7, 'Technique', 'Roubaix');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `NOSERV` int(2) NOT NULL,
  `SERVICE` varchar(20) DEFAULT NULL,
  `VILLE` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`NOSERV`, `SERVICE`, `VILLE`) VALUES
(1, 'Direction', 'Paris'),
(2, 'Logistique', 'Seclin'),
(3, 'Ventes', 'Roubaix'),
(4, 'Formation', 'Villeneuve d\'Ascq'),
(5, 'Informatique', 'Lille'),
(6, 'Comptabilite', 'Lille'),
(7, 'Technique', 'Roubaix');

-- --------------------------------------------------------

--
-- Structure de la table `userconnect`
--

CREATE TABLE `userconnect` (
  `UserMail` varchar(50) NOT NULL,
  `PassWord` varchar(255) NOT NULL,
  `Profil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `userconnect`
--

INSERT INTO `userconnect` (`UserMail`, `PassWord`, `Profil`) VALUES
('campagne.a@hotmail.fr', '$2y$10$0lBNWL7yFe1z7HzCSEIO2uTgY1fs//7GlerI0F9SetNd4QM7/lU86', 'Admin'),
('leroy.p@hotmail.fr', '$2y$10$yVds8JrSWW3jvZnA2dwwrO4nEufL1cggxBeq0JSBIodgulK0Jn8XK', 'User');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`noemp`),
  ADD KEY `noserv` (`noserv`),
  ADD KEY `sup` (`sup`);

--
-- Index pour la table `employes2`
--
ALTER TABLE `employes2`
  ADD PRIMARY KEY (`noemp`),
  ADD KEY `noproj` (`noproj`),
  ADD KEY `employes2_fk_sup` (`sup`);

--
-- Index pour la table `proj`
--
ALTER TABLE `proj`
  ADD PRIMARY KEY (`noproj`);

--
-- Index pour la table `service2`
--
ALTER TABLE `service2`
  ADD PRIMARY KEY (`NOSERV`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`NOSERV`);

--
-- Index pour la table `userconnect`
--
ALTER TABLE `userconnect`
  ADD PRIMARY KEY (`UserMail`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `employes`
--
ALTER TABLE `employes`
  ADD CONSTRAINT `employes_ibfk_1` FOREIGN KEY (`noserv`) REFERENCES `services` (`NOSERV`),
  ADD CONSTRAINT `employes_ibfk_2` FOREIGN KEY (`sup`) REFERENCES `employes` (`noemp`);

--
-- Contraintes pour la table `employes2`
--
ALTER TABLE `employes2`
  ADD CONSTRAINT `employes2_fk_sup` FOREIGN KEY (`sup`) REFERENCES `employes2` (`noemp`),
  ADD CONSTRAINT `employes2_ibfk_1` FOREIGN KEY (`noproj`) REFERENCES `proj` (`noproj`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
