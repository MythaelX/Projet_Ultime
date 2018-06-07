<?php

/****************************************************************/
/*																*/
/*			File : _functions.php								*/
/*				Created by Mathias CABIOCH-DELALANDE			*/
/*					Last modification : 08/05/2018				*/
/*																*/
/*				Authorization : use only						*/
/*																*/
/****************************************************************/

	/* Function that can print some of all types of variables like string, object or array */
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
	
	/* Function that replace something by something else in a string or an array */
	function replace_all($from, $to, $in){
		if(gettype($in) === "string"){
			return implode($to, explode($from, $in));
		} else if(gettype($in) === "array"){
			foreach($in as $key => $val){
				$out[$key] = replace_all($from, $to, $val);
			}
			
			return $out;
		}
	}
	
	/* Function that return all the content of a folder */
	function get_all_in($folder){
		$index = 0;
		$files = array();
		
		if(!is_dir($folder)){
			error_log("The given path \"" . $folder . "\" is not correct");
			return $files;
		}
		
		$dir = opendir($folder);
		
		while(($file = readdir($dir)) !== false){
			$files[$index++] = $file;
		}
		closedir($dir);
		
		return $files;
	}
	
	/* Function that return all the files of a folder */
	function get_all_files_in($folder){
		$index = 0;
		$temp = get_all_in($folder);
		
		for($i = 0; $i < sizeOf($temp); ++$i){
			if(!is_dir($folder . $temp[$i])){
				$files[$index++] = $temp[$i];
			}
		}
		
		return $files;
	}
	
	/* Function that return all the folders of a folder */
	function get_all_folders_in($folder){
		$index = 0;
		$temp = get_all_in($folder);
		
		for($i = 0; $i < sizeOf($temp); ++$i){
			if(is_dir($folder . $temp[$i])){
				$files[$index++] = $temp[$i];
			}
		}
		
		return $files;
	}
	
	/* Function that delete the specified index of the map array */
	function deleteMapIndex($in, $index){
		if(gettype($in) !== "array"){
			return $in;
		}
		
		$out = array();
		
		foreach($in as $key => $value){
			if($key !== $index){
				$out[$key] = $value;
			}
		}
		
		return $out;
	}
	
	/* Function that delete the specified index of the array */
	function deleteIndex($in, $index){
		if(gettype($in) !== "array"){
			return $in;
		}
		
		$out = array();
		$i = 0;
		$size = sizeOf($in);
		
		foreach($in as $key => $value){
			if($i !== $index){
				$out[$key] = $value;
			}
			
			++$i;
		}
		
		return $out;
	}
	
	/* Function that delete the first index of an array */
	function deleteFirst($in){
		return deleteIndex($in, 0);
	}
	
	/* Function that delete the last index of an array */
	function deleteLast($in){
		return deleteIndex($in, sizeOf($in)-1);
	}
	
	/* Function that verify if it's the asked page */
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
	
	/* Function to create a complecated uniqid */
	function createId(){
		return md5(uniqid(rand(), true));
	}
	
	/* Function that delete a given file */
	function deleteFile($path){
		if(file_exists($path)){
			if(!is_dir($path)){
				if(!unlink($path)){
					error_log("Impossible to delete the file '" . $path . "'. Verify your rights in the folder");
				}
			} else {
				if(!rmdir($path)){
					error_log("Impossible to delete the folder '" . $path . "'. Verify if the folder is empty or your rights on the folder");
				}
			}
		} else {
			error_log("Impossible to delete the file '" . $path . "'. The file doesn't exists, verify the path");
		}
	}
	
	/* Function that save a file in the given directory */
	function saveFileTo($FILE, $folder, $name=""){
		if(!is_dir($folder)){
			error_log("The given folder '" . $folder . "' is not a useable directory");
			return false;
		}
		
		switch($FILE["error"]){
			case UPLOAD_ERR_NO_FILE:
				error_log("The file '" . $FILE["name"] . "' is missing");
				return false;
				break;
			case UPLOAD_ERR_INI_SIZE:
				error_log("The file '" . $FILE["name"] . "' is too big for PHP : " . $FILE["size"] . " byts");
				return false;
				break;
			case UPLOAD_ERR_FORM_SIZE:
				error_log("The file '" . $FILE["name"] . "' is too big as said by the sender form : " . $FILE["size"] . "byts");
				return false;
				break;
			case UPLOAD_ERR_PARTIAL:
				error_log("The file '" . $FILE["name"] . "' has been partially transfered");
				return false;
				break;
		}
		
		if($name === ""){
			$name = $FILE["name"];
			$name = createId() . "_" . $name;
		}
		
		$name = replace_all(" ", "_", $name);
		$name = replace_all("-", "_", $name);
		
		if(!move_uploaded_file($FILE["tmp_name"], $folder . "/" . $name)){
			error_log("The file '" . $FILE["name"] . "' can't be moved to '" . $folder . "'");
		}

		return $name;
	}
	
	/* Convert a date JJ/MM/AAAA to AAAA-MM-JJ */
	function dateSql($date){
		$datas = explode("/", $date);
		
		if(sizeOf($datas) == 3){
			$date = $datas[2] . "-" . $datas[1] . "-" . $datas[0];
		}
		
		return $date;
	}
	
	/* Convert a date AAAA-MM-JJ to JJ/MM/AAAA */
	function sqlDate($date){
		$datas = explode("-", $date);
		
		if(sizeOf($datas) == 3){
			$date = $datas[2] . "/" . $datas[1] . "/" . $datas[0];
		}
		
		return $date;
	}
	
	/* Create a directory to the given path */
	function createDir($path, $recurs = true){
		try {
			mkdir($path, 0777, $recurs);
		} catch(Exception $e){
			error_log("Error : Impossible to create the folder(s) -> " . $e->getMessage());
		}
	}
	
	/* Push in a zip ressource from given path */
	function pushZip($origin, $from, $zip){
		$contents = get_all_in($from);
		$path = replace_all($origin, "", $from);
		
		foreach($contents as $content){
			if($content != "." && $content != ".."){
				if(is_dir($from . $content)){
					if($content !== "admin"){
						pushZip($origin, $from . $content . "/", $zip);
					}
				} else {
					if($origin === $from){
						$zip->addFile($from . $content, $path . $content);
					} else {
						$zip->addFile($from . $content, $path . $content);
					}
				}
			}
		}
	}
	
	/* Create a zip folder from given to given */
	function createZip($from, $to, $name=""){
		if(!is_dir($from)){
			error_log("Your path \"" . $from . "\" is not a folder");
			exit;
		}
		if(!is_dir($to)){
			error_log("Your path \"" . $to . "\" is not a folder");
			exit;
		}
		
		if($name === ""){
			$name = date("Ymd_His");
		}
		if(strpos(".zip", $name) === false){
			$name .= ".zip";
		}
		
		$path = $to . $name;
		$zip = new ZipArchive();
		if($zip->open($path, ZipArchive::CREATE) !== true){
			error_log("Impossible to open the archive \"" . $path . "\", please verify your rights on the destination path");
			exit;
		}
		
		pushZip($from, $from, $zip);
		
		$zip->close();
	}
	
	/* Convert a type/value array in an index/value array */
	function typeValue_array($in){
		$out = array();
		
		if(!isset($in) || gettype($in) !== "array"){
			return $out;
		}
		
		foreach($in as $k => $v){
			if(gettype($v) === "array"){
				$out[$k] = typeValue_array($v);
			} else {
				$out[$in["type"]] = $in["value"];
			}
		}
		
		return $out;
	}
	
	/* Return the given value in the array if it exists */
	function get_in_array($index, $array){
		if(!isset($index) || !isset($array)){
			return false;
		}
		
		if(gettype($array) !== "array"){
			return false;
		}
		
		if(!isset($array[$index])){
			foreach($array as $a){
				if(gettype($a) === "array"){
					$ans = get_in_array($index, $a);
					
					if($ans !== false){
						return $ans;
					}
				}
			}
			
			return false;
		}
		
		return $array[$index];
	}
	
	/* Verify if an index exists in an array with a * possible */
	function it_exists($index, $array){
		if(!isset($index) || !isset($array)){
			return false;
		}
		
		if(gettype($array) !== "array"){
			return false;
		}
		
		if(strpos($index, "*") !== false){
			$index = explode("*", $index)[0];
		}
		
		foreach($array as $key => $val){
			if(strpos($key, $index) !== false){
				return $key;
			}
			
			if(gettype($val) === "array"){
				$ans = it_exists($index, $array);
				
				if($ans !== false){
					return $ans;
				}
			}
		}
		
		return false;
	}

	/* Admin management */
		/* Refresh a timestamp when the admin do an action */
		function admin_do_something(){
			if(!isset($_SESSION)){
				error_log("Please activate the session variables");
				return false;
			}
		
			$_SESSION["admin_last_timestamp"] = time();
		
			return true;
		}
	
		/* Connect the admin */
		function connect_admin(){
			if(!isset($_SESSION)){
				error_log("Please activate the session variables");
				return false;
			}
		
			$_SESSION["admin_connected"] = true;
			$_SESSION["admin_connection_timestamp"] = time();
		
			return admin_do_something();
		}
	
		/* Deconnect the admin */
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
	
		/* Verify if the admin is connected */
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
	/********************/
	
	/* Get the name of the website */
	function get_site_name($bdd){
		require_once("bdd.php");
		
		$datas = $bdd->select("page_admin", "*");
		$datas = typeValue_array($datas);
		$name = get_in_array("site_name", $datas);
		
		return $name;
	}
	
	/*! \brief Put an array to the error_log as a string */
	function error_log_array($array){
		$out = "";
		
		foreach($array as $k => $v){
			if(gettype($v) === "array"){
				error_log_array($v);
			} else {
				$out .= "['" . $k . "'] = '" . $v . "'\n";
			}
		}

		error_log($out);
	}
?>
