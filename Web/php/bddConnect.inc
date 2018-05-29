<?php
	echo $_SERVER["REMOTE_ADDR"];
	if($_SERVER["REMOTE_ADDR"] == "127.0.0.1"){
		$BDD_HOST = "localhost:3306";
		$BDD_NAME = "hotdogquiz";
		$BDD_USER = "hotdogquiz";
		$BDD_PASS = "hotdogquiz";
	} else {
		$BDD_HOST = "hotdogquiz.fr";
		$BDD_NAME = "hotdogquiz";
		$BDD_USER = "hotdogquiz";
		$BDD_PASS = "hotdogquiz";
	}
?>
