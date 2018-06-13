<?php
/*!
*	\file	modifier
*	\author	EVEN CLEMENT
*	\date	12/06/2018
*/
require_once("bases/_functions.php");
require_once("bases/getter.php");
require_once("bases/errors.php");
require_once("bases/bdd.php");
require_once("bddConnect.inc");

$bdd = new Bdd("mysql", $BDD_HOST, $BDD_NAME, $BDD_USER, $BDD_PASS);
$pseudoModifier = $_POST['pseudo'];
$pseudo=$_COOKIE['pseudo'];
setcookie('pseudo', $pseudoModifier, false,"/");

if($_POST['mdp']!=""){
  $mdp=$_POST['mdp'];
}else{
  $mdp=$_POST['mdpActuel'];
}

if(isset($_FILES['boutonAvatar'])){
  $avatar=saveFileTo($_FILES['boutonAvatar'],"../files/img");
  $bdd->DEBUG(true);
  $chemin=$bdd->select("utilisateurs","avatar","WHERE utilisateurs.pseudo=".$pseudo."")[0]['avatar'];
  if($chemin!="design/img/avatardefaut.gif"){
    deleteFile("../".$chemin);
  }
  $bdd->query("UPDATE utilisateurs SET pseudo='".$pseudoModifier."',password=SHA1('".$mdp."'),avatar='files/img/".$avatar."' WHERE utilisateurs.pseudo='".$pseudo."'");
}else{
  $bdd->query("UPDATE utilisateurs SET pseudo='".$pseudoModifier."',password=SHA1('".$mdp."') WHERE utilisateurs.pseudo='".$pseudo."'");
  $avatar=true;
}
if($avatar==false){
  header('Location: ../modifier.php');
}else{
  header('Location: ../index.php');
}
?>
