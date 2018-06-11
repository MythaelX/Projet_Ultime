<?php
	require_once("bases/_functions.php");
	require_once("bases/getter.php");
	require_once("bases/errors.php");
	require_once("bases/bdd.php");
	require_once("bddConnect.inc");
	require_once("fonctions.php");

	// Database connexion.
	$bdd = new Bdd("mysql", $BDD_HOST, $BDD_NAME, $BDD_USER, $BDD_PASS);

	/* Récupération de la prochaine ressource */
	$requestRessource = nextRes();
	$data = NULL;
	/* Action selon le type d'envoie */
	switch($type){
		case "POST":
		if($requestRessource == 'creerPartie'){
			/** traitement des données pour envoyer la requête sql **/
			$themes=explode(",",$_POST['themes']);
			$themesSQL="(";
			for ($i=0; $i <sizeof($themes)-1 ; $i++) {
				$themesSQL=$themesSQL."c.nom_categorie='".$themes[$i]."' OR ";
			}
			$themesSQL=$themesSQL."c.nom_categorie='".$themes[$i]."') AND ";
			/*******************/
			$tabQuestions=$bdd->query("SELECT q.id_question FROM question AS q,categorie AS c WHERE ".$themesSQL." c.id_categorie=q.id_categorie ORDER BY RAND()");
			creationPartie($bdd,$tabQuestions);
		}else if($requestRessource == 'jeu'){
			score($bdd);
		}
			break;
		case "GET":
			if($requestRessource == 'tableauPalmares'){
				$difficulte=$_GET['difficulte'];
				$data=$bdd->query("SELECT j.valeur_score AS score, j.temps_score AS temps, j.date_score, u.pseudo FROM joue_a AS j, utilisateurs AS u, partie AS p WHERE j.mail = u.mail AND j.id_partie=p.id_partie AND p.id_difficulte=".$difficulte." ORDER BY j.valeur_score DESC LIMIT 15");
			}else if($requestRessource == 'authentification'){
				authentification($bdd);
			}else if($requestRessource == 'navInfo'){
				$pseudo = $_GET['pseudo'];
				$data=$bdd->query("SELECT pseudo,avatar FROM utilisateurs WHERE pseudo='$pseudo'");
			}else if($requestRessource == 'tableauParties'){
				$difficulte=$_GET['difficulte'];
				$data=$bdd->query("SELECT id_partie FROM partie WHERE id_difficulte=".$difficulte." AND partie_actif=1");
			}else if($requestRessource == 'tableauThemes'){
				$data=$bdd->query("SELECT nom_categorie FROM categorie WHERE categorie_actif=1");
			}else if($requestRessource == 'tableauDifficulte'){
				$data=$bdd->query("SELECT nom_difficulte FROM difficulte WHERE 1");
			}else if($requestRessource == 'nomDifficulte'){
				$id_partie=$_GET['id_partie'];
				$data=$bdd->query("SELECT d.nom_difficulte FROM partie AS p,difficulte As d Where p.id_partie=".$id_partie." And d.id_difficulte=p.id_difficulte");
			}else if($requestRessource == 'questions'){
				$id_partie=$_GET['id_partie'];
				$data=$bdd->query("SELECT q.id_question,q.solution_un,q.solution_deux FROM question As q,contient AS c WHERE c.id_question=q.id_question AND q.question_actif=1 AND c.id_partie=".$id_partie."");
			}else if($requestRessource == 'propositions'){
				$id_question=$_GET['id_question'];
				$data=$bdd->query("SELECT texte_proposition,solution_proposition FROM proposition Where id_question=".$id_question." AND proposition_actif=1 ORDER BY RAND() LIMIT 3");
			}else if($requestRessource=='pseudo'){
				$pseudo=$_GET['pseudo'];
				$data=$bdd->query("SELECT pseudo FROM utilisateurs WHERE pseudo='".$pseudo."'");
			}else if($requestRessource=='email'){
				$mail=$_GET['email'];
				$data=$bdd->query("SELECT mail FROM utilisateurs WHERE mail='".$mail."'");
			}
			sendJsonData($data,'HTTP/1.1 200 OK');
			break;
		case "PUT":
			break;
		case "DELETE":
			if($requestRessource == 'sessionDestroy'){
				session_destroy();
			}
			break;
		default:
	}
	//$pseudo=verifieToken($bdd);
	exit;
?>
