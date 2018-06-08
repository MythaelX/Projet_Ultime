<?php
	/*!
	*
	*	\file		_functions.php
	*	\author		Mathias CABIOCH-DELALANDE
	*	\date		07 juin 2018
	*
	*/
	/*!
	*	\brief Function that can print some of all types of variables like string, object or array
	*		\param[in]		$in				The variable to print
	*		\return			echo &lt;pre&gt;, the variable and &lt;/pre&gt;
	*/
	function print_all($in){
		echo "<pre>";

		if(gettype($in) === "array"){
			print_r($in);
		} else if(gettype($in) === "object" || gettype($in) === "ressource"){
			var_dump($in);
		} else {
			echo $in;
		}

		echo "</pre>";
	}

	/*!
	*	\brief Function to create a complecated uniqid
	*		\return			Return a unique id with md5(), uniqid() and rand()
	*/
	function createId(){
		return md5(uniqid(rand(), true));
	}

	require_once("arrays.php");
	require_once("admin.php");
	require_once("zip.php");
	require_once("files.php");
	require_once("dates.php");
	require_once("site.php");
?>
