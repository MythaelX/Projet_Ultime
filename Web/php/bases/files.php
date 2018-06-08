<?php
	/*!
	*
	*	\file		files.php
	*	\author		Mathias CABIOCH-DELALANDE
	*	\date		08 juin 2018
	*
	*/
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
?>
