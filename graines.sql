-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 08 fév. 2020 à 15:10
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
-- Base de données :  `jdelhay`
--

-- --------------------------------------------------------

--
-- Structure de la table `graines`
--

DROP TABLE IF EXISTS `graines`;
CREATE TABLE IF NOT EXISTS `graines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(360) CHARACTER SET utf8 NOT NULL,
  `periodeP` int(10) NOT NULL,
  `periodeR` int(10) NOT NULL,
  `conseil` varchar(360) CHARACTER SET utf8 NOT NULL,
  `quantite` int(6) NOT NULL,
  `visuelle` varchar(360) CHARACTER SET utf8 NOT NULL,
  `famille` varchar(360) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
