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
	
	require_once("../../php/bases/getter.php");
	require_once("../../php/bases/bdd.php");
	require_once("../../php/bddConnect.inc");
	
	$bdd = new Bdd("mysql", $BDD_HOST, $BDD_NAME, $BDD_USER, $BDD_PASS);
	
	/* Récupération de la prochaine ressource */
	$res = nextRes();
	
	/* Action selon le type d'envoie */
	switch($type){
		case "POST":
			switch($res){
				case "admin":
					$ask = nextRes();
					
					switch($ask){
						case "modify_pass":
							if(!isset($_POST["user"]) || !isset($_POST["pass"]) || !isset($_POST["confirm"]) || !isset($_POST["site_name"])){
								error_log("Please send correctly the datas");
								unauthorized();
							}
							
							if($_POST["pass"] !== $_POST["confirm"]){
								error_log("The passwords are different");
								badRequest();
							}
							
							$user = $_POST["user"];
							$pass = sha1($_POST["pass"]);
							$name = $_POST["site_name"];
							$old = get_site_name($bdd);
							
							$bdd->update("page_admin", "value=" . $user, "WHERE `type` = 'admin_user'");
							$bdd->update("page_admin", "value=" . $pass, "WHERE `type` = 'admin_password'");
							
							if($old !== $name){
								$bdd->update("page_admin", "value=" . $name, "WHERE `type` = 'site_name'");
								echo "true";
							}

							exit;
							break;
						default:
							badRequest();
					}
					break;
				case "bdd":
					if(!isset($_POST["table"])){
						forbidden();
					}

					$page_code = "";
					$table = $_POST["table"];

					$page_code = "<form method=\"post\" action=\"admin/php/admin_modifier.php?page=bdd&ask=modifyDatas&bdd=" . $table . "\" target=\"_self\">"
								. "<div id=\"sender\">"
									. "<input class=\"btn btn-info\" type=\"submit\" value=\"Appliquer les changements effectués\" />"
									. "<button onclick=\"addDataChoose(event, '" . $table . "');\" class=\"btn btn-success\">Ajouter</button>"
								. "</div>";

					$columns = $bdd->getTableColumns($table);
					$datas = $bdd->select($table, "*");
					
					for($i = 0; $i < sizeOf($datas); ++$i){
						$data = $datas[$i];
						
						$page_code .= "<div id=\"field_" . $i . "\" class=\"field\">";
						
						if(($data_index = it_exists("id*", $data)) !== false){
							$page_code .= "<div class=\"btn-delete\" onclick=\"deleteData('" . $table . "', '" . $data_index . "', '" . $data[$data_index] . "');\"></div>";
						}
						
						$page_code .= "<h2>Donnée " . ($i+1) . "</h2>"
									. "<div class=\"container\">";
						
						for($j = 0; $j < sizeOf($columns); ++$j){
							$column = $columns[$j];
							
							if($column["Extra"] != "auto_increment"){
								$page_code .= "<div><label for=\"" . $column["Field"] . "_" . $i . "\">" . $column["Field"] . " : </label>";
								
								if($column["Type"] == "text"){
									$page_code .= "<textarea  name=\"" . $column["Field"] . "_" . $i . "\" id=\"" . $column["Field"] . "_" . $i . "\" rows=10 cols=50>" . $data[$column["Field"]] . "</textarea>";
								} else {
									$page_code .= "<input type=\"";
									
									if(strpos($column["Type"], "int") !== false || 
									   strpos($column["Type"], "double") !== false || 
									   strpos($column["Type"], "float") !== false)
									{
										$page_code .= "number";
									} else if(strpos($column["Type"], "varchar") !== false){
										$page_code .= "text";
									} else {
										$page_code .= $column["Type"];
									}
									
									$page_code .= "\" name=\"" . $column["Field"] . "_" . $i . "\" id=\"" . $column["Field"] . "_" . $i . "\" value=\"" . $data[$column["Field"]] . "\" />";
								}
								
								$page_code .= "</div>";
							} else {
								$page_code .= "<input type=\"hidden\" name=\"autoincrement_" . $column["Field"] . "_" . $i . "\" id=\"" . $column["Field"] . "_" . $i . "\" value=\"" . $data[$column["Field"]] . "\" />";
							}
						}
					
						$page_code .= "</div></div>";
					}
					
					$page_code .= "</form>";
					echo $page_code;
					
					break;
				default:
					badRequest();
			}
			break;
		case "GET":
			switch($res){
				case "gallery":
					$page_code =  "<form target=\"_self\" action=\"admin/php/admin_modifier.php?page=gallery&ask=uploadImg\" method=\"post\" enctype=\"multipart/form-data\">"
									. "<div>"
										. "<label for=\"img\">Sélectionnez l'image à télécharger : </label>"
										. "<input type=\"file\" name=\"img\" id=\"img\">"
									. "</div><div>"
										. "<input class=\"btn btn-success\" type=\"submit\" value=\"Ajouter\">"
									. "</div>"
								. "</form>";
					
					$path = "files/img/";
					
					$files = get_all_files_in("../../" . $path);
					
					foreach($files as $file){
						$page_code .= "<div class=\"img_mini\"><img src=\"" . $path . $file . "\" alt=\"" . $file . "\" /><div class=\"cancel\" onclick=\"deleteImg('" . $path . $file . "');\"></div></div>";
					}
					
					echo $page_code;
					exit;
					break;
				case "files":
					$page_code = "";
					
					$path = "../../files/";
					$res_path = "";
					
					while(resNumber() !== 0){
						$res_path .= nextRes() . "/";
					}
					
					$total_path = $path . $res_path;
					
					$page_code .= "<div id=\"commands\">"
									. "<div>"
										. "<div>"
											. "<input type=\"text\" id=\"directory_name\" placeholder=\"Le nom de votre dossier\" />"
										. "</div><div>"
											. "<button class=\"btn btn-success\" onclick=\"createDirectory('" . $total_path . "');\">Créer</button>"
										. "</div>"
									. "</div>"
									. "<form target=\"_self\" action=\"admin/php/admin_modifier.php?page=files&ask=uploadFile\" method=\"post\" enctype=\"multipart/form-data\">"
										. "<div>"
											. "<input type=\"file\" name=\"file\" id=\"file\">"
											. "<input type=\"hidden\" name=\"path\" value=\"" . $total_path . "\">"
										. "</div><div>"
											. "<input class=\"btn btn-success\" type=\"submit\" value=\"Ajouter\">"
										. "</div>"
									. "</from>"
								. "</div>";
					
					$files = get_all_in($total_path);
					
					$page_code .= "<div id=\"path\">Chemin : ";
					$path_res = explode("/", $total_path);
					$path_res[2] = "root";
					for($i = 2; $i < sizeOf($path_res); ++$i){
						if($path_res[$i] != "" && $path_res[$i+1] == ""){
							$page_code .= $path_res[$i];
							break;
						} else {
							$page_code .= $path_res[$i] . " &gt; ";
						}
					}
					$page_code .= "</div>";
					
					$folderIndex = 0;
					$folderFolders = array();
					$fileIndex = 0;
					$folderFiles = array();
					
					foreach($files as $file){
						if($file != "."){
							$code = "<div>";
							
							$code .= "<img src=\"admin/design/img/";
							if(is_dir($total_path.$file)){
								$code .= "folder";
							} else {
								$code .= "file";
							}
							$code .= ".png\" class=\"icon\" />";
							
							if(is_dir($total_path.$file)){
								if($file === ".."){
									$code .= "<a href=\"./?page=files&path=" . implode("/", deleteLast(deleteLast(explode("/", $res_path)))) . "\" target=\"_self\" onclick=\"changeTab(event);\">" . $file . "</a>";
								} else {
									$code .= "<a href=\"./?page=files&path=" . $res_path . $file . "\" target=\"_self\" onclick=\"changeTab(event);\">" . $file . "</a>";
								}
							} else {
								$code .= $file;
							}
							
							if($file !== ".." && !($total_path === $path && $file === "img")){
								$code .= "<div class=\"delete\" onclick=\"deleteFile('" . $total_path . $file . "', '" . $total_path . "');\"></div>";
							}
							
							$code .= "</div>";
							
							if(is_dir($total_path.$file)){
								if($file == ".."){
									$folderFolders[$file] = $code;
								} else {
									$folderFolders[$folderIndex++] = $code;
								}
							} else {
								$folderFiles[$fileIndex++] = $code;
							}
						}
					}
					
					$page_code .= "<div id=\"list\">";
					
					foreach($folderFolders as $code){
						if(($total_path !== $path || $code !== $folderFolders[".."])){
							$page_code .= $code;
						}
					}
					foreach($folderFiles as $code){
						$page_code .= $code;
					}
					
					$page_code .= "</div>";
					
					echo $page_code;
					exit;
					break;
				case "bdd":
					$page_code = "";
					
					$page_code .= "<div id=\"table_list\">"
									. "<select id=\"tables_selection\">";
					
					$tables = $bdd->getTables();
					for($i = 0; $i < sizeOf($tables); ++$i){
						$table = $tables[$i];
						
						if($table["Tables_in_".$BDD_NAME] != "page_admin"){
							$page_code .= "<option value=\"" . $table["Tables_in_".$BDD_NAME] . "\">" . replace_all("_", " ", $table["Tables_in_".$BDD_NAME]) . "</option>";
						}
					}
					
					$page_code .= "</select>"
								. "<button class=\"btn btn-success\" onclick=\"chooseDatabase();\">Modifier ces données</button>"
								. "</div>";
					
					echo $page_code;
					exit;
					break;
				case "backups":
					$page_code = "";
					
					$path = "../files/backups/";
					
					$page_code .= "<div id=\"commands\">"
									. "<div>"
										. "<div>"
											. "<button id=\"save_site\" class=\"btn btn-success\" onclick=\"saveSite('" . $path . "');\">Sauvegarder le site</button>"
										. "</div>"
									. "</div>"
								. "</div>";
					
					$files = get_all_in($path);
					
					$fileIndex = 0;
					$folderFiles = array();
					
					foreach($files as $file){
						if($file != "." && $file != ".."){
							$code = "<div>";
							
							$code .= "<img src=\"admin/design/img/";
							if(!is_dir($path.$file)){
								$code .= "archive";
							}
							$code .= ".png\" class=\"icon\" />";
							
							if(!is_dir($path.$file)){
								$code .= $file;
								$code .= "<div class=\"delete\" onclick=\"deleteFile('" . $path . $file . "', '" . $path . "', false);\"></div>";
							}
							
							$code .= "</div>";
							
							if(!is_dir($path.$file)){
								$folderFiles[$fileIndex++] = $code;
							}
						}
					}
					
					$page_code .= "<div id=\"list\">";
					
					foreach($folderFiles as $code){
						$page_code .= $code;
					}
					
					if($fileIndex === 0){
						$page_code .= "Aucune sauvegarde actuellement disponible";
					}
					
					$page_code .= "</div>";
					
					echo $page_code;
					exit;
					break;
				case "admin":
					$page_code = "";
					
					$answer = $bdd->select("page_admin", "*");
					$answer = typeValue_array($answer);
					
					$page_code .= "<div>"
									. "<h2>Informations générales concernant l'administrateur</h2>"
									. "<div>"
										. "<div>"
											. "<label for=\"site_name\">Nom du site : </label>"
											. "<input type=\"text\" name=\"site_name\" id=\"site_name\" value=\"" . get_in_array("site_name", $answer) . "\" />"
										. "</div>"
										. "<div>"
											. "<label for=\"username\">Nom d'utilisateur : </label>"
											. "<input type=\"text\" name=\"username\" id=\"username\" value=\"" . get_in_array("admin_user", $answer) . "\" />"
										. "</div><div>"
											. "<label for=\"admin_password\">Mot de passe : </label>"
											. "<input type=\"password\" name=\"admin_password\" id=\"admin_password\" /><br />"
											. "<label for=\"admin_password\">Confirmez votre mot de passe : </label>"
											. "<input type=\"password\" name=\"admin_confirm_password\" id=\"admin_confirm_password\" />"
										. "</div>"
										. "<button class=\"btn btn-outline-success\" onclick=\"modifyAdmin();\">Modifier</button>"
									. "</div>"
								. "</div>";
					
					echo $page_code;
					exit;
					break;
				case "connexion":
					
					
					exit;
					break;
				default:
					error_log("You doesn't choose a right parameter for your request : '" . $res . "'");
					badRequest();
			}
			break;
		case "PUT":
			switch($res){
				case "files":
					createDir($_PUT["path"] . "/" . $_PUT["name"]);
					exit;
					break;
				case "backups":
					createZip("../../", "../files/backups/");
					exit;
					break;
				case "bdd":
					$page_code = "";
					
					$table = $_PUT["table"];
					$columns = $bdd->getTableColumns($table);
					
					$page_code .= "<div id=\"adder_field\">"
									. "<form target=\"_self\" action=\"./admin/php/admin_modifier.php?page=bdd&ask=addDatas&table=" . $table . "\" method=\"post\" >"
										. "<div id=\"commands\">"
											. "<button onclick=\"addReturn(event, '" . $table . "');\" class=\"btn btn-error\">Annuler</button>"
											. "<button class=\"btn btn-success\">Ajouter</button>"
										. "</div>";
					
					for($i = 0; $i < sizeOf($columns); ++$i){
						$column = $columns[$i];
						
						if($column["Extra"] != "auto_increment"){
							$page_code .= "<div><label for=\"" . $column["Field"] . "\">" . $column["Field"] . " : </label>";
							
							if($column["Type"] == "text"){
								$page_code .= "<textarea  name=\"" . $column["Field"] . "\" id=\"" . $column["Field"] . "\" rows=10 cols=50></textarea>";
							} else {
								$page_code .= "<input type=\"";
								
								if(strpos($column["Type"], "int") !== false || 
								   strpos($column["Type"], "double") !== false || 
								   strpos($column["Type"], "float") !== false)
								{
									$page_code .= "number";
								} else if(strpos($column["Type"], "varchar") !== false){
									$page_code .= "text";
								} else {
									$page_code .= $column["Type"];
								}
								
								$page_code .= "\" name=\"" . $column["Field"] . "\" id=\"" . $column["Field"] . "\" />";
							}
							
							$page_code .= "</div>";
						} else {
							$page_code .= "<input type=\"hidden\" name=\"autoincrement_" . $column["Field"] . "\" id=\"" . $column["Field"] . "\" />";
						}
					}
					
					$page_code .= "</form></div>";
					
					echo $page_code;
					exit;
					break;
			}
			break;
		case "DELETE":
			switch($res){
				case "gallery":
					deleteFile("../../" . $_DELETE["file"]);
					exit;
					break;
				case "files":
					deleteFile($_DELETE["file"]);
					exit;
					break;
				case "bdd":
					if(!isset($_DELETE["table"]) || !isset($_DELETE["id"]) || !isset($_DELETE["index"])){
						badRequest();
					}
					
					$bdd->delete($_DELETE["table"], '`' . $_DELETE["index"] . '`="' . $_DELETE["id"] . '"');
					
					exit;
					break;
			}
			break;
		default:
			badRequest();
	}
	
	exit;
?>
