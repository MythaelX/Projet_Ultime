<?php
/*!
*	\file	register
*	\author	EVEN CLEMENT
*	\date	12/06/2018
*/
require_once("bases/_functions.php");
require_once("bases/getter.php");
require_once("bases/errors.php");
require_once("bases/bdd.php");
require_once("bddConnect.inc");

$bdd = new Bdd("mysql", $BDD_HOST, $BDD_NAME, $BDD_USER, $BDD_PASS);
$email=$_POST['email'];
$pseudo = $_POST['pseudo'];
$mdp = $_POST['mdp'];
$avatar=saveFileTo($_FILES['boutonAvatar'],"../files/img");
if($avatar != false){
  $bdd->insert('utilisateurs', "'".$email."','".$pseudo."',SHA1('".$mdp."'),'files/img/".$avatar."',' '");
  header('Location: ../inscription.php');
}else{
  $bdd->insert('utilisateurs', "'".$email."','".$pseudo."',SHA1('".$mdp."'),'design/img/avatardefaut.png',' '");
}
header('Location: ../index.php');

?>
