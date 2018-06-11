<?php
require_once("bases/_functions.php");
require_once("bases/errors.php");
require_once("bases/bdd.php");
require_once("bddConnect.inc");
require_once("fonctions.php");

$bdd = new Bdd("mysql", $BDD_HOST, $BDD_NAME, $BDD_USER, $BDD_PASS);
if(!verifieToken($bdd)){
  if(strpos($_SERVER['PHP_SELF'], "index.php")==false && strpos($_SERVER['PHP_SELF'],"palmares.php")==false && strpos($_SERVER['PHP_SELF'], "inscription.php")==false  && strpos($_SERVER['PHP_SELF'], "connexion.php")==false ){
    header('Location: ./index.php');
  }
}else{
  if(strpos($_SERVER['PHP_SELF'], "inscription.php") || strpos($_SERVER['PHP_SELF'], "connexion.php"){
    header('Location: ./index.php');
  }
}
?>
