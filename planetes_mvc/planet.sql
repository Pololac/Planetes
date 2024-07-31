-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 31 juil. 2024 à 16:59
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `exam_pdo`
--

-- --------------------------------------------------------

--
-- Structure de la table `planet`
--

DROP TABLE IF EXISTS `planet`;
CREATE TABLE IF NOT EXISTS `planet` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `imgUrl` varchar(255) NOT NULL,
  `nom` varchar(7) NOT NULL,
  `categorie` varchar(10) NOT NULL,
  `diametre` mediumint NOT NULL,
  `gravite` float DEFAULT NULL,
  `lienNasa` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `planet`
--

INSERT INTO `planet` (`id`, `imgUrl`, `nom`, `categorie`, `diametre`, `gravite`, `lienNasa`) VALUES
(1, 'https://upload.wikimedia.org/wikipedia/commons/3/30/Mercury_in_color_-_Prockter07_centered.jpg', 'Mercure', 'Tellurique', 4879, 3.7, 'https://science.nasa.gov/mercury'),
(2, 'https://upload.wikimedia.org/wikipedia/commons/e/e5/Venus-real_color.jpg', 'Venus', 'Tellurique', 12104, 8.87, 'https://science.nasa.gov/venus'),
(3, 'https://upload.wikimedia.org/wikipedia/commons/c/cb/The_Blue_Marble_%28remastered%29.jpg', 'Terre', 'Tellurique', 12576, 9.8, 'https://science.nasa.gov/earth'),
(4, 'https://upload.wikimedia.org/wikipedia/commons/3/36/Mars_Valles_Marineris_EDIT.jpg', 'Mars', 'Tellurique', 6792, 3.71, 'https://science.nasa.gov/mars'),
(7, 'https://upload.wikimedia.org/wikipedia/commons/c/c7/Saturn_during_Equinox.jpg', 'Saturne', 'Gazeuse', 120536, 10.44, 'https://science.nasa.gov/saturn'),
(8, 'https://upload.wikimedia.org/wikipedia/commons/3/3d/Uranus2.jpg', 'Uranus', 'Gazeuse', 51118, 8.87, 'https://science.nasa.gov/uranus'),
(9, 'https://upload.wikimedia.org/wikipedia/commons/b/b9/Neptune_Voyager2_color_calibrated.png', 'Neptune', 'Gazeuse', 49528, 11.15, 'https://science.nasa.gov/neptune'),
(10, 'https://upload.wikimedia.org/wikipedia/commons/3/30/Hubble%E2%80%99s_observation_of_Jupiter_in_2021_%2851688147562%29.jpg', 'Jupiter', 'Gazeuse', 142984, 24.79, 'https://science.nasa.gov/jupiter');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
