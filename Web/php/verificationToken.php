<?php
/*!
*	\file	verificationToken
*	\author	EVEN CLEMENT
*	\date	12/06/2018
*/
require_once("bases/_functions.php");
require_once("bases/errors.php");
require_once("bases/bdd.php");
require_once("bddConnect.inc");
require_once("fonctions.php");

$bdd = new Bdd("mysql", $BDD_HOST, $BDD_NAME, $BDD_USER, $BDD_PASS);
if(!verifieToken($bdd)){
  if(strpos($_SERVER['PHP_SELF'], "index.php")==false && strpos($_SERVER['PHP_SELF'],"palmares.php")==false && strpos($_SERVER['PHP_SELF'], "inscription.php")==false  && strpos($_SERVER['PHP_SELF'], "connexion.php")==false){
    header('Location: ./index.php');
  }
}else{
  if(strpos($_SERVER['PHP_SELF'], "inscription.php") || strpos($_SERVER['PHP_SELF'], "connexion.php") || (strpos($_SERVER['PHP_SELF'], "jeu.php")==true && !isset($_POST['choix']))){
    header('Location: ./index.php');
  }
}
?>
