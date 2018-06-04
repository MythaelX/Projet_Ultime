<?php
	require_once("bases/_functions.php");
	require_once("bases/getter.php");
	require_once("bases/errors.php");
	require_once("bases/bdd.php");
	require_once("bddConnect.inc");
	//------------------------------------------------------------------------------
	//--- sendJsonData------------------------------------------------------------
	//------------------------------------------------------------------------------
	// sendJsonData.

	function sendJsonData($message, $h){
	    header($h);
	    header('Content-Type: text/plain; charset=utf-8');
	    header('Cache-control: no-store, no-cache, must-revalidate');
	    header('Pragma: no-cache');
	    echo json_encode($message);
	}

	// Database connexion.
	$bdd = new Bdd("mysql", $BDD_HOST, $BDD_NAME, $BDD_USER, $BDD_PASS);

	/* Récupération de la prochaine ressource */
	$requestRessource = nextRes();

	$data = NULL;
	/* Action selon le type d'envoie */

	switch($type){
		case "POST":
			break;
		case "GET":
			if($requestRessource == 'tabVegan'){
				$data=$bdd->query("SELECT j.valeur_score AS score, j.temps_score AS temps, j.date_score, u.pseudo FROM joue_a AS j, utilisateurs AS u, partie AS p WHERE j.mail = u.mail AND j.id_partie=p.id_partie AND p.id_difficulte=1 ORDER BY j.valeur_score DESC LIMIT 15");
			}else if($requestRessource == 'tabVegetarien'){
				$data=$bdd->query("SELECT j.valeur_score AS score, j.temps_score AS temps, j.date_score, u.pseudo FROM joue_a AS j, utilisateurs AS u, partie AS p WHERE j.mail = u.mail AND j.id_partie=p.id_partie AND p.id_difficulte=2 ORDER BY j.valeur_score DESC LIMIT 15");
			}else if($requestRessource == 'tabOmnivore'){
				$data=$bdd->query("SELECT j.valeur_score AS score, j.temps_score AS temps, j.date_score, u.pseudo FROM joue_a AS j, utilisateurs AS u, partie AS p WHERE j.mail = u.mail AND j.id_partie=p.id_partie AND p.id_difficulte=3 ORDER BY j.valeur_score DESC LIMIT 15");
			}else if($requestRessource == 'tabCarnivore'){
				$data=$bdd->query("SELECT j.valeur_score AS score, j.temps_score AS temps, j.date_score, u.pseudo FROM joue_a AS j, utilisateurs AS u, partie AS p WHERE j.mail = u.mail AND j.id_partie=p.id_partie AND p.id_difficulte=4 ORDER BY j.valeur_score DESC LIMIT 15");
			}
			sendJsonData($data,'HTTP/1.1 200 OK');
			break;
		case "PUT":
			break;
		case "DELETE":
			break;
		default:
	}

	exit;
?>
