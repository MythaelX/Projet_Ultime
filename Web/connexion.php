<?php
	require_once("php/bases/class-Head_Creator.php");

	require_once("php/bases/_functions.php");
	require_once("php/bases/bdd.php");
	require_once("php/bddConnect.inc");

	$bdd = new Bdd("mysql", $BDD_HOST, $BDD_NAME, $BDD_USER, $BDD_PASS);
	$head = new Head_Creator("./");

	$head->head_title(get_site_name($bdd));
	$head->head_charset("utf-8");

	/* Styles du site */
		$head->head_style("design/css/home_made.less");
		$head->head_style("design/css/style.less");
	/******************/

	/* Scripts de base du site */
		$head->head_script("js/bases/_script.js");
		$head->head_script("js/bases/ajax.js");
		$head->head_script("js/bases/less.min.js");
		$head->head_script("js/bases/js.cookie.js");
	/***************************/

	/* Scripts du site */

	/*******************/

	/* Scripts personnels */

	/***************************/

	$head->show();	//Affichage du code de l'en-tête
?>
	<body id="body">
		<header><?php require_once("php/header.temp.inc"); ?></header>
		<nav><?php require_once("php/nav.temp.inc"); ?></nav>
		<main>
			<?php require_once("php/formulaire.php") ?>
			<div>
		</main>
		<footer><?php require_once("php/footer.temp.inc"); ?></footer>
	</div>
	</body>
</html>
