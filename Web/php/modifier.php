<?php
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

if($_FILES['boutonAvatar']['name']!=""){ //si l'utilisateurs a modifier son avatar
  $avatar=saveFileTo($_FILES['boutonAvatar'],"../files/img");
  $bdd->query("UPDATE utilisateurs SET pseudo='".$pseudoModifier."',password='".$mdp."',avatar='".$avatar."' WHERE utilisateurs.pseudo='".$pseudo."'");
}else{

  $bdd->query("UPDATE utilisateurs SET pseudo='".$pseudoModifier."',password='".$mdp."' WHERE utilisateurs.pseudo='".$pseudo."'");
}

header('Location: ../index.php');
?>