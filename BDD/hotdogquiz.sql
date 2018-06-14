-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 14 Juin 2018 à 17:23
-- Version du serveur :  10.1.26-MariaDB-0+deb9u1
-- Version de PHP :  7.0.27-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hotdogquiz`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `nom_categorie` varchar(200) NOT NULL,
  `categorie_actif` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom_categorie`, `categorie_actif`) VALUES
(1, 'ISEN', 1),
(2, 'Jeux Vidéos', 1),
(3, 'Musiques', 1),
(4, 'People', 1),
(5, 'Séries/Films', 1),
(6, 'Sports', 0);

-- --------------------------------------------------------

--
-- Structure de la table `contient`
--

CREATE TABLE `contient` (
  `id_question` int(11) NOT NULL,
  `id_partie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `contient`
--

INSERT INTO `contient` (`id_question`, `id_partie`) VALUES
(1, 61),
(1, 66),
(1, 68),
(1, 76),
(1, 77),
(5, 58),
(5, 73),
(5, 78),
(5, 80),
(6, 58),
(6, 59),
(6, 79),
(9, 59),
(9, 63),
(9, 68),
(9, 71),
(9, 76),
(11, 56),
(11, 66),
(11, 70),
(11, 71),
(11, 73),
(12, 56),
(12, 69),
(12, 75),
(13, 68),
(16, 60),
(16, 72),
(16, 79),
(17, 70),
(17, 75),
(18, 74),
(18, 76),
(19, 62),
(19, 70),
(19, 76),
(19, 78),
(19, 79),
(20, 66),
(20, 68),
(20, 74),
(20, 76),
(20, 77),
(20, 78),
(20, 81),
(21, 57),
(21, 64),
(21, 71),
(22, 60),
(22, 73),
(22, 74),
(22, 75),
(22, 79),
(22, 81),
(23, 65),
(23, 67),
(23, 68),
(23, 77),
(24, 61),
(24, 65),
(24, 69),
(24, 70),
(24, 77),
(25, 62),
(25, 67),
(25, 74),
(26, 63),
(26, 75),
(26, 81),
(27, 72),
(27, 73),
(27, 74),
(28, 71),
(28, 76),
(28, 77),
(29, 62),
(29, 64),
(29, 69),
(29, 78),
(30, 65),
(30, 78),
(30, 79),
(30, 80),
(31, 60),
(31, 72),
(31, 78),
(32, 64),
(32, 70),
(32, 75),
(33, 56),
(34, 59),
(34, 62),
(34, 63),
(35, 57),
(35, 67),
(35, 72),
(35, 74),
(35, 77),
(35, 79),
(35, 80),
(36, 61),
(36, 63),
(36, 65),
(36, 67),
(37, 58),
(37, 64),
(37, 66),
(37, 69),
(37, 72),
(38, 57),
(38, 69),
(38, 71),
(38, 73),
(38, 75);

-- --------------------------------------------------------

--
-- Structure de la table `difficulte`
--

CREATE TABLE `difficulte` (
  `id_difficulte` int(11) NOT NULL,
  `nom_difficulte` text NOT NULL,
  `nb_questions` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `difficulte`
--

INSERT INTO `difficulte` (`id_difficulte`, `nom_difficulte`, `nb_questions`) VALUES
(1, 'vegan', 3),
(2, 'végétarien', 4),
(3, 'omnivore', 5),
(4, 'carnivore', 6);

-- --------------------------------------------------------

--
-- Structure de la table `joue_a`
--

CREATE TABLE `joue_a` (
  `id_partie` int(11) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `valeur_score` int(11) NOT NULL,
  `temps_score` time NOT NULL,
  `date_score` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `joue_a`
--

INSERT INTO `joue_a` (`id_partie`, `mail`, `valeur_score`, `temps_score`, `date_score`) VALUES
(56, 'aaza@live.fr', 89, '00:00:21', '2018-06-14');

-- --------------------------------------------------------

--
-- Structure de la table `partie`
--

CREATE TABLE `partie` (
  `id_partie` int(11) NOT NULL,
  `date_partie` date NOT NULL,
  `nb_jouees` int(11) NOT NULL DEFAULT '0',
  `partie_actif` tinyint(4) NOT NULL DEFAULT '1',
  `id_difficulte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `partie`
--

INSERT INTO `partie` (`id_partie`, `date_partie`, `nb_jouees`, `partie_actif`, `id_difficulte`) VALUES
(56, '2018-06-14', 1, 1, 1),
(57, '2018-06-14', 0, 1, 1),
(58, '2018-06-14', 0, 1, 1),
(59, '2018-06-14', 0, 1, 1),
(60, '2018-06-14', 0, 1, 1),
(61, '2018-06-14', 0, 1, 1),
(62, '2018-06-14', 0, 1, 2),
(63, '2018-06-14', 0, 1, 2),
(64, '2018-06-14', 0, 1, 2),
(65, '2018-06-14', 0, 1, 2),
(66, '2018-06-14', 0, 1, 2),
(67, '2018-06-14', 0, 1, 2),
(68, '2018-06-14', 0, 1, 3),
(69, '2018-06-14', 0, 1, 3),
(70, '2018-06-14', 0, 1, 3),
(71, '2018-06-14', 0, 1, 3),
(72, '2018-06-14', 0, 1, 3),
(73, '2018-06-14', 0, 1, 3),
(74, '2018-06-14', 0, 1, 4),
(75, '2018-06-14', 0, 1, 4),
(76, '2018-06-14', 0, 1, 4),
(77, '2018-06-14', 0, 1, 4),
(78, '2018-06-14', 0, 1, 4),
(79, '2018-06-14', 0, 1, 4),
(80, '2018-06-14', 0, 1, 1),
(81, '2018-06-14', 0, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `proposition`
--

CREATE TABLE `proposition` (
  `id_proposition` int(11) NOT NULL,
  `texte_proposition` text NOT NULL,
  `solution_proposition` text NOT NULL,
  `proposition_actif` tinyint(4) DEFAULT '1',
  `id_question` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `proposition`
--

INSERT INTO `proposition` (`id_proposition`, `texte_proposition`, `solution_proposition`, `proposition_actif`, `id_question`) VALUES
(1, 'On peut le rouler', 'les deux', 1, 1),
(2, 'Peut voler', 'les deux', 1, 1),
(5, 'Ce n\'est pas mon fils', 'les deux', 1, 5),
(6, 'Suis-je le gardien de mon frère', 'la bible', 1, 9),
(7, 'La tristesse ôte la force et hâte la mort', 'la bible', 1, 9),
(8, 'Personne par la guerre ne devient grand', 'star wars', 1, 9),
(9, 'Je suis ton père', 'les deux', 1, 9),
(10, 'Difficile à voir, toujours en mouvement est l\'avenir', 'star wars', 1, 9),
(12, 'Luc', 'les deux', 1, 9),
(13, 'Coûte une blinde', 'les deux', 1, 11),
(14, 'C\'est claché avec Cavani', 'Neymar', 1, 11),
(15, 'C\'est claché avec une anguille', 'un homard', 1, 11),
(16, 'Sa couleur est le bleu', 'les deux', 1, 11),
(17, 'Tout le monde veut lui casser les pattes', 'les deux', 1, 11),
(18, 'Mange de la morue', 'les deux', 1, 11),
(19, 'Très peu de gras', 'les deux', 1, 11),
(20, 'C\'est une grosse pince', 'un homard', 1, 11),
(21, 'Se trouve dans les murs', 'souris', 1, 12),
(22, 'Ratatouille', 'rat', 1, 12),
(23, 'En campagne', 'rat', 1, 12),
(24, 'Des villes et des champs', 'rat', 1, 12),
(25, 'La 6', 'Lamy', 1, 6),
(26, 'Aime le sport', 'les deux', 1, 1),
(27, 'Fait des parfums', 'Jean-Paul', 1, 13),
(28, 'Est un homme', 'les deux', 1, 13),
(29, 'En bases de données', 'Olivier', 1, 13),
(34, 'Meilleur club de l\'ISEN', 'club foyer', 1, 16),
(35, 'Fait des repas', 'les deux', 1, 16),
(36, 'Vole des couverts', 'club elec', 1, 16),
(37, 'Ont gagné les défis du bde PLAY', 'Cosmunity', 1, 17),
(38, 'Font gagné des goodies', 'les deux', 1, 17),
(39, 'Sont des alcooliques', 'les deux', 1, 17),
(40, 'Sont les plus intelligents', 'CIR', 1, 18),
(41, 'Sont les plus Compétents', 'CIR', 1, 18),
(42, 'Se mettent en PLS en soirée', 'CSI', 1, 18),
(43, 'Fait de l\'humour', 'les deux', 1, 6),
(44, 'Travail en tant que fonctionaire', 'lamri', 1, 6),
(45, 'Est une machine', 'les deux', 1, 19),
(46, 'Sert à travailler', 'pc gamer', 1, 19),
(47, 'Sert à jouer', 'les deux', 1, 19),
(48, 'Doit sauver la princesse', 'les deux', 1, 20),
(49, 'Fait du karting', 'les deux', 1, 20),
(50, 'Porte des habits verts', 'Zelda', 1, 20),
(51, 'Crée par Michel Guillemot', 'les deux', 1, 21),
(52, 'Meilleur dans son domaine', 'Ubisoft', 1, 21),
(53, 'A des origines bretonnes', 'les deux', 1, 21),
(54, 'Est la mascotte de pokemon', 'Pikachu', 1, 22),
(55, 'Fait parti de la 1er génération', 'les deux', 1, 22),
(56, 'Mentali', 'Evoli', 1, 22),
(57, 'Est payant', 'PUBG', 1, 23),
(58, 'Est un Battle Royale', 'les deux', 1, 23),
(59, 'A beaucoup de gros bugs', 'PUBG', 1, 23),
(60, 'Les jeux vidéos sont gratuits', 'Linux', 1, 24),
(61, 'Ont peux lancer des jeux vidéos dessus', 'les deux', 1, 24),
(62, 'Possède plus de jeux vidéos', 'Windows', 1, 24),
(63, ' \"Whenever, Wherever\"', 'Shakira', 1, 25),
(64, ' \"Can\'t Remember to Forget You\"', 'les deux', 1, 25),
(65, 'A moins de 40 ans', 'Rihanna', 1, 25),
(66, 'Rock', 'Mikelangelo Loconte', 1, 26),
(67, 'Est née en Italie', 'Mikelangelo Loconte', 1, 26),
(68, 'Wolfgang Amadeus', 'Mozart', 1, 26),
(69, ' \"accidentally in love\"', 'DreamWorks', 1, 27),
(70, '\"L\'Histoire de la vie\"', 'Disney', 1, 27),
(71, '\"hakuna matata\"', 'Disney', 1, 27),
(72, 'Est un genre musical', 'les deux', 1, 28),
(73, 'Est utilisé pour faire la fête', 'Rock', 1, 28),
(74, 'Mozart', 'Classique', 1, 28),
(75, 'Soirée', 'DJ', 1, 29),
(76, 'Dirige', 'les deux', 1, 29),
(77, 'Avicii', 'DJ', 1, 29),
(78, 'Est un musicien', 'les deux', 1, 30),
(79, 'Fait de la vrai musique', 'Jean-Sébastien Bach', 1, 30),
(80, '\"L\'Art de la fugue\"', 'Jean-Sébastien Bach', 1, 30),
(81, 'A fait du cinéma', 'les deux', 1, 31),
(82, 'A son propre fan club', 'les deux', 1, 31),
(83, 'Ne sait dire que son nom', 'Pikachu', 1, 31),
(84, 'Il faut se serrer la main avant', 'la paix', 1, 32),
(85, 'Ça arrive souvent après une dégustation de pois chiches', 'un pet', 1, 32),
(86, 'Ça peut soulager une nation entière', 'les deux', 1, 32),
(87, 'Tacle par-derrière', 'carton rouge', 1, 33),
(88, 'Se battre à la mi-temps', 'carton rouge', 1, 33),
(89, 'N\'est pas vert', 'les deux', 1, 33),
(90, 'Est un grand joueur de Tenis', 'Monfils', 1, 5),
(91, 'Est de ma famille', 'mon père', 1, 5),
(92, 'Vit dans l\'eau', 'Némo', 1, 34),
(93, 'Disney', 'Némo', 1, 34),
(94, 'Est vert', 'Shrek', 1, 34),
(95, '\"Mon voisin Totoro\"', 'Hayao Miyazaki', 1, 35),
(96, 'Fondateur du Studio Ghibli', 'les deux', 1, 35),
(97, '\"Le Tombeau des lucioles\"', 'Isao Takahata', 1, 35),
(98, 'Zombie', 'les deux', 1, 36),
(99, 'Winter is coming', 'Game of Thrones', 1, 36),
(100, 'Se battent contre des humains', 'les deux', 1, 36),
(101, '\"Spiderman\"', 'Marvel', 1, 37),
(102, 'Super héros', 'les deux', 1, 37),
(103, '\"Batman\"', 'DC Comics', 1, 37),
(104, 'Est humoriste', 'les deux', 1, 38),
(105, 'La personne est née au nord de la France', 'Dany Boon', 1, 38),
(106, '\"Bienvenue chez les Ch\'tis\"', 'Dany Boon', 1, 38);

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `id_question` int(11) NOT NULL,
  `solution_un` varchar(200) NOT NULL,
  `solution_deux` varchar(200) NOT NULL,
  `question_actif` tinyint(4) NOT NULL DEFAULT '1',
  `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `question`
--

INSERT INTO `question` (`id_question`, `solution_un`, `solution_deux`, `question_actif`, `id_categorie`) VALUES
(1, 'Bernard Tapie', 'un Tapis', 1, 4),
(5, 'Monfils', 'mon père', 1, 4),
(6, 'Lamy', 'Lamri', 1, 1),
(9, 'la bible', 'Star Wars', 1, 5),
(11, 'Neymar', 'un homard', 1, 4),
(12, 'rat', 'souris', 1, 1),
(13, 'Olivier', 'Jean-Paul', 1, 1),
(16, 'club elec', 'club foyer', 1, 1),
(17, 'Cosmunity', 'Pixel', 1, 1),
(18, 'CSI', 'CIR', 1, 1),
(19, 'pc gamer', 'console', 1, 2),
(20, 'Mario', 'Zelda', 1, 2),
(21, 'Ubisoft', 'Gameloft', 1, 2),
(22, 'Evoli', 'Pikachu', 1, 2),
(23, 'Fornite', 'PUBG', 1, 2),
(24, 'Windows', 'Linux', 1, 2),
(25, 'Shakira', 'Rihanna', 1, 3),
(26, 'Mozart', 'Mikelangelo Loconte', 1, 3),
(27, 'DreamWorks', 'Disney', 1, 3),
(28, 'Classique', 'Rock', 1, 3),
(29, 'DJ', 'chef d\'orchestre', 1, 3),
(30, 'Jean-Sébastien Bach', 'JuL', 1, 3),
(31, 'Audrey Tautou', 'Pikachu', 1, 4),
(32, 'un pet', 'la paix', 1, 4),
(33, 'carton jaune', 'carton rouge', 1, 4),
(34, 'Shrek', 'Némo', 1, 5),
(35, 'Hayao Miyazaki', 'Isao Takahata', 1, 5),
(36, 'Game of Thrones', 'The Walking Dead', 1, 5),
(37, 'Marvel', ' DC Comics', 1, 5),
(38, 'Dany Boon', 'Laura Laune', 1, 5);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `mail` varchar(200) NOT NULL,
  `pseudo` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text,
  `token` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`mail`, `pseudo`, `password`, `avatar`, `token`) VALUES
('aaza@live.fr', 'clement', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'files/img/404e8f05076fd7bd3f0e483691a10589_avatar2.gif', '4ec323eee1470a02d7b4'),
('antonin.berre@laposte.net', 'MrBLizz', '1d7d66c901289d714228f527c340472e361d74a3', 'files/img/0db081891303d28bf0fddf28708bcf4d_3Rennes3539937063547699200_n.jpg', 'c3d748a681bd2618e5ce'),
('antoninBerre@gmail.com', 'antoninBerre', 'd55d47358e9c541a826ea9608a26157d88bc4982', 'files/img/a81b305e99d046d7d433eabe2af81f44_tteywhdsn.sql', '455ca2917064b1434208'),
('hotdogquiz@laposte.net', 'hotdog', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'files/img/c8bd152ae95f27da9637918d867b1e22_70e958470d943edccbdc6e4dcb51a8b0_2398457_pic_970x641.jpg', '0a34ea1ec959c1c09d2e'),
('infinitydoge@doggomail.gov', 'infinitydoge', 'aa3cca7d2bde9ea05b94b69ec7c3790bd248960a', 'files/img/726466daa573cca022d83971c8dc78a1_infinitydoge.gif', 'b9beb4ba5d7ca4e5af9d'),
('jean@ghj.fr', 'Jean', 'f7ed376ba27377ae2680fafe1a67037df80b7e36', 'design/img/avatardefaut.gif', '77156e01f0b91d798be2'),
('kev@gmail.com', 'klllll', '13fbd79c3d390e5d6585a21e11ff5ec1970cff0c', 'files/img/6ea2886b0037fe9bd570eb2dc51f316e_burgerquiz.sql', '2a4cba8d6725a4244814'),
('kevin@gmail.com', 'kovin', '13fbd79c3d390e5d6585a21e11ff5ec1970cff0c', 'files/img/a9d23877a2a4376dab2d9152b683c5d7_burgerquiz.sql', ' '),
('qsdf@lol.mdr', 'fdsc', '1ff4fa636016eb53ce671edfa086e587817bd795', 'design/img/avatardefaut.png', 'e25014d25d40bbf6b1dc'),
('raizi@gmail.com', 'RaiZi', 'b8e2221e21e746b5ead65733d4344c7eb98c04b1', 'files/img/4afc7545466f64c43ce982bc74a5b28a_Lion_grand_fini.png', 'c8bade6b520ca43e585b'),
('stalin@kremlin.su', 'Staline', '81c0e6db6346334b5903e7388f3446adaf52023e', 'files/img/c71363f102d8b3a39cadd56fabe89ab6_bonne_annee_communiste.gif', 'df3da3f614e921bda819'),
('trump@nkorea.kr', 'BrighterFuture', 'dba892997598a7568196c03cf0aaf9924e7b441f', 'files/img/afafd231ecd7a46665ab2ba2b9e322e9_nuke_low.gif', 'cc9352172f99764236ac'),
('xd@usa.rekt', 'D0n4ld', '3cd0f6484b7e10a3b8a4ce850e1e887721ffb036', 'files/img/510576e6327281fa4da97c2453cc00f9_220px_Kim_Jong_un_2018_4_27.jpg', 'e7233d4002052a6f8e32');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `contient`
--
ALTER TABLE `contient`
  ADD PRIMARY KEY (`id_question`,`id_partie`),
  ADD KEY `contient_partie0_FK` (`id_partie`);

--
-- Index pour la table `difficulte`
--
ALTER TABLE `difficulte`
  ADD PRIMARY KEY (`id_difficulte`);

--
-- Index pour la table `joue_a`
--
ALTER TABLE `joue_a`
  ADD PRIMARY KEY (`id_partie`,`mail`),
  ADD KEY `joue_a_utilisateurs0_FK` (`mail`);

--
-- Index pour la table `partie`
--
ALTER TABLE `partie`
  ADD PRIMARY KEY (`id_partie`),
  ADD KEY `partie_difficulte_FK` (`id_difficulte`);

--
-- Index pour la table `proposition`
--
ALTER TABLE `proposition`
  ADD PRIMARY KEY (`id_proposition`),
  ADD KEY `proposition_question_FK` (`id_question`);

--
-- Index pour la table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id_question`),
  ADD KEY `question_categorie_FK` (`id_categorie`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`mail`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `difficulte`
--
ALTER TABLE `difficulte`
  MODIFY `id_difficulte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `partie`
--
ALTER TABLE `partie`
  MODIFY `id_partie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT pour la table `proposition`
--
ALTER TABLE `proposition`
  MODIFY `id_proposition` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT pour la table `question`
--
ALTER TABLE `question`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `contient`
--
ALTER TABLE `contient`
  ADD CONSTRAINT `contient_partie0_FK` FOREIGN KEY (`id_partie`) REFERENCES `partie` (`id_partie`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contient_question_FK` FOREIGN KEY (`id_question`) REFERENCES `question` (`id_question`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `joue_a`
--
ALTER TABLE `joue_a`
  ADD CONSTRAINT `joue_a_partie_FK` FOREIGN KEY (`id_partie`) REFERENCES `partie` (`id_partie`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `joue_a_utilisateurs0_FK` FOREIGN KEY (`mail`) REFERENCES `utilisateurs` (`mail`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `partie`
--
ALTER TABLE `partie`
  ADD CONSTRAINT `partie_difficulte_FK` FOREIGN KEY (`id_difficulte`) REFERENCES `difficulte` (`id_difficulte`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `proposition`
--
ALTER TABLE `proposition`
  ADD CONSTRAINT `proposition_question_FK` FOREIGN KEY (`id_question`) REFERENCES `question` (`id_question`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_categorie_FK` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
