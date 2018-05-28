<?php
	require_once("../php/bases/class-Head_Creator.php");
	
	require_once("../php/bases/_functions.php");
	require_once("../php/bases/bdd.php");
	require_once("../php/bddConnect.inc");
	
	$bdd = new Bdd("mysql", $BDD_HOST, $BDD_NAME, $BDD_USER, $BDD_PASS);
	$head = new Head_Creator("../");
	
	$head->head_title(get_site_name($bdd) . " - Administration");
	$head->head_charset("utf-8");
	
	/* Styles du site */
		$head->head_style("./design/css/home_made.less");
		$head->head_style("./admin/design/css/admin_style.less");
	/******************/
	
	/* Scripts de base du site */
		$head->head_script("./js/bases/_script.js");
		$head->head_script("./js/bases/ajax.js");
		$head->head_script("./js/bases/less.min.js");
		$head->head_script("./js/bases/js.cookie.js");
	/***************************/
	
	/* Scripts du site */
		$head->head_script("./admin/js/admin_script.js");
	/*******************/
	
	/* Scripts personnels */
		
	/***************************/
	
	$head->show();	//Affichage du code de l'en-tête
?>
	<body id="body">
		<header>
			<a href="./?page=admin" target="_self" onclick="changeTab(event);"><h1><?php echo get_site_name($bdd); ?> - Administration</h1></a>
			
			<?php if(is_admin_connected()){ ?>
				<button id="logout" onclick="logoutAdmin();"></button>
			<?php } ?>
		</header>
		<nav>
			<?php if(is_admin_connected()){ ?>
				<ul>
					<li id="admin_tab" class="<?php echo is_this_active("index.php", "page=admin"); ?>"><a href="./?page=admin" target="_self" onclick="changeTab(event);">Général</a></li>
					<li class="<?php echo is_this_active("index.php", "page=bdd"); ?>"><a href="./?page=bdd" target="_self" onclick="changeTab(event);">Bases de données</a></li>
					<li class="<?php echo is_this_active("index.php", "page=files"); ?>"><a href="./?page=files" target="_self" onclick="changeTab(event);">Fichiers</a></li>
					<li class="<?php echo is_this_active("index.php", "page=gallery"); ?>"><a href="./?page=gallery" target="_self" onclick="changeTab(event);">Galerie</a></li>
					<li class="<?php echo is_this_active("index.php", "page=backups"); ?>"><a href="./?page=backups" target="_self" onclick="changeTab(event);">Sauvegardes</a></li>
				</ul>
			<?php } ?>
		</nav>
		<div id="connexion">
			<?php
				if(!is_admin_connected()){
					?>
					<div>
						<h2>Connexion à l'interface d'administration</h2>
						<div>
							<div>
								<label for="user">Nom d'utilisateur : </label>
								<input type="text" name="user" id="user" required />
							</div>
							<div>
								<label for="pass">Mot de passe : </label>
								<input type="password" name="pass" id="pass" required />
							</div>
						</div>
						<br />
						<button class="btn btn-info" onclick="connectAdmin();">Connexion</button>
					</div>
					<?php
				}
			?>
		</div>
		<main style="display: none;"></main>
		<footer>
			<p class="copyright">2018 - Copyright Mathias Cabioch-Delalande</p>
		</footer>
	</body>
</html>
<?php
	if(is_admin_connected()){
		if(isset($_SESSION["page"])){
			switch($_SESSION["page"]){
				case "gallery":
					echo "<script>setTimeout(function(){ reloadGallery(); }, 500);</script>";
					unset($_SESSION["page"]);
					break;
				case "files":
					echo "<script>setTimeout(function(){ reloadFiles('" . $_SESSION["path"] . "'); }, 500);</script>";
					unset($_SESSION["page"]);
					unset($_SESSION["path"]);
					break;
				case "bdd":
					echo '<script>setTimeout(function(){ reloadBdd("' . $_SESSION["table"] . '"); setTimeout(function(){ $("#tables_selection").value = "' . $_SESSION["table"] . '"; chooseDatabase(); }, 500); }, 500);</script>';
					unset($_SESSION["page"]);
					unset($_SESSION["table"]);
					break;
			}
		}
	}
?>
