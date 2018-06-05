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

	function authentification($bdd){
	    $pseudo = $_SERVER['PHP_AUTH_USER'];
	    $mdp = $_SERVER['PHP_AUTH_PW'];
			$statue = $bdd->query("select * from utilisateurs where pseudo='$pseudo' and password='$mdp'"); //sha1('$mdp')
	    if(!$statue){
	        header('HTTP/1.1 401 Unauthorized');
	        exit;
	    }
	    $token = base64_encode(openssl_random_pseudo_bytes(12));
			$bdd->query("update utilisateurs set token='$token' where pseudo='$pseudo'");
	    header('Content-Type: text/plain; charset=utf-8');
	    header('Cache-control: no-store, no-cache, must-revalidate');
	    header('Pragma: no-cache');
	    echo $token;
	    exit;
	}

	function verifieToken($bdd){
	    $headers = getallheaders();
	    $token = $headers['Authorization'];

	    if (preg_match('/Bearer (.*)/', $token, $tab))$token = $tab[1];
			$pseudo = $bdd->query("select pseudo from utilisateurs where token='$token'");

	    if(!($pseudo)){
					Unauthorized();
	    }
	    return $pseudo;
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
			}else if($requestRessource == 'authentification'){
				authentification($bdd);
			}else if($requestRessource == 'navInfo'){
				$pseudo = $_GET['pseudo'];
				error_log($pseudo);
				$data=$bdd->query("SELECT pseudo,avatar FROM utilisateurs WHERE pseudo='$pseudo'");
				error_log($data);
			}
			sendJsonData($data,'HTTP/1.1 200 OK');
			break;
		case "PUT":
			break;
		case "DELETE":
			break;
		default:
	}
	//$pseudo=verifieToken($bdd);
	exit;
?>
