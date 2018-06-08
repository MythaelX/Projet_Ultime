<div class="formulaire">
<h1>INSCRIPTION</h1>
<form  method="post" action="php/register.php" target="_self" enctype="multipart/form-data"  id="formulaireInscription">
  <div>
  	<label for="pseudo">Pseudo :</label>
  	<input type="text" name="pseudo" id="pseudo" />
  </div>
<div>
	<label for="pseudo">Mot de passe :</label>
	<input type="text" name="mdp" id="mdp" min="2" max="25"/>
</div>
<div >
	<label for="mdp">Retapez mot de passe :</label>
	<input type="text" name="mdpVerif" id="mdpVerif" />
</div>
<div >
	<label for="mdp">email :</label>
	<input type="email" name="email" id="email" />
</div>
<div>
	<img src="design/img/presentation.png" alt="icon avatar" id="imageAvatar">
	<input type="file" name="boutonAvatar" value="Avatar" id="boutonAvatar"/>
</div>
<div>
	<input type="submit" class="boutonvert" value="Inscription" id="boutonInscription"/>
</div>
</form>
</div>
