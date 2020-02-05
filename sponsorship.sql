-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 09 juil. 2019 à 21:51
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sponsorship`
--

-- --------------------------------------------------------

--
-- Structure de la table `filleuls`
--

DROP TABLE IF EXISTS `filleuls`;
CREATE TABLE IF NOT EXISTS `filleuls` (
  `id_filleul` int(255) NOT NULL AUTO_INCREMENT,
  `parrain_id` int(255) DEFAULT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `matricule` varchar(255) DEFAULT 'XXXXX@xxxxx.com',
  `tel` varchar(255) DEFAULT '+237xxxxxxxx',
  `Genre` char(1) DEFAULT NULL,
  `Classe` varchar(15) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `pseudo` varchar(15) NOT NULL,
  `pass` varchar(15) NOT NULL,
  PRIMARY KEY (`id_filleul`),
  KEY `parrain_id` (`parrain_id`),
  KEY `parrain_id_2` (`parrain_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `filleuls`
--

INSERT INTO `filleuls` (`id_filleul`, `parrain_id`, `nom`, `prenom`, `matricule`, `tel`, `Genre`, `Classe`, `photo`, `pseudo`, `pass`) VALUES
(4, NULL, 'EFDFSDFSFS', 'VSDVSVSVSFV', 'VXCVCXVXCVXC', '6496484684', NULL, 'DCQFQ', 'default Photo', '', '7630'),
(5, NULL, 'EFDFSDFSFS', 'VSDVSVSVSFV', 'VXCVCXVXCVXC', '6496484684', NULL, 'DCQFQ', 'default Photo', '03sS', '9166'),
(6, NULL, 'EFDFSDFSFS', 'VSDVSVSVSFV', 'VXCVCXVXCVXC', '6496484684', NULL, 'DCQFQ', 'default Photo', 'uX14', '8956'),
(7, NULL, 'EFDFSDFSFS', 'VSDVSVSVSFV', 'VXCVCXVXCVXC', '6496484684', NULL, 'DCQFQ', 'default Photo', 'jPlC', '0128'),
(8, NULL, 'EFDFSDFSFS', 'VSDVSVSVSFV', 'VXCVCXVXCVXC', '6496484684', NULL, 'DCQFQ', 'default Photo', 'aFpR', '2195'),
(9, NULL, 'EFDFSDFSFS', 'VSDVSVSVSFV', 'VXCVCXVXCVXC', '6496484684', NULL, 'DCQFQ', 'default Photo', '8HoF', '5385');

-- --------------------------------------------------------

--
-- Structure de la table `parrains`
--

DROP TABLE IF EXISTS `parrains`;
CREATE TABLE IF NOT EXISTS `parrains` (
  `id_parrain` int(255) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `matricule` varchar(255) NOT NULL,
  `appaired` tinyint(255) DEFAULT '0',
  `tel` varchar(255) NOT NULL DEFAULT '+237xxxxxxxx',
  `Genre` char(1) DEFAULT NULL,
  `Classe` varchar(15) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `pseudo` varchar(15) NOT NULL,
  `pass` varchar(15) CHARACTER SET utf16 NOT NULL,
  PRIMARY KEY (`id_parrain`),
  KEY `id_parrain` (`id_parrain`),
  KEY `id_parrain_2` (`id_parrain`),
  KEY `id_parrain_3` (`id_parrain`),
  KEY `id_parrain_4` (`id_parrain`)
) ENGINE=MyISAM AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
