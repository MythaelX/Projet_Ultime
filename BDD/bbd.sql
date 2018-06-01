#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

#------------------------------------------------------------
# Tables
#------------------------------------------------------------

#------------------------------------------------------------
# Table: categorie
#------------------------------------------------------------

CREATE TABLE categorie(
        id_categorie    Int NOT NULL ,
        nom_categorie   Varchar (200) NOT NULL ,
        categorie_actif TinyINT NOT NULL
	,CONSTRAINT categorie_PK PRIMARY KEY (id_categorie)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#------------------------------------------------------------
# Table: difficulte
#------------------------------------------------------------

CREATE TABLE difficulte(
        id_difficulte  Int NOT NULL ,
        nom_difficulte Text NOT NULL ,
        nb_questions   Int NOT NULL
	,CONSTRAINT difficulte_PK PRIMARY KEY (id_difficulte)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#------------------------------------------------------------
# Table: partie
#------------------------------------------------------------

CREATE TABLE partie(
        id_partie     Int NOT NULL ,
        date_partie   Date NOT NULL ,
        partie_actif  TinyINT NOT NULL ,
        id_difficulte Int NOT NULL
	,CONSTRAINT partie_PK PRIMARY KEY (id_partie)

	,CONSTRAINT partie_difficulte_FK FOREIGN KEY (id_difficulte) REFERENCES difficulte(id_difficulte)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#------------------------------------------------------------
# Table: question
#------------------------------------------------------------

CREATE TABLE question(
        id_question    Int NOT NULL ,
        solution_un    Varchar (200) NOT NULL ,
        solution_deux  Varchar (200) NOT NULL ,
        question_actif TinyINT NOT NULL ,
        id_categorie   Int NOT NULL
	,CONSTRAINT question_PK PRIMARY KEY (id_question)

	,CONSTRAINT question_categorie_FK FOREIGN KEY (id_categorie) REFERENCES categorie(id_categorie)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#------------------------------------------------------------
# Table: proposition
#------------------------------------------------------------

CREATE TABLE proposition(
        id_proposition       Int NOT NULL ,
        texte_proposition    Text NOT NULL ,
        solution_proposition Text NOT NULL ,
        proposition_actif    TinyINT NOT NULL ,
        id_question          Int NOT NULL
	,CONSTRAINT proposition_PK PRIMARY KEY (id_proposition)

	,CONSTRAINT proposition_question_FK FOREIGN KEY (id_question) REFERENCES question(id_question)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#------------------------------------------------------------
# Table: utilisateurs
#------------------------------------------------------------

CREATE TABLE utilisateurs(
        mail     Varchar (200) NOT NULL ,
        pseudo   Text NOT NULL ,
        password Text NOT NULL ,
        avatar   Text
	,CONSTRAINT utilisateurs_PK PRIMARY KEY (mail)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#------------------------------------------------------------
# Table: contient
#------------------------------------------------------------

CREATE TABLE contient(
        id_question Int NOT NULL ,
        id_partie   Int NOT NULL
	,CONSTRAINT contient_PK PRIMARY KEY (id_question,id_partie)

	,CONSTRAINT contient_question_FK FOREIGN KEY (id_question) REFERENCES question(id_question)
	,CONSTRAINT contient_partie0_FK FOREIGN KEY (id_partie) REFERENCES partie(id_partie)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#------------------------------------------------------------
# Table: joue à
#------------------------------------------------------------

CREATE TABLE joue_a(
        id_partie    Int NOT NULL ,
        mail         Varchar (200) NOT NULL ,
        valeur_score Int NOT NULL ,
        temps_score  Datetime NOT NULL ,
        date_score   Date NOT NULL
	,CONSTRAINT joue_a_PK PRIMARY KEY (id_partie,mail)

	,CONSTRAINT joue_a_partie_FK FOREIGN KEY (id_partie) REFERENCES partie(id_partie)
	,CONSTRAINT joue_a_utilisateurs0_FK FOREIGN KEY (mail) REFERENCES utilisateurs(mail)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

#------------------------------------------------------------
# Contents
#------------------------------------------------------------

#------------------------------------------------------------
# Table: categorie
#------------------------------------------------------------

INSERT INTO `categorie` VALUES
(1, 'ISEN', 1),
(2, 'Jeux Vidéos', 1),
(3, 'Musiques', 1),
(4, 'People', 1),
(5, 'Séries', 1),
(6, 'Sports', 1);

#------------------------------------------------------------
# Table: difficulte
#------------------------------------------------------------

INSERT INTO `difficulte` VALUES
(1, 'vegan', 3),
(2, 'végétarien', 4),
(3, 'omnivore', 5),
(4, 'carnivore', 6);

#------------------------------------------------------------
# Table: partie
#------------------------------------------------------------

INSERT INTO `partie` VALUES
(1, '2018-06-01', 1, 1);

#------------------------------------------------------------
# Table: question
#------------------------------------------------------------

INSERT INTO `question` VALUES
(1, 'Bernard Tapie', 'un Tapis', 1, 4);

#------------------------------------------------------------
# Table: proposition
#------------------------------------------------------------

INSERT INTO `proposition` VALUES
(1, 'On peut le rouler', 'les deux', 1, 1),
(2, 'Peut voler', 'les deux', 1, 1);

#------------------------------------------------------------
# Table: utilisateurs
#------------------------------------------------------------

INSERT INTO `utilisateurs` VALUES
('hotdog@quiz.fr', 'hotdog', 'password', './design/img/hotdog.png');

#------------------------------------------------------------
# Table: contient
#------------------------------------------------------------

INSERT INTO `contient` VALUES
(1, 1);

#------------------------------------------------------------
# Table: joue à
#------------------------------------------------------------

INSERT INTO `joue_a` VALUES
(1, 'hotdog@quiz.fr', 42, '2018-06-01 00:20:00', '2018-06-01');
