<?php
	/*!
	*
	*	\file		getter.php
	*	\author		Mathias CABIOCH-DELALANDE
	*	\date		07 juin 2018
	*	\details	Definition of the necessary headers to be able to get the informations\n
	*				Get the request type\n
	*				Get the given arguments\n
	*				Set an array with the arguments\n
	*				If PUT sended, create a $_PUT array\n
	*				If DELETE sended, create a $_DELETE array\n
	*
	*/
	header("Content-Type: text/plain; charset=utf-8");
	header("Cache-control: no-store, no-cache, must-revalidate");
	header("Pragma: no-cache");

	/*! \brief Get the server method type */
	$type = $_SERVER["REQUEST_METHOD"];

	if(isset($_SERVER["PATH_INFO"])){
		$serverRequest = substr($_SERVER["PATH_INFO"], 1);
		$serverRequest = explode("/", $serverRequest);
	}

	if($type == "PUT"){
		parse_str(file_get_contents("php://input"), $_PUT);
	} else if($type == "DELETE"){
		$_DELETE = $_GET;
	}

	/*!
	* \fn nextRes()
	* \fn nextRes()
	* \brief Return the next ressource in the array or false
	*/
	function nextRes(){
		if(isset($GLOBALS["serverRequest"])){
			return array_shift($GLOBALS["serverRequest"]);
		}

		return false;
	}

	/*!
	* \fn resNumber()
	* \brief Return the number of arguments in the array
	*/
	function resNumber(){
		if(isset($GLOBALS["serverRequest"])){
			return sizeOf($GLOBALS["serverRequest"]);
		}

		return 0;
	}
?>
