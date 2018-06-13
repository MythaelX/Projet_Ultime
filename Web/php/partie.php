<script>
 var id_partie= <?php if(isset($_POST['choix'])){echo $_POST['choix'];}?>;
</script>
<div id="styleJeu">
<div id="blocChrono">
  <img src="design/img/chronovide.png" alt="chronometre">
  <div id="chrono"><div></div></div>
  <div id="rondChrono"></div>
</div>

<div id="jeu">
<h1 id="difficulte"></h1>
<h2 id="question"></h2>
<h3 id="proposition"></h3>
<div id="blockBoutons">
<button id="bouton1"></button>
<button id="bouton2"></button>
<button id="bouton3">Les deux</button>
</div>
</div>

<div id="blocScore">
  <h1>PARTIE TERMINÉE</h1>
  <h2 id="score"></h2>
  <h2 id="temps"></h2>
  <a href="./index.php" target="_self"><button>Accueil</button></a>
  <a href="./palmares.php" target="_self"><button>Palmares</button></a>
</div>


</div>
