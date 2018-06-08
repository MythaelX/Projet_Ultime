<?php
require_once("bases/_functions.php");
require_once("bases/errors.php");
require_once("bases/bdd.php");
require_once("bddConnect.inc");

echo "\n\n:: Data received via POST ::\n\n";
print_r($_POST);
$bdd = new Bdd("mysql", $BDD_HOST, $BDD_NAME, $BDD_USER, $BDD_PASS);
 ?>
 <script>
 var id_partie= <?php echo $_POST['choix']?>;
 </script>
<div>chrono</div>
<h1 id="difficulte"></h1>
<h2>"la question en php"</h2>
<h3 id="proposition">"la proposition js"</h3>
<button id="bouton1"></button>
<button id="bouton2"></button>
<button id="bouton3">Les deux</button>
