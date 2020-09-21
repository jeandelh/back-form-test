-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 20 sep. 2020 à 09:38
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
-- Base de données :  `materiel`
--

-- --------------------------------------------------------

--
-- Structure de la table `simplonstock`
--

DROP TABLE IF EXISTS `simplonstock`;
CREATE TABLE IF NOT EXISTS `simplonstock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typeMateriel` varchar(360) CHARACTER SET utf8 NOT NULL,
  `etat` varchar(360) CHARACTER SET utf8 NOT NULL,
  `localisation` varchar(360) CHARACTER SET utf8 NOT NULL,
  `quantite` int(6) NOT NULL,
  `information` varchar(360) CHARACTER SET utf8 NOT NULL,
  `marque` varchar(360) CHARACTER SET utf8 NOT NULL,
  `visuelle` varchar(360) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `simplonstock`
--

INSERT INTO `simplonstock` (`id`, `typeMateriel`, `etat`, `localisation`, `quantite`, `information`, `marque`, `visuelle`) VALUES
(63, 'clesezaza', 'bbnazza', 'zaza', 6, 'ddd', 'atro', 'test.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
