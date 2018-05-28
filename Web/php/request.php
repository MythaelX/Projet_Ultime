<?php
	require_once("bases/_functions.php");
	require_once("bases/getter.php");
	require_once("bases/errors.php");
	require_once("bases/bdd.php");
	require_once("bddConnect.php");
	
	/* Récupération de la prochaine ressource */
	$res = nextRes();
	
	/* Action selon le type d'envoie */
	switch($type){
		case "POST":
			break;
		case "GET":
			break;
		case "PUT":
			break;
		case "DELETE":
			break;
		default:
			
	}
	
	exit;
?>
