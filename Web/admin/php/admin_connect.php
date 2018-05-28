<?php
	session_start();
	
	require_once("../../php/bases/_functions.php");
	require_once("../../php/bases/errors.php");
	require_once("../../php/bases/bdd.php");
	require_once("../../php/bddConnect.inc");
	
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	
	if(!isset($user) || !isset($pass)){
		unauthorized();
	}
	
	$pass = sha1($pass);
	
	$bdd = new Bdd("mysql", $BDD_HOST, $BDD_NAME, $BDD_USER, $BDD_PASS);
	
	print_all($bdd);
	
	$answer = $bdd->select("page_admin", "*");
	$answer = typeValue_array($answer);
	
	$bdd_user = get_in_array("admin_user", $answer);
	$bdd_pass = get_in_array("admin_password", $answer);
	
	if($user !== $bdd_user || $pass !== $bdd_pass){
		unauthorized();
	}
	
	if(connect_admin()){
		exit;
	} else {
		serverError();
	}
?>
