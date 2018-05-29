<?php

/****************************************************************/
/*																*/
/*			File : errors.php									*/
/*				Created by Mathias CABIOCH-DELALANDE			*/
/*					Last modification : 21/04/2018				*/
/*																*/
/*				Authorization : use only						*/
/*																*/
/****************************************************************/

	/* Renvoie une erreur et arrête le script */
	function setError($error, $exit){
		header('HTTP/1.1 ' . $error);
		
		if($exit === true){
			exit;
		}
	}
	
	/* Mauvaise requête */
	function badRequest($exit = true){
		setError("400", $exit);
	}
	
	/* Non authorisé */
	function unauthorized($exit = true){
		setError("401", $exit);
	}
	
	/* Accès interdit */
	function forbidden($exit = true){
		setError("403", $exit);
	}
	
	/* Page non trouvé */
	function notFound($exit = true){
		setError("404", $exit);
	}
	
	/* Je suis une théière */
	function laugth($exit = true){
		setError("418 I'm a teapot", $exit);
	}
	
	/* Erreur du serveur */
	function serverError($exit = true){
		setError("500", $exit);
	}
	
	/* Demande non implémentée */
	function notImplemented($exit = true){
		setError("501", $exit);
	}
	
	/* Mauvais chemin */
	function badGateway($exit = true){
		setError("502", $exit);
	}
	
	/* Service indisponible */
	function unavailable($exit = true){
		setError("503", $exit);
	}
	
	/* Erreur */
	function error($exit = true){
		setError("520", $exit);
	}
?>
