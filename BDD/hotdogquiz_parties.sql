-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1:3306
-- Généré le :  Mar 12 Juin 2018 à 09:13
-- Version du serveur :  5.7.22-0ubuntu0.16.04.1
-- Version de PHP :  7.0.30-0ubuntu0.16.04.1

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
(2, 'Jeux Vidéos', 0),
(3, 'Musiques', 0),
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
(1, 16),
(6, 16),
(12, 16),
(1, 17),
(5, 17),
(6, 17),
(9, 17),
(11, 17),
(13, 17),
(5, 18),
(6, 18),
(9, 18),
(11, 18),
(13, 18),
(1, 19),
(5, 19),
(9, 19),
(11, 19),
(1, 20),
(6, 20),
(11, 20),
(13, 20),
(1, 21),
(9, 21),
(13, 21),
(1, 22),
(5, 22),
(6, 22),
(11, 22),
(12, 22),
(13, 22),
(1, 23),
(5, 23),
(9, 23),
(11, 23),
(12, 23),
(5, 24),
(6, 24),
(11, 24),
(12, 24),
(13, 24),
(5, 25),
(6, 25),
(9, 25),
(11, 25),
(12, 25),
(5, 26),
(6, 26),
(9, 26),
(11, 26),
(12, 26),
(13, 26),
(6, 27),
(9, 27),
(11, 27),
(12, 27);

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
(16, '2018-06-12', 0, 1, 1),
(17, '2018-06-12', 0, 1, 4),
(18, '2018-06-12', 0, 1, 3),
(19, '2018-06-12', 0, 1, 2),
(20, '2018-06-12', 0, 1, 2),
(21, '2018-06-12', 0, 1, 1),
(22, '2018-06-12', 0, 1, 4),
(23, '2018-06-12', 0, 1, 3),
(24, '2018-06-12', 0, 1, 3),
(25, '2018-06-12', 0, 1, 3),
(26, '2018-06-12', 0, 1, 4),
(27, '2018-06-12', 0, 1, 2);

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
(8, 'personne par la guerre ne devient grand', 'star wars', 1, 9),
(9, 'je suis ton père', 'les deux', 1, 9),
(10, 'difficile à voir, toujours en mouvement est l\'avenir', 'star wars', 1, 9),
(12, 'Luc', 'les deux', 1, 9),
(13, 'coûte une blinde', 'les deux', 1, 11),
(14, 'c\'est claché avec Cavani', 'Neymar', 1, 11),
(15, 'c\'est claché avec une anguille', 'un homard', 1, 11),
(16, 'sa couleur est le bleu', 'les deux', 1, 11),
(17, 'Tout le monde veut lui casser les pattes', 'les deux', 1, 11),
(18, 'Mange de la morue', 'les deux', 1, 11),
(19, 'Très peu de gras', 'les deux', 1, 11),
(20, 'c\'est une grosse pince', 'un homard', 1, 11),
(21, 'se trouve dans les murs', 'souris', 1, 12),
(22, 'Ratatouille', 'rat', 1, 12),
(23, 'En campagne', 'rat', 1, 12),
(24, 'Des villes et des champs', 'rat', 1, 12),
(25, 'La 6', 'Lamy', 1, 6),
(26, 'aime le sport', 'les deux', 1, 1),
(27, 'Fait des parfums', 'Jean-Paul', 1, 13),
(28, 'Est un homme', 'les deux', 1, 13),
(29, 'En bases de données', 'Olivier', 1, 13);

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
(13, 'Olivier', 'Jean-Paul', 1, 1);

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
('hotdog@quiz.fr', 'hotdog', 'password', './design/img/hotdog.png', 'GfzL4OQVqKerNVou');

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
  MODIFY `id_partie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT pour la table `proposition`
--
ALTER TABLE `proposition`
  MODIFY `id_proposition` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT pour la table `question`
--
ALTER TABLE `question`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
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
