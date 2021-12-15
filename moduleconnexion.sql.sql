-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 15 déc. 2021 à 08:58
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `yasmine-rouabhia_moduleconnexion`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `prenom`, `nom`, `password`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(2, 'sara', 'ata', 'tgrfghf', '01b7e97747035b79d693b4983ad9f6abd45d4275'),
(3, 'yas', 'yasmine', 'rou', 'yas'),
(13, 'alain', 'a', 'a', 'a'),
(4, 'a', 'b', 'c', '3c363836cf4e16666669a25da280a1865c2d2874'),
(5, 'ad', 'adel', 'zam', '5bd5574633141fd683feb6b4169fc0de7b94af09'),
(6, 'za', 'za', 'za', '85c9baff15217366743dfbda4b499260c0cfffbb'),
(7, 'mama', 'maman', 'papa', '55cbe7fd00627a28668d1d7c9899bdb602dad69d'),
(8, 't', 't', 'test', '8efd86fb78a56a5145ed7739dcb00c78581c5375'),
(9, 'aaz', 'z', 'oz', '6d3236ec3c88039ca534b81acad564e847ecb062'),
(10, 'yu', 'hjh', 'yu', 'y'),
(11, 'ooo', 'o', 'o', 'o'),
(12, 'mi', 'mo', 'mi', 'mo'),
(14, 'yay', 'yay', 'yay', 'yay');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
