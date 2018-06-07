<?php
	/*!
	*
	*	\file		getter.php
	*	\author		Mathias CABIOCH-DELALANDE
	*	\date		07 juin 2018
	*	\details	Definition of the necessary headers to be able to get the informations
	*				Get the request type
	*				Get the given arguments
	*				Set an array with the arguments
	*				If PUT sended, create a $_PUT array
	*				If DELETE sended, create a $_DELETE array
	*
	*/
	header("Content-Type: text/plain; charset=utf-8");
	header("Cache-control: no-store, no-cache, must-revalidate");
	header("Pragma: no-cache");

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

	/* \brief Return the next ressource in the array or false */
	function nextRes(){
		if(isset($GLOBALS["serverRequest"])){
			return array_shift($GLOBALS["serverRequest"]);
		}

		return false;
	}

	/* \brief Return the number of arguments in the array */
	function resNumber(){
		if(isset($GLOBALS["serverRequest"])){
			return sizeOf($GLOBALS["serverRequest"]);
		}

		return 0;
	}
?>
