-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 04 juin 2020 à 12:40
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `restaurant`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `CodeCat` varchar(1) NOT NULL,
  `LibelleCat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`CodeCat`, `LibelleCat`) VALUES
('A', 'Entrées'),
('B', 'Plats principaux'),
('C', 'Desserts');

-- --------------------------------------------------------

--
-- Structure de la table `plat`
--

CREATE TABLE `plat` (
  `RefPlat` varchar(4) NOT NULL,
  `NomPlat` varchar(50) DEFAULT NULL,
  `Prix` decimal(5,2) DEFAULT NULL,
  `NomImg` varchar(50) DEFAULT NULL,
  `HitParade` int(1) DEFAULT NULL,
  `CodeCat` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `plat`
--

INSERT INTO `plat` (`RefPlat`, `NomPlat`, `Prix`, `NomImg`, `HitParade`, `CodeCat`) VALUES
('DE01', 'Délice choco', '8.20', 'dessert1.jpg', 2, 'C'),
('DE02', 'Le tourbillon', '10.50', 'dessert2.jpg', 3, 'C'),
('DE03', 'Terminal fruitée', '9.80', 'dessert3.jpg', 1, 'C'),
('EN01', 'Le délice Lyonnais', '14.00', 'entree1.jpg', 4, 'A'),
('EN02', 'Le feuilleté verdoyant', '13.50', 'entree2.jpg', 3, 'A'),
('EN03', 'La divinité des mers', '16.50', 'entree3.jpg', 1, 'A'),
('PL01', 'Le pavé fleuri', '19.20', 'plat1.jpg', NULL, 'B'),
('PL02', 'Le légumineur', '17.30', 'plat2.jpg', 4, 'B'),
('PL03', 'Duo terre mer', '18.60', 'plat3.jpg', 2, 'B');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `pseudo` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`pseudo`, `mdp`) VALUES
('vincent74', 'secret');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`CodeCat`);

--
-- Index pour la table `plat`
--
ALTER TABLE `plat`
  ADD PRIMARY KEY (`RefPlat`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`pseudo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
