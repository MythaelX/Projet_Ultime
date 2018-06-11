<?php
require_once("bases/_functions.php");
require_once("bases/errors.php");
require_once("bases/bdd.php");
require_once("bddConnect.inc");

$pseudo=$_COOKIE['pseudo'];
$bdd = new Bdd("mysql", $BDD_HOST, $BDD_NAME, $BDD_USER, $BDD_PASS);
$data=$bdd->query("SELECT mail,password,avatar FROM utilisateurs WHERE pseudo='".$pseudo."'")[0];
$avatar=$data['avatar'];
$password=$data['password'];
echo "<script> var mdpActuelBDD='".$password."'</script>";
?>
<div>
<h1>Modifier le profil</h1>
<form  method="post" action="php/modifier.php" target="_self" enctype="multipart/form-data"  id="formulaireModification">
  <div>
    <img src="<?php echo $avatar;?>" alt="icon avatar" id="imageAvatar">
  	<input type="file" name="boutonAvatar" value="Avatar" id="boutonAvatar" accept="image/*"/>
  </div>
  <div>
  	<label for="pseudo">Pseudo :</label>
  	<input type="text" name="pseudo" id="pseudo" value="<?php echo $pseudo;?>" />
  </div>
<div>
	<label for="mot de passe">Votre Mot de passe :</label>
	<input type="password" name="mdpActuel" id="mdpActuel"/>
</div>
<div >
	<label for="mdp">Nouveau :</label>
	<input type="password" name="mdp" id="mdp"/>
</div>
<div>
	<label for="mdpVerif">Confirmer :</label>
	<input type="password" name="mdpVerif" id="mdpVerif"/>
</div>
<div>
  <button id="boutonAnnuler">Annuler</button>
	<input type="submit" class="boutonvert" value="Confirmer" id="boutonValider"/>
</div>
</form>
</div>
