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
			error_log(implode(" _ ", $_SERVER));
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

	function creationPartie($bdd,$tabQuestions){ //insertion d'une partie dans la bdd
		$difficulte=$_POST['difficulte'];
		$date=date("Y-m-d");
		$bdd->insert("partie", "NULL,'".$date."' , '1', ".$difficulte."");
		$id_partie=getId();
		$nbQuestions=$bdd->query("SELECT nb_questions FROM difficulte WHERE id_difficulte=1")[0]['nb_questions'];
		for ($i=0; $i <$nbQuestions; $i++) {
			$id_question=$tabQuestions[$i]['id_question'];
			$bdd->insert("contient", "'".$id_question."','".$id_partie."'");
		}
	}
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
			}else if($requestRessource == 'nomDifficulte'){
				$id_partie=$_GET['id_partie'];
				$data=$bdd->query("SELECT d.nom_difficulte FROM partie AS p,difficulte As d Where p.id_partie=".$id_partie." And d.id_difficulte=p.id_difficulte");
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
