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
	*		\return			echo <pre>, the variable and </pre>
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
	*	\brief Function that replace something by something else in a string or an array
	*		\param[in]		$from			The string to replace
	*		\param[in]		$to				The string for replacement
	*		\param[in]		$in				The string in which to do the replacement
	*		\return			Return the replaced string or array
	*/
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

	/*!
	*	\brief Function that return all the content of a folder
	*		\param[in]		$folder			The folder to read
	*		\return			Return an array containing the folder's contents list
	*/
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

	/*!
	*	\brief Function that return all the files of a folder
	*		\param[in]		$folder			The folder to read
	*		\return			Return the folder's files list
	*/
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

	/*!
	*	\brief Function that return all the folders of a folder
	*		\param[in]		$folder			
	*		\return			Return the folder's folders list
	*/
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

	/*!
	*	\brief Function that delete the specified index of the map array
	*		\param[in]		$in				The map array
	*		\param[in]		$index			The index to delete
	*		\return			Return the map array without the given index
	*/
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

	/*!
	*	\brief Function that delete the specified index of the array
	*		\param[in]		$in				The array
	*		\param[in]		$index			The index to delete
	*		\return			Return the array without the given index
	*/
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

	/*!
	*	\brief Function that delete the first index of an array
	*		\param[in]		$in				The array
	*		\return			Return the array without the first index
	*/
	function deleteFirst($in){
		return deleteIndex($in, 0);
	}

	/*!
	*	\brief Function that delete the last index of an array
	*		\param[in]		$in				The array
	*		\return			Return the array without the last index
	*/
	function deleteLast($in){
		return deleteIndex($in, sizeOf($in)-1);
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

	/*!
	*	\brief Function to create a complecated uniqid
	*		\return			Return a unique id with md5(), uniqid() and rand()
	*/
	function createId(){
		return md5(uniqid(rand(), true));
	}

	/*!
	*	\brief Function that delete a given file
	*		\param[in]		$path			The path pf the file
	*		\return			Return the errors as an error_log
	*/
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

	/*!
	*	\brief Function that save a file in the given directory
	*		\param[in]		$FILE			The $_FILE array
	*		\param[in]		$folder			The folder to save the file
	*		\param[in]		$name			An optional choosen name for the file
	*		\return			Return \b false or the file \b name
	*/
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

	/*!
	*	\brief Convert a date DD/MM/YYYY to YYYY-MM-DD
	*		\param[in]		$date			The date to convert
	*		\return			Return the SQL shape of the date
	*/
	function dateSql($date){
		$datas = explode("/", $date);

		if(sizeOf($datas) == 3){
			$date = $datas[2] . "-" . $datas[1] . "-" . $datas[0];
		}

		return $date;
	}

	/*!
	*	\brief Convert a date YYYY-MM-DD to DD/MM/YYYY
	*		\param[in]		$date			The date to convert
	*		\return			Return the FR shape of the date
	*/
	function sqlDate($date){
		$datas = explode("-", $date);

		if(sizeOf($datas) == 3){
			$date = $datas[2] . "/" . $datas[1] . "/" . $datas[0];
		}

		return $date;
	}

	/*!
	*	\brief Create a directory to the given path
	*		\param[in]		$path			The path to the directory/ies, that contains the directory/ies
	*		\param[in]		$recurs			True by default, set if it create by recursion
	*		\return			Create the directory or print an error_log
	*/
	function createDir($path, $recurs = true){
		try {
			mkdir($path, 0777, $recurs);
		} catch(Exception $e){
			error_log("Error : Impossible to create the folder(s) -> " . $e->getMessage());
		}
	}

	/*!
	*	\brief Push in a zip ressource from given path
	*		\param[in]		$origin			The origin of the search
	*		\param[in]		$from			The folder from the search
	*		\param[in]		$zip			The zip file
	*/
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

	/*!
	*	\brief Create a zip folder from given to given
	*		\param[in]		$from			The directory for the content to zip
	*		\param[in]		$to				The directory to save the zip
	*		\param[in]		$name			The name of the zip file, by default : YYYYMMDD_HHMMSS
	*		\return			Create the zip or print an error_log
	*/
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

	/*!
	*	\brief Convert a type/value array in an index/value array
	*		\param[in]		$in				The type/value array
	*		\return			Return an index/value array
	*/
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

	/*!
	*	\brief Return the given value in the array if it exists
	*		\param[in]		$index			The index to get
	*		\param[in]		$array			The array to search the index
	*		\return			Return \b false or the value
	*/
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

	/*!
	*	\brief Verify if an index exists in an array with a * possible
	*		\param[in]		$index			The index to verify, it allow the * to search as regex
	*		\param[in]		$array			The array in which to search
	*		\return			Return \b false or the key
	*/
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
	/********************/

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
	*	\brief Put an array to the error_log as a string
	*		\param[in]		$array			The array to print
	*		\return			Print all the array as a string in error_log
	*/
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
