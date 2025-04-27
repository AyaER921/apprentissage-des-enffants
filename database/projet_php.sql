-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 27 avr. 2025 à 21:17
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `id_q` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `id_r` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id_q`, `question`, `id_r`) VALUES
(1, 'quelle image représente le policier?', 16),
(2, 'quelle image représente l\'avocat?', 2),
(3, 'quelle image représente le boucher?', 3),
(4, 'quelle image représente le médecin?', 13),
(5, 'quelle image représente marchand ambulant?', 12),
(6, 'quelle image représente la servante?', 18),
(7, 'quelle image représente boulanger?', 4),
(8, 'quelle image représente pompier?', 17),
(9, 'quelle image représente la chanteuse?', 5),
(10, 'quelle image représente l\'astronaute?', 1);

-- --------------------------------------------------------

--
-- Structure de la table `repense`
--

CREATE TABLE `repense` (
  `id_utilisateur` int(11) NOT NULL,
  `id_q_courante` int(11) NOT NULL,
  `score_actuel` int(11) NOT NULL,
  `dernier_score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sources`
--

CREATE TABLE `sources` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `texte` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `extension_image` varchar(255) NOT NULL,
  `extension_audio` varchar(255) NOT NULL,
  `extension_video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `sources`
--

INSERT INTO `sources` (`id`, `image`, `texte`, `audio`, `video`, `extension_image`, `extension_audio`, `extension_video`) VALUES
(1, 'astronaute', 'astronaute', 'astronaute', '', 'jpg', 'mp3', ''),
(2, 'avocat', 'avocat', 'avocat', '', 'jpg', 'mp3', ''),
(3, 'boucher', 'boucher', 'boucher', '', 'jpg', 'mp3', ''),
(4, 'boulanger', 'boulanger', 'boulanger', '', 'jpg', 'mp3', ''),
(5, 'chanteuse', 'chanteuse', 'chanteuse', '', 'jpg', 'mp3', ''),
(6, 'coiffeur', 'coiffeur', 'coiffeur', '', 'jpg', 'mp3', ''),
(7, 'conducteur_de_bus', 'conducteur de bus', 'conducteur_de_bus', '', 'jpg', 'mp3', ''),
(8, 'éboueur', 'éboueur', 'éboueur', '', 'jpg', 'mp3', ''),
(9, 'facteur', 'facteur', 'facteur', '', 'jpg', 'mp3', ''),
(10, 'infirmier', 'infirmier', 'infirmier', '', 'jpg', 'mp3', ''),
(11, 'journaliste', 'journaliste', 'journaliste', '', 'jpg', 'mp3', ''),
(12, 'marchand_ambulant', 'marchand ambulant', 'marchand_ambulant', '', 'jpg', 'mp3', ''),
(13, 'médecin', 'médecin', 'médecin', '', 'jpg', 'mp3', ''),
(14, 'paysan', 'paysan', 'paysan', '', 'jpg', 'mp3', ''),
(15, 'pilote', 'pilote', 'pilote', '', 'jpg', 'mp3', ''),
(16, 'policier', 'policier', 'policier', '', 'jpg', 'mp3', ''),
(17, 'pompier', 'pompier', 'pompier', '', 'jpg', 'mp3', ''),
(18, 'servante', 'servante', 'servante', '', 'jpg', 'mp3', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
