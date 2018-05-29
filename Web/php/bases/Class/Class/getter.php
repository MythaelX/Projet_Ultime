<?php

/****************************************************************/
/*																*/
/*			File : getter.php									*/
/*				Created by Mathias CABIOCH-DELALANDE			*/
/*					Last modification : 07/05/2018				*/
/*																*/
/*				Authorization : use only						*/
/*																*/
/****************************************************************/

	/* Define the necessary headers to be able to get the informations */
		header("Content-Type: text/plain; charset=utf-8");
		header("Cache-control: no-store, no-cache, must-revalidate");
		header("Pragma: no-cache");
	/*******************************************************************/

	$type = $_SERVER["REQUEST_METHOD"];							//Get the request type
	
	if(isset($_SERVER["PATH_INFO"])){
		$serverRequest = substr($_SERVER["PATH_INFO"], 1);			//Get the given arguments
		$serverRequest = explode("/", $serverRequest);				//Set an array with the arguments
	}
	
	if($type == "PUT"){
		parse_str(file_get_contents("php://input"), $_PUT);		//If PUT sended, crate a $_PUT array
	} else if($type == "DELETE"){
		$_DELETE = $_GET;										//If DELETE sended, create a $_DELETE array
	}
	
	/* Return the next ressource in the array or false */
	function nextRes(){
		if(isset($GLOBALS["serverRequest"])){
			return array_shift($GLOBALS["serverRequest"]);
		}
		
		return false;
	}
	
	/* Return the number of arguments in the array */
	function resNumber(){
		if(isset($GLOBALS["serverRequest"])){
			return sizeOf($GLOBALS["serverRequest"]);
		}
		
		return 0;
	}
?>
