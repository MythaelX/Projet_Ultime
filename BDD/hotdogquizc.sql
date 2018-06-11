-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2018 at 01:26 PM
-- Server version: 5.7.22-0ubuntu0.17.10.1
-- PHP Version: 7.1.17-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotdogquiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `nom_categorie` varchar(200) NOT NULL,
  `categorie_actif` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom_categorie`, `categorie_actif`) VALUES
(1, 'ISEN', 1),
(2, 'Jeux Vidéos', 1),
(3, 'Musiques', 1),
(4, 'People', 1),
(5, 'Séries', 1),
(6, 'Sports', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contient`
--

CREATE TABLE `contient` (
  `id_question` int(11) NOT NULL,
  `id_partie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contient`
--

INSERT INTO `contient` (`id_question`, `id_partie`) VALUES
(1, 1),
(1, 33),
(2, 33),
(3, 33),
(4, 33),
(1, 35),
(3, 35),
(4, 35),
(1, 36),
(2, 36),
(4, 36),
(2, 37),
(3, 37),
(4, 37);

-- --------------------------------------------------------

--
-- Table structure for table `difficulte`
--

CREATE TABLE `difficulte` (
  `id_difficulte` int(11) NOT NULL,
  `nom_difficulte` text NOT NULL,
  `nb_questions` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `difficulte`
--

INSERT INTO `difficulte` (`id_difficulte`, `nom_difficulte`, `nb_questions`) VALUES
(1, 'vegan', 3),
(2, 'végétarien', 4),
(3, 'omnivore', 5),
(4, 'carnivore', 6);

-- --------------------------------------------------------

--
-- Table structure for table `joue_a`
--

CREATE TABLE `joue_a` (
  `id_partie` int(11) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `valeur_score` int(11) NOT NULL,
  `temps_score` time NOT NULL,
  `date_score` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `joue_a`
--

INSERT INTO `joue_a` (`id_partie`, `mail`, `valeur_score`, `temps_score`, `date_score`) VALUES
(1, 'hotdog@quiz.fr', 30, '00:00:01', '2018-06-08'),
(2, 'hotdog@quiz.fr', 20, '09:00:00', '2018-06-05'),
(3, 'hotdog@quiz.fr', 22, '05:00:00', '2018-06-06'),
(4, 'hotdog@quiz.fr', 22, '05:00:00', '2018-06-06'),
(5, 'hotdog@quiz.fr', 22, '05:00:00', '2018-06-06'),
(6, 'hotdog@quiz.fr', 22, '05:00:00', '2018-06-06'),
(7, 'hotdog@quiz.fr', 22, '05:00:00', '2018-06-06'),
(8, 'hotdog@quiz.fr', 22, '05:00:00', '2018-06-06'),
(9, 'hotdog@quiz.fr', 22, '05:00:00', '2018-06-06'),
(10, 'hotdog@quiz.fr', 22, '05:00:00', '2018-06-06'),
(11, 'hotdog@quiz.fr', 22, '05:00:00', '2018-06-06'),
(12, 'hotdog@quiz.fr', 70, '00:13:00', '2018-06-06'),
(13, 'hotdog@quiz.fr', 22, '15:00:00', '2018-06-04'),
(14, 'hotdog@quiz.fr', 22, '15:00:00', '2018-06-04'),
(15, 'hotdog@quiz.fr', 55, '13:34:34', '2018-06-30'),
(16, 'hotdog@quiz.fr', 58, '13:34:34', '2018-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `partie`
--

CREATE TABLE `partie` (
  `id_partie` int(11) NOT NULL,
  `date_partie` date NOT NULL,
  `partie_actif` tinyint(4) NOT NULL,
  `id_difficulte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partie`
--

INSERT INTO `partie` (`id_partie`, `date_partie`, `partie_actif`, `id_difficulte`) VALUES
(1, '2018-06-01', 1, 1),
(2, '2018-06-09', 1, 1),
(3, '2018-06-11', 1, 1),
(4, '2018-06-12', 1, 1),
(5, '2018-06-11', 1, 1),
(6, '2018-06-12', 1, 1),
(7, '2018-06-11', 1, 1),
(8, '2018-06-11', 1, 1),
(9, '2018-06-11', 1, 1),
(10, '2018-06-11', 1, 1),
(11, '2018-06-11', 1, 1),
(12, '2018-06-11', 1, 1),
(13, '2018-06-11', 1, 1),
(14, '2018-06-11', 1, 1),
(15, '2018-06-11', 1, 1),
(16, '2018-06-11', 1, 1),
(33, '2018-06-07', 1, 1),
(34, '2018-06-08', 1, 1),
(35, '2018-06-08', 1, 1),
(36, '2018-06-08', 1, 1),
(37, '2018-06-09', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `proposition`
--

CREATE TABLE `proposition` (
  `id_proposition` int(11) NOT NULL,
  `texte_proposition` text NOT NULL,
  `solution_proposition` text NOT NULL,
  `proposition_actif` tinyint(4) NOT NULL,
  `id_question` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `proposition`
--

INSERT INTO `proposition` (`id_proposition`, `texte_proposition`, `solution_proposition`, `proposition_actif`, `id_question`) VALUES
(1, 'On peut le rouler', 'les deux', 1, 1),
(2, 'Peut voler', 'les deux', 1, 1),
(3, 'lol ', 'les deux', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id_question` int(11) NOT NULL,
  `solution_un` varchar(200) NOT NULL,
  `solution_deux` varchar(200) NOT NULL,
  `question_actif` tinyint(4) NOT NULL,
  `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id_question`, `solution_un`, `solution_deux`, `question_actif`, `id_categorie`) VALUES
(1, 'Bernard Tapie', 'un Tapis', 1, 4),
(2, 'sdsq', 'sqqq', 1, 4),
(3, 'azzaza', 'aazazazaa', 1, 4),
(4, 'azaza', 'zazaazzazaazaz', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `mail` varchar(200) NOT NULL,
  `pseudo` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text,
  `token` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`mail`, `pseudo`, `password`, `avatar`, `token`) VALUES
('aaa@live.fr', 'aaa', 'aaa', 'a833812d710421bbc61b8a89c1670a00_image.jpg', ' '),
('aaza@live.fr', 'aadzadza', 'zdddzzad', '', ' '),
('azaa@live.fr', 'aaa', 'aa', '', ' '),
('chadaut@hotmail.fr', 'clement', '123', 'files/img/285cee010968c1316c2e80943e12081e_2398457_pic_970x641.jpg', 'Eout6CFM/Vtdskho'),
('hotdog@quiz.fr', 'hotd', 'password', '6a14d20bcd08d9ffe562f6aa76faea43_image.jpg', 'dLfJwI/xUZK/DhtY'),
('lol@live.fr', 'hkzeop', 'robert', '20cc1c6f19c55f9abc0d91b650bcc542_image.jpg', ' '),
('mathias2@cegetel.net', 'darkmat', 'chipie', 'files/img/d8653fe454b2e9f41dc2bb1edd5a242b_equi.png', 'FcXRyxW8u2LN5oqm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Indexes for table `contient`
--
ALTER TABLE `contient`
  ADD PRIMARY KEY (`id_question`,`id_partie`),
  ADD KEY `contient_partie0_FK` (`id_partie`);

--
-- Indexes for table `difficulte`
--
ALTER TABLE `difficulte`
  ADD PRIMARY KEY (`id_difficulte`);

--
-- Indexes for table `joue_a`
--
ALTER TABLE `joue_a`
  ADD PRIMARY KEY (`id_partie`,`mail`),
  ADD KEY `joue_a_utilisateurs0_FK` (`mail`);

--
-- Indexes for table `partie`
--
ALTER TABLE `partie`
  ADD PRIMARY KEY (`id_partie`),
  ADD KEY `partie_difficulte_FK` (`id_difficulte`);

--
-- Indexes for table `proposition`
--
ALTER TABLE `proposition`
  ADD PRIMARY KEY (`id_proposition`),
  ADD KEY `proposition_question_FK` (`id_question`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id_question`),
  ADD KEY `question_categorie_FK` (`id_categorie`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `difficulte`
--
ALTER TABLE `difficulte`
  MODIFY `id_difficulte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `partie`
--
ALTER TABLE `partie`
  MODIFY `id_partie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `proposition`
--
ALTER TABLE `proposition`
  MODIFY `id_proposition` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `contient`
--
ALTER TABLE `contient`
  ADD CONSTRAINT `contient_partie0_FK` FOREIGN KEY (`id_partie`) REFERENCES `partie` (`id_partie`),
  ADD CONSTRAINT `contient_question_FK` FOREIGN KEY (`id_question`) REFERENCES `question` (`id_question`);

--
-- Constraints for table `joue_a`
--
ALTER TABLE `joue_a`
  ADD CONSTRAINT `joue_a_partie_FK` FOREIGN KEY (`id_partie`) REFERENCES `partie` (`id_partie`),
  ADD CONSTRAINT `joue_a_utilisateurs0_FK` FOREIGN KEY (`mail`) REFERENCES `utilisateurs` (`mail`);

--
-- Constraints for table `partie`
--
ALTER TABLE `partie`
  ADD CONSTRAINT `partie_difficulte_FK` FOREIGN KEY (`id_difficulte`) REFERENCES `difficulte` (`id_difficulte`);

--
-- Constraints for table `proposition`
--
ALTER TABLE `proposition`
  ADD CONSTRAINT `proposition_question_FK` FOREIGN KEY (`id_question`) REFERENCES `question` (`id_question`);

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_categorie_FK` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
