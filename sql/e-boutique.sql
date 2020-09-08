-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 08 sep. 2020 à 14:24
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
-- Base de données :  `e-boutique`
--

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `image` varchar(255) NOT NULL,
  `reduction` int(11) DEFAULT NULL,
  `genre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`, `reduction`, `genre`) VALUES
(1, 'Gilet zippé col montant avec patchs - Marron\r\n', 75, 'product_1.png', 33, 'men'),
(2, 'Sac à hanse courte marron et caki - collection été 2020', 135, 'product_2.png', NULL, 'accessories'),
(3, 'Pull col rond maille piquée avec velours - moutarde', 36.5, 'product_3.png', NULL, 'women'),
(4, 'Sac de sport caki à double lanières, fermeture zippée', 85, 'product_4.png', 15, 'accessories'),
(5, 'Chaussure basse marron avec lacets cousus main', 75, 'product_5.png', 33, 'accessories'),
(6, 'Lunette aviateur bleuté avec résistance au soleil de 8', 12, 'product_6.png', NULL, 'accessories'),
(7, 'pull doux en laine de lama, avec finition ocre', 25, 'product_7.png', 5, 'women'),
(8, 'Carnet de note en cuir avec page en papier recyclé', 13, 'product_8.png', NULL, 'accessories'),
(9, 'Manteau long pour femme, avec poche intégrée', 145, 'product_9.png', 10, 'women'),
(10, 'Pull vert cassé en laine - collection été 2020', 20, 'product_10.png', NULL, 'men');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
