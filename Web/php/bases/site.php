<?php
	/*!
	*
	*	\file		site.php
	*	\author		Mathias CABIOCH-DELALANDE
	*	\date		08 juin 2018
	*
	*/
	/*!
	*	\brief Get the name of the website
	*		\param[in]		$bdd			The database communication object
	*		\return			Return the site name save in the database
	*/
	function get_site_name($bdd){
		require_once("bdd.php");

		$datas = $bdd->select("page_admin", "*");
		$datas = typeValue_array($datas);
		$name = get_in_array("site_name", $datas);

		return $name;
	}

	/*!
	*	\brief Function that verify if it's the asked page
	*		\param[in]		$page			The page associate to active
	*		\param[in]		$opt			An option variable to specify a page with a variable GET
	*		\return			Return an empty string or \b active
	*/
	function is_this_active($page, $opt=""){
		$paths = explode("/", $_SERVER["SCRIPT_FILENAME"]);

		for($i = 0; $i < sizeOf($paths); ++$i){
			$path = $paths[$i];

			if(strpos($path, ".") !== false){
				$paths = $path;
				break;
			}
		}

		if($paths !== $page){
			return "";
		}

		if($opt != ""){
			if(strpos($opt, "&") !== false){
				$opts = explode("&", $opt);
			} else {
				$opts[0] = $opt;
			}

			for($i = 0; $i < sizeOf($opts); ++$i){
				$opt = $opts[$i];
				$vals = explode("=", $opt);

				if(!isset($_GET[$vals[0]])){
					return "";
				} else if($_GET[$vals[0]] !== $vals[1]) {
					return "";
				}
			}

			return "active";
		}

		return "active";
	}
?>
