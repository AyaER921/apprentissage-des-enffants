-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 28 avr. 2025 à 03:28
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
-- Structure de la table `animaux`
--

CREATE TABLE `animaux` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `son` varchar(255) NOT NULL,
  `sous_titre` varchar(200) DEFAULT NULL,
  `taille` varchar(100) DEFAULT NULL,
  `nourriture` varchar(100) DEFAULT NULL,
  `type_alimentation` varchar(100) DEFAULT NULL,
  `habitat` varchar(200) DEFAULT NULL,
  `zone_geographique` varchar(100) DEFAULT NULL,
  `informations_complementaires` text DEFAULT NULL,
  `categorie` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `animaux`
--

INSERT INTO `animaux` (`id`, `nom`, `description`, `image`, `son`, `sous_titre`, `taille`, `nourriture`, `type_alimentation`, `habitat`, `zone_geographique`, `informations_complementaires`, `categorie`) VALUES
(1, 'Lion', '', 'lion.jpg', 'lion.mp3', NULL, '1.2 m', 'viande', 'Carnivore', 'Savane, Steppe', 'Afrique', 'Les lions vivent en groupes appel?s \"troupes\". Les m?les ont une crini?re distinctive.', 'Mammifère'),
(11, 'Éléphant', '', 'elephant.jpg', 'elephant.mp3', 'Le plus grand mammif?re terrestre', '2.5m ? 4m', 'Herbe, fruits, ?corce', 'Herbivore', 'For?ts, savanes', 'Afrique, Asie', 'Les éléphants ont une mémoire exceptionnelle.', 'Mammifère'),
(12, 'Tigre', '', 'tigre.jpg', 'tigre.mp3', 'Prédateur solitaire', '0.9m à 1.1m au garrot', 'Cerfs, sangliers', 'Carnivore', 'Forêts tropicales, mangroves', 'Asie', 'Chaque tigre possède un pelage unique.', 'mammifère'),
(13, 'Gorille', '', 'gorille.jpg', 'gorille.mp3', 'Parent proche de l\'homme', '1.25m à 1.8m', 'Feuilles, fruits', 'Herbivore', 'Forêts tropicales', 'Afrique', 'Les gorilles sont très sociaux.', 'mammifère'),
(14, 'Dauphin', '', 'dauphin.jpg', 'dauphin.mp3', 'Acrobate des mers', '2m à 4m', 'Poissons, calmars', 'Carnivore', 'Océans, mers', 'Océans du monde', 'Les dauphins communiquent par des sons complexes.', 'poisson'),
(15, 'Chat', '', 'chat.jpg', 'chat.mp3', 'Petit félin domestique', '23 à 25 cm', 'Croquettes, poisson, viande', 'Carnivore', 'Maisons, appartements', 'Monde entier', 'Les chats ronronnent quand ils sont heureux. Ils dorment en moyenne 15 heures par jour.', 'Mammifère'),
(16, 'Chien', '', 'chien.jpg', 'chien.mp3', 'Meilleur ami de l’homme', '40 à 60 cm (taille moyenne)', 'Croquettes, viande, os', 'Omnivore', 'Maisons, campagnes, villes', 'Monde entier', 'Les chiens ont un odorat 10 000 fois plus développé que celui des humains.', 'mammifère'),
(17, 'Girafe', '', 'girafe.jpg', 'girafe.mp3', 'L’animal le plus haut du monde', '4.5 à 6 mètres', 'Feuilles d’acacia', 'Herbivore', 'Savane africaine', 'Afrique', 'La langue des girafes peut mesurer jusqu’à 45 cm !', 'mammifère'),
(18, 'Kangourou', '', 'kangourou.jpg', 'kangourou.mp3', 'Sauteur des plaines', '1 à 1.6 mètres', 'Herbe, feuilles', 'Herbivore', 'Plaines, forêts claires', 'Australie', 'Le kangourou se déplace en sautant et porte ses petits dans une poche appelée marsupium.', 'mammifère'),
(19, 'Ours', '', 'ours.jpg', 'ours.mp3', 'Gros mammifère poilu', '1.5 à 2.8 mètres', 'Poisson, baies, miel', 'Omnivore', 'Forêts, montagnes', 'Amérique du Nord, Europe, Asie', 'Certains ours hibernent pendant l’hiver pour économiser leur énergie.', 'mammifère'),
(20, 'Aigle', '', 'aigle.jpg', 'aigle.mp3', 'Rapace majestueux', '70 à 90 cm', 'Petits mammifères, poissons', NULL, 'Montagnes, falaises', 'Europe, Amérique du Nord, Asie', 'L’aigle possède une vue perçante qui peut repérer une proie à plusieurs kilomètres.', 'oiseau'),
(21, 'Canari', '', 'canari.jpg', 'canari.mp3', 'Petit chanteur joyeux', '12 à 15 cm', 'Graines, fruits', NULL, 'Cages, forêts tropicales', 'Îles Canaries, élevage mondial', 'Les canaris sont connus pour leur chant mélodieux et leur plumage coloré.', 'oiseau'),
(22, 'Pingouin', '', 'pingouin.jpg', 'pingouin.mp3', 'Oiseau marin non volant', '50 à 70 cm', 'Poissons, krill', NULL, 'Côtes glaciales', 'Antarctique', 'Les pingouins sont d’excellents nageurs mais ne peuvent pas voler.', 'oiseau'),
(23, 'Paon', '', 'paon.jpg', 'paon.mp3', 'Oiseau au plumage spectaculaire', '100 à 120 cm', 'Graines, insectes, petits reptiles', NULL, 'Forêts, parcs', 'Inde, Sri Lanka', 'Le paon est célèbre pour sa roue colorée qu’il déploie pour séduire.', 'oiseau'),
(24, 'Perroquet', '', 'perroquet.jpg', 'perroquet.mp3', 'Parleur coloré', '30 à 40 cm', 'Fruits, graines', NULL, 'Forêts tropicales', 'Amérique du Sud, Afrique', 'Les perroquets peuvent imiter la voix humaine et vivre très longtemps.', 'Oiseau'),
(25, 'Colibri', '', 'colibri.jpg', 'colibri.mp3', 'Petit oiseau rapide', '7 à 13 cm', 'Nectar de fleurs', NULL, 'Forêts tropicales', 'Amérique du Sud, Amérique centrale', 'Le colibri peut battre des ailes jusqu’à 80 fois par seconde.', 'oiseau'),
(26, 'Autruche', '', 'autruche.jpg', 'autruche.mp3', 'Plus grand oiseau du monde', '2 à 2,7 mètres', 'Plantes, graines, insectes', NULL, 'Savane, semi-désert', 'Afrique', 'L’autruche ne vole pas mais peut courir à 70 km/h.', 'oiseau'),
(27, 'Hibou', '', 'hibou.jpg', 'hibou.mp3', 'Oiseau nocturne mystérieux', '30 à 70 cm', 'Petits rongeurs, insectes', NULL, 'Forêts, montagnes', 'Partout dans le monde', 'Le hibou peut tourner sa tête jusqu’à 270 degrés.', 'oiseau'),
(28, 'Cygne', '', 'cygne.jpg', 'cygne.mp3', 'Symbole de grâce', '1,2 à 1,5 mètres', 'Herbes aquatiques', NULL, 'Lacs, rivières', 'Europe, Asie, Amérique du Nord', 'Les cygnes forment des couples pour la vie.', 'oiseau'),
(29, 'Flamant rose', '', 'flamant.jpg', 'flamant.mp3', 'Oiseau rose élégant', '1,1 à 1,5 mètres', 'Algues, crustacés', NULL, 'Lacs salés, lagunes', 'Afrique, Amérique du Sud, Méditerranée', 'Le flamant devient rose grâce aux pigments de sa nourriture.', 'oiseau'),
(30, 'Poisson-clown', '', 'clownfish.jpg', 'clownfish.mp3', 'Le célèbre Nemo', '10 à 18 cm', 'Plancton, algues', NULL, 'Récifs coralliens', 'Océan Pacifique', 'Les poissons-clowns vivent en symbiose avec les anémones.', 'poisson'),
(31, 'Requin', '', 'requin.jpg', 'requin.mp3', 'Prédateur redoutable', '1 à 7 mètres', 'Poissons, phoques', NULL, 'Océans', 'Toutes les mers du globe', 'Les requins ont plusieurs rangées de dents qui repoussent.', 'poisson'),
(32, 'Poisson-ange', '', 'poisson_ange.jpg', 'ange.mp3', 'Poisson coloré de récif', '15 à 40 cm', 'Algues, éponges', NULL, 'Récifs tropicaux', 'Océan Atlantique, Indien', 'Le poisson-ange est connu pour ses couleurs vives et sa nage élégante.', 'poisson'),
(33, 'Saumon', '', 'saumon.jpg', 'saumon.mp3', 'Poisson migrateur', '50 à 80 cm', 'Insectes, petits poissons', NULL, 'Rivières, océans', 'Atlantique Nord, Pacifique', 'Le saumon naît en eau douce, vit en mer, puis revient pondre dans sa rivière.', 'poisson'),
(34, 'Poisson-lune', '', 'poisson_lune.jpg', 'lune.mp3', 'Le plus lourd des poissons osseux', '1,8 à 2,5 mètres', 'Méduses, petits poissons', NULL, 'Océans tempérés et tropicaux', 'Partout dans le monde', 'Le poisson-lune peut peser plus d’une tonne.', 'poisson'),
(35, 'Tortue', '', 'tortue.jpg', 'tortue.mp3', 'Reptile avec une carapace dure', '20 à 250 cm', 'Plantes, fruits, insectes', 'Omnivore', 'Terre et mer', 'Partout dans le monde', 'Les tortues peuvent vivre plus de 100 ans. Certaines sont terrestres, d’autres marines.', 'Reptile'),
(36, 'Zèbre', '', 'zebre.jpg', 'zebre.mp3', 'Cheval rayé noir et blanc', '1,20 à 1,50 m', 'Herbe', 'Herbivore', 'Savanes, prairies', 'Afrique', 'Chaque zèbre a un motif de rayures unique, comme une empreinte digitale.', 'Mammifère'),
(37, 'Baleine bleue', '', 'baleine_bleue.jpg', 'baleine_bleue.mp3', 'Le plus grand animal au monde', 'jusqu’à 30 mètres', 'Krill (petites crevettes)', 'Carnivore', 'Océans', 'Océans du monde entier', 'Le cœur d’une baleine bleue peut peser jusqu’à 180 kg !', 'Mammifère'),
(39, 'Guépard', '', 'guepard.jpg', 'guepard.mp3', 'L’animal le plus rapide', '70 à 90 cm', 'Antilopes, lièvres', 'Carnivore', 'Savanes, forêts', 'Afrique', 'Le guépard peut courir à plus de 100 km/h, mais seulement pendant quelques secondes.', 'Mammifère'),
(46, 'Grenouille', '', 'grenouille.jpg', 'grenouille.mp3', 'Petite sauteuse verte', '5 à 10 cm', 'Insectes, vers', 'Carnivore', 'Étangs, marais', 'Monde entier (zones humides)', 'Les grenouilles peuvent respirer par leur peau et font de grands bonds.', 'amphibien'),
(47, 'Salamandre', '', 'salamandre.jpg', 'salamandre.mp3', 'Amphibien discret', '14 à 20 cm', 'Petits invertébrés', 'Carnivore', 'Forêts humides, sous-bois', 'Europe, Amérique du Nord', 'Elle peut régénérer certaines parties de son corps comme la queue.', 'amphibien'),
(48, 'Crapaud', '', 'crapaud.jpg', 'crapaud.mp3', 'Cousin de la grenouille', '6 à 15 cm', 'Insectes, escargots', 'Carnivore', 'Jardins, forêts, champs', 'Monde entier (sauf zones très froides)', 'Il a une peau rugueuse et ne saute pas autant que la grenouille.', 'amphibien'),
(54, 'Triton', '', 'triton.jpg', 'triton.mp3', 'Petit amphibien aquatique', '10 à 12 cm', 'Insectes aquatiques, petits crustacés', 'Carnivore', 'Lacs, étangs', 'Europe', 'Les tritons ont la capacité de respirer sous l’eau grâce à leurs branchies.', 'amphibien'),
(55, 'Axolotl', '', 'axolotl.jpg', 'axolotl.mp3', 'Le monstre de l’eau', '20 à 30 cm', 'Vers, crustacés, poissons', 'Carnivore', 'Lacs et canaux de Mexico', 'Mexique', 'L\'axolotl est un amphibien capable de régénérer des membres et même son cœur.', 'amphibien'),
(56, 'Serpent', '', 'serpent.jpg', 'serpent.mp3', 'Un reptile sans pattes', 'Varie selon l\'espèce', 'Petits mammifères, oiseaux, œufs', 'Carnivore', 'Forêts, savanes, déserts', 'Monde entier', 'Les serpents sont capables de se déplacer rapidement et de capturer des proies grâce à leur méthode de constriction ou de venin.', 'reptiles'),
(57, 'Tortue', '', 'tortue.jpg', 'tortue.mp3', 'Un reptile à carapace', '20 à 40 cm', 'Plantes, fruits, petits animaux', 'Omnivore', 'Océans, plages, forêts, déserts', 'Monde entier', 'Les tortues ont une durée de vie remarquable, certaines peuvent vivre plus de 100 ans.', 'reptiles'),
(58, 'Crocodile', '', 'crocodile.jpg', 'crocodile.mp3', 'Un prédateur aquatique', '4 à 7 mètres', 'Poissons, oiseaux, mammifères', 'Carnivore', 'Rivières, lacs, marais', 'Afrique, Asie, Amérique', 'Les crocodiles peuvent plonger pendant de longues périodes grâce à leur capacité à retenir leur souffle.', 'reptiles'),
(59, 'Iguane', '', 'iguane.jpg', 'iguane.mp3', 'Un lézard majestueux', '1 à 1.5 mètres', 'Feuilles, fleurs, fruits', 'Herbivore', 'Forêts tropicales et subtropicales', 'Amérique centrale, Sud-Amérique', 'Les iguanes sont des grimpeurs agiles et peuvent nager très bien.', 'reptiles'),
(60, 'Caméléon', '', 'cameleon.jpg', 'cameleon.mp3', 'Maître du camouflage', '15 à 30 cm', 'Insectes, petits animaux', 'Carnivore', 'Forêts, savanes', 'Afrique, Madagascar, Asie', 'Les caméléons sont célèbres pour leur capacité à changer de couleur en fonction de leur environnement.', 'reptiles'),
(61, 'Abeille', '', 'abeille.jpg', '', 'Insecte qui fabrique du miel', '1 à 2 cm', 'Nectar des fleurs', 'Herbivore', 'Ruches', 'Partout où il y a des fleurs', 'Les abeilles jouent un rôle essentiel dans la pollinisation des plantes.', 'invertébré'),
(62, 'Araignée', '', 'araignee.jpg', '', 'Tisseuse de toiles', 'quelques mm à 30 cm', 'Insectes', 'Carnivore', 'Partout : maisons, forêts, déserts', 'Monde entier', 'Les araignées produisent de la soie pour fabriquer leurs toiles.', 'invertébré'),
(63, 'Crabe', '', 'crabe.jpg', '', 'Crustacé à pinces', '1 cm à 40 cm', 'Algues, petits poissons', 'Omnivore', 'Côtes, plages', 'Partout dans le monde', 'Les crabes marchent souvent de côté et ont une carapace dure.', 'invertébré'),
(64, 'Calmar', '', 'calmar.jpg', '', 'Mollusque marin rapide', '20 cm à 13 mètres', 'Poissons, crustacés', 'Carnivore', 'Océans', 'Océans du monde entier', 'Les calmars peuvent projeter de l’encre pour échapper à leurs prédateurs.', 'invertébré'),
(65, 'Chenille', '', 'chenille.jpg', '', 'Bébé papillon', 'quelques mm à 15 cm', 'Feuilles, plantes', 'Herbivore', 'Forêts, jardins', 'Partout où il y a des plantes', 'Les chenilles se transforment en papillons après la métamorphose.', 'invertébré');

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

--
-- Déchargement des données de la table `repense`
--

INSERT INTO `repense` (`id_utilisateur`, `id_q_courante`, `score_actuel`, `dernier_score`) VALUES
(7, 6, 50, 99),
(8, 4, 30, 99);

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

-- --------------------------------------------------------

--
-- Structure de la table `test_answers`
--

CREATE TABLE `test_answers` (
  `id` int(11) NOT NULL,
  `question_id` int(11) DEFAULT NULL,
  `answer_text` varchar(255) DEFAULT NULL,
  `is_correct` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `test_answers`
--

INSERT INTO `test_answers` (`id`, `question_id`, `answer_text`, `is_correct`) VALUES
(4, 1, 'l\'éléphant', 1),
(5, 1, 'Ours', 0),
(6, 1, 'La girafe', 0),
(7, 2, 'Le guépard', 1),
(8, 2, 'Le lion', 0),
(9, 2, 'Le Zèbre', 0),
(10, 3, 'La baleine', 0),
(11, 3, 'Le dauphin', 1),
(12, 3, 'Le requin', 0),
(13, 4, 'Le poisson', 1),
(14, 4, 'Le lion', 0),
(15, 4, 'L\'éléphant', 0),
(16, 5, 'La tortue', 1),
(17, 5, 'Le chien', 0),
(18, 5, 'Le dauphin', 0),
(19, 6, 'Le zèbre', 1),
(20, 6, 'La girafe', 0),
(21, 6, 'L’éléphant', 0),
(22, 7, 'La baleine bleue', 1),
(23, 7, 'L’éléphant', 0),
(24, 7, 'La girafe', 0),
(25, 8, 'Le poisson', 1),
(26, 8, 'Le lion', 0),
(27, 8, 'Le chat', 0),
(28, 9, 'La tortue géante', 1),
(29, 9, 'Le chat', 0),
(30, 9, 'Le cheval', 0),
(31, 10, 'L’abeille', 1),
(32, 10, 'Le chien', 0),
(33, 10, 'Le zèbre', 0);

-- --------------------------------------------------------

--
-- Structure de la table `test_questions`
--

CREATE TABLE `test_questions` (
  `id` int(11) NOT NULL,
  `question` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `video_path` varchar(255) CHARACTER SET tis620 COLLATE tis620_bin DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `son_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `test_questions`
--

INSERT INTO `test_questions` (`id`, `question`, `video_path`, `score`, `image_path`, `son_path`) VALUES
(1, 'Quel est le plus grand animal terrestre ?', '../ressources/videos/elephant.mp4', 1, NULL, NULL),
(2, 'Quel animal est le plus rapide ?', '', 1, '../ressources/images/animaux3.jpg', NULL),
(3, 'Qui fait ce cri ? Écoute et devine !', NULL, 1, NULL, '../ressources/sons/dauphin.mp3'),
(4, 'Quel animal vit dans l’eau ?', NULL, 1, NULL, NULL),
(5, 'Quel est l\'animal qui porte une carapace ?', NULL, 1, '../ressources/images/carapace.jpg', NULL),
(6, 'Quel animal a des rayures blanches et noires ?', NULL, 1, '', NULL),
(7, 'Quel est l\'animal le plus grand du monde ?', NULL, 1, '', NULL),
(8, 'Lequel de ces animaux n\'est pas un mammifère ?', NULL, 1, NULL, NULL),
(9, 'Quel est l\'animal qui vit le plus longtemps ?', NULL, 1, '', NULL),
(10, 'Quel est l\'animal le plus petit?', NULL, 1, '', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `motdepasse` varchar(255) NOT NULL,
  `score` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `prenom`, `nom`, `email`, `motdepasse`, `score`) VALUES
(1, '', '', '', '$2y$10$Yu7hOBBBdvyJTRAfITUPyODxFfrybLcs10vZN8y5/da7Hbf23KX2a', 0),
(2, 'sara', 'chanouane', 'sarachanouane@gmail.com', '$2y$10$42n6ZSv5Hgi5QG5MZeUF4OMa2fjQtoSd59LeXJp6qerQxpzxWvoFi', 0),
(3, 'oumaima', 'chano', 'chanooumaima@gmial.com', '$2y$10$051i7kDgzrSYQwWKya3h5uEUYqTE2TbjtFsleVFKaS3vvxV2mdhYm', 0),
(4, 'jannate', 'gh', 'jannaite@gmail.com', '$2y$10$.G/DqSXC.Z6YlpB0bj2SOu35mCvYnZfNga3VT0hbPMgIJGjv7HYGu', 16),
(5, 'AYA', 'ER-ROUBAAI', 'tetra@gmail.com', '$2y$10$zEwXoGZMI9PEk5Bfc3lbIugIcRnEWVOYczAKw5KvpLWIcT6OYEdrG', 0),
(7, 'AYA', 'ER-ROUBAAI', 'aya@gmail.com', '$2y$10$6I4.akJVvT2YRgX71vScLeB4vLihp/bhQ1bEeJQM0xSVuvigtTMmy', 0),
(8, 'salma', 'salma', 'salma@gmail.com', '$2y$10$wx66Lmg6R8EL6JhQzuDNzuinvXBcvtlnNBSfjlJ1N.PDNbgqx4S2a', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `animaux`
--
ALTER TABLE `animaux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `test_answers`
--
ALTER TABLE `test_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relation_question` (`question_id`);

--
-- Index pour la table `test_questions`
--
ALTER TABLE `test_questions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `animaux`
--
ALTER TABLE `animaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT pour la table `test_answers`
--
ALTER TABLE `test_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `test_questions`
--
ALTER TABLE `test_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `test_answers`
--
ALTER TABLE `test_answers`
  ADD CONSTRAINT `relation_question` FOREIGN KEY (`question_id`) REFERENCES `test_questions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `test_answers_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `test_questions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
