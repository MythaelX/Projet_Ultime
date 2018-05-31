#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: categorie
#------------------------------------------------------------

CREATE TABLE categorie(
        id_categorie    Int NOT NULL ,
        nom_categorie   Varchar (200) NOT NULL ,
        categorie_actif TinyINT NOT NULL
	,CONSTRAINT categorie_PK PRIMARY KEY (id_categorie)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: difficulte
#------------------------------------------------------------

CREATE TABLE difficulte(
        id_difficulte  Int NOT NULL ,
        nom_difficulte Text NOT NULL
	,CONSTRAINT difficulte_PK PRIMARY KEY (id_difficulte)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: partie
#------------------------------------------------------------

CREATE TABLE partie(
        id_partie     Int NOT NULL ,
        id_difficulte Int NOT NULL
	,CONSTRAINT partie_PK PRIMARY KEY (id_partie)

	,CONSTRAINT partie_difficulte_FK FOREIGN KEY (id_difficulte) REFERENCES difficulte(id_difficulte)
)ENGINE=InnoDB;


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
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: proposition
#------------------------------------------------------------

CREATE TABLE proposition(
        id_proposition    Int NOT NULL ,
        texte_proposition Text NOT NULL ,
        proposition_actif TinyINT NOT NULL ,
        id_question       Int NOT NULL
	,CONSTRAINT proposition_PK PRIMARY KEY (id_proposition)

	,CONSTRAINT proposition_question_FK FOREIGN KEY (id_question) REFERENCES question(id_question)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: utilisateurs
#------------------------------------------------------------

CREATE TABLE utilisateurs(
        mail     Varchar (200) NOT NULL ,
        password Text NOT NULL ,
        avatar   Text
	,CONSTRAINT utilisateurs_PK PRIMARY KEY (mail)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: score
#------------------------------------------------------------

CREATE TABLE score(
        id_score     Int NOT NULL ,
        valeur_score Int NOT NULL ,
        date_score   Date NOT NULL ,
        mail         Varchar (200) NOT NULL ,
        id_partie    Int NOT NULL
	,CONSTRAINT score_PK PRIMARY KEY (id_score)

	,CONSTRAINT score_utilisateurs_FK FOREIGN KEY (mail) REFERENCES utilisateurs(mail)
	,CONSTRAINT score_partie0_FK FOREIGN KEY (id_partie) REFERENCES partie(id_partie)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: contient
#------------------------------------------------------------

CREATE TABLE contient(
        id_question Int NOT NULL ,
        id_partie   Int NOT NULL
	,CONSTRAINT contient_PK PRIMARY KEY (id_question,id_partie)

	,CONSTRAINT contient_question_FK FOREIGN KEY (id_question) REFERENCES question(id_question)
	,CONSTRAINT contient_partie0_FK FOREIGN KEY (id_partie) REFERENCES partie(id_partie)
)ENGINE=InnoDB;
