<?php
	/*!
	*
	*	\file		admin.php
	*	\author		Mathias CABIOCH-DELALANDE
	*	\date		08 juin 2018
	*
	*/
	/*!
	*	\brief Refresh a timestamp when the admin do an action
	*		\return			\b true or \b false
	*/
	function admin_do_something(){
		if(!isset($_SESSION)){
			error_log("Please activate the session variables");
			return false;
		}

		$_SESSION["admin_last_timestamp"] = time();

		return true;
	}

	/*!
	*	\brief Connect the admin
	*		\return			\b false or admin_do_something()
	*/
	function connect_admin(){
		if(!isset($_SESSION)){
			error_log("Please activate the session variables");
			return false;
		}

		$_SESSION["admin_connected"] = true;
		$_SESSION["admin_connection_timestamp"] = time();

		return admin_do_something();
	}

	/*!
	*	\brief Deconnect the admin
	*		\return			\b true or \b false
	*/
	function deconnect_admin(){
		if(!isset($_SESSION)){
			error_log("Please activate the session variables");
			return false;
		}

		unset($_SESSION["admin_connected"]);
		unset($_SESSION["admin_connection_timestamp"]);
		unset($_SESSION["admin_last_timestamp"]);

		return true;
	}

	/*!
	*	\brief Verify if the admin is connected
	*		\return			\b true or \b false
	*/
	function is_admin_connected(){
		if(!isset($_SESSION)){
			error_log("Please activate the session variables");
			return false;
		}

		if(!isset($_SESSION["admin_connected"]) || !isset($_SESSION["admin_connection_timestamp"]) || !isset($_SESSION["admin_last_timestamp"])){
			return false;
		}

		if($_SESSION["admin_last_timestamp"] - $_SESSION["admin_connection_timestamp"] > 15*60){
			deconnect_admin();
			return false;
		}

		return true;
	}
?>
