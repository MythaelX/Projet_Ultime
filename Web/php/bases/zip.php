<?php
	/*!
	*
	*	\file		zip.php
	*	\author		Mathias CABIOCH-DELALANDE
	*	\date		08 juin 2018
	*
	*/
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
?>
