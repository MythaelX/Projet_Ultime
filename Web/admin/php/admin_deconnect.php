<?php
	session_start();
	
	require_once("../../php/bases/_functions.php");
	require_once("../../php/bases/errors.php");
	require_once("../../php/bases/bdd.php");
	require_once("../../php/bddConnect.inc");
	
	if(!deconnect_admin()){
		forbidden();
	}
	
	if(!is_admin_connected()){
		exit;
	} else {
		serverError();
	}
?>
