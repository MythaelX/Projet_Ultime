<?php
require_once("bases/_functions.php");
require_once("bases/errors.php");
require_once("bases/bdd.php");
require_once("bddConnect.inc");
require_once("fonctions.php");

$bdd = new Bdd("mysql", $BDD_HOST, $BDD_NAME, $BDD_USER, $BDD_PASS);
if(!verifieToken($bdd)){
  if($_SERVER['PHP_SELF']!="/Web/index.php" && $_SERVER['PHP_SELF']!="/Web/palmares.php" && $_SERVER['PHP_SELF']!="/Web/inscription.php" && $_SERVER['PHP_SELF']!="/Web/connexion.php"){
    header('Location: ./index.php');
  }
}else{
  if($_SERVER['PHP_SELF']=="/Web/inscription.php" || $_SERVER['PHP_SELF']=="/Web/connexion.php"){
    header('Location: ./index.php');
  }
}
?>
