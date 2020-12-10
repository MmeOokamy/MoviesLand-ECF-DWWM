-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 10 déc. 2020 à 17:04
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `movies_land`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(30) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Nanar'),
(2, 'Action'),
(3, 'Spaceballs');

-- --------------------------------------------------------

--
-- Structure de la table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `movies_id` int(11) NOT NULL AUTO_INCREMENT,
  `movies_name` varchar(100) NOT NULL,
  `movies_url` varchar(255) NOT NULL,
  `movies_date` char(4) NOT NULL,
  `id_category` int(11) NOT NULL,
  PRIMARY KEY (`movies_id`),
  KEY `id_category` (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `movies`
--

INSERT INTO `movies` (`movies_id`, `movies_name`, `movies_url`, `movies_date`, `id_category`) VALUES
(1, 'Spaceballs', 'https://www.nanarland.com/media/cache/front_film_single_cover/uploads/films/5e8b55634dbea-turkish-star-wars-jaquette.jpg', '2001', 1),
(2, 'Spaceballs', 'https://v4s.mediafilm.ca/multimedias/Spaceballs.jpg', '1979', 1),
(6, 'Spaceballs', 'https://v4s.mediafilm.ca/multimedias/Spaceballs.jpg', '1979', 1),
(9, 'Spaceballs', 'https://v4s.mediafilm.ca/multimedias/Spaceballs.jpg', '2001', 1),
(10, 'Spaceballs', 'https://v4s.mediafilm.ca/multimedias/Spaceballs.jpg', '1979', 1),
(12, 'Turkish Star Wars', 'https://v4s.mediafilm.ca/multimedias/Spaceballs.jpg', '1979', 1),
(13, 'Spaceballs', 'https://v4s.mediafilm.ca/multimedias/Spaceballs.jpg', '1979', 1),
(17, 'Spaceballs', 'https://v4s.mediafilm.ca/multimedias/Spaceballs.jpg', '2001', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
