<?php
	session_start();
	
	require_once("../../php/bases/_functions.php");
	require_once("../../php/bases/errors.php");
	
	if(!is_admin_connected()){
		echo "";
		unauthorized();
	} else {
		admin_do_something();
	}
	
	require_once("../../php/bases/bdd.php");
	require_once("../../php/bddConnect.inc");
	
	if(!isset($_GET["page"]) || !isset($_GET["ask"])){
		exit;
	}
	
	if($_GET["page"] == "gallery" && $_GET["ask"] == "uploadImg"){
		saveFileTo($_FILES["img"], "../../files/img/");
		
		$_SESSION["page"] = "gallery";
		
		header('Location: ../');
	} else if($_GET["page"] == "files" && $_GET["ask"] == "uploadFile"){
		$path = $_POST["path"];
		$path = implode("/", deleteLast(explode("/", $path)));
		
		saveFileTo($_FILES["file"], $path, $_FILES["file"]["name"]);
		
		$_SESSION["page"] = "files";
		$_SESSION["path"] = $path;
		
		header('Location: ../');
	} else if($_GET["page"] == "bdd" && $_GET["ask"] == "modifyDatas"){
		$table = $_GET["bdd"];
		
		$bdd = new Bdd("mysql", $BDD_HOST, $BDD_NAME, $BDD_USER, $BDD_PASS);
		
		$POST = array();
		
		foreach($_POST as $key => $val){
			$keys = explode("_", $key);
			$nb = $keys[sizeOf($keys)-1];
			
			$keys = deleteLast($keys);
			$keys = implode("_", $keys);
			
			$POST[$nb][$keys] = $val;
		}
		
		$id = array();
		
		foreach($POST as $line){
			$index = 0;
			$vals = array();
			foreach($line as $key => $val){
				$keys = explode("_", $key);
				
				if($keys[0] !== "autoincrement"){
					$vals[$index++] = $key . "=" . $val;
				} else {
					$id[0] = implode("_", deleteFirst($keys));
					$id[1] = $val;
				}
			}
			$val = implode(", ", $vals);
			$opts = "WHERE " . $id[0] . "=" . $id[1];
			$bdd->update($table, $val, $opts);
		}
		
		$_SESSION["page"] = "bdd";
		$_SESSION["table"] = $table;
		
		exit;
	} else if($_GET["page"] == "bdd" && $_GET["ask"] == "addDatas"){
		$table = $_GET["table"];
		
		$_SESSION["page"] = "bdd";
		$_SESSION["table"] = $table;
		$bdd = new Bdd("mysql", $BDD_HOST, $BDD_NAME, $BDD_USER, $BDD_PASS);
		
		$command = "INSERT INTO `" . $table . "` VALUES(";
		$i = 0;
		$size = sizeOf($_POST);
		foreach($_POST as $k => $v){
			if(!isset($v) || $v === ""){
				header('Location: ../');
			}
			
			if(strpos($k, "autoincrement") !== false){
				$command .= "NULL";
			} else {
				$command .= "'" . dateSql($v) . "'";
			}
			
			if($i + 1 < $size){
				$command .= ", ";
			}
			$i ++;
		}
		$command .= ")";
		
		$bdd->query($command);
		
		header('Location: ../');
	}
?>
