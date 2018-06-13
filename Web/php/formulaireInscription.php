<div id="formulaireInscription">
<h1>INSCRIPTION</h1>
<form  method="post" action="php/register.php" target="_self" enctype="multipart/form-data"  id="formulaireInscription">
  <div>
  	<label for="pseudo">Pseudo :</label>
  	<input type="text" name="pseudo" id="pseudo" />
  </div>
<div>
	<label for="pseudo">Mot de passe :</label>
	<input type="password" name="mdp" id="mdp" min="2" max="25"/>
</div>
<div >
	<label for="mdp">Retapez mot de passe :</label>
	<input type="password" name="mdpVerif" id="mdpVerif" />
</div>
<div >
	<label for="mdp">Email :</label>
	<input type="email" name="email" id="email" />
</div>
<div id="blockAvatar">
	<img src="design/img/avatardefaut.gif" alt="Icon avatar" id="imageAvatar">
  <div>
	  <input  type="file" name="boutonAvatar" value="Avatar" id="boutonAvatar" accept="image/*"/>
    <button id="boutonAvatar2">Choissez votre avatar</button>
  </div>
</div>
<div>
	<input type="submit" class="boutonvert" value="Inscription" id="boutonInscription"/>
</div>
</form>



</div>
