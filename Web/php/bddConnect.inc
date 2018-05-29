<?php
	echo $_SERVER["REMOTE_ADDR"];
	if($_SERVER["REMOTE_ADDR"] == "127.0.0.1"){
		$BDD_HOST = "localhost:3306";
		$BDD_NAME = "";
		$BDD_USER = "mathias";
		$BDD_PASS = "chipie";
	} else {
		$BDD_HOST = "";
		$BDD_NAME = "";
		$BDD_USER = "";
		$BDD_PASS = "";
	}
?>
