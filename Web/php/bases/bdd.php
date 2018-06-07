<?php
	/*!
	*
	*	\file		bdd.php
	*	\author		Mathias CABIOCH-DELALANDE
	*	\date		07 juin 2018
	*
	*/
	require_once("_functions.php");

	/*!
	* \class Bdd
	* \brief A class to connect to a database
	* \details Set only for MySQL or SQLite
	*			To show what is send, define $DEBUG and set it to true
	*/
	class Bdd {
		public $db;
		private $req;
		private $dbType;

		/*!
		* \brief Class constructor
		*		\param[in]		$type			The type of the database
		*		\param[in]		$host			The host for the database
		*		\param[in]		$name			The database name
		*		\param[in]		$user			The username for a connection
		*		\param[in]		$pass			The password for a connection
		*/
		function __construct($type, $host, $name = "", $user = "", $pass = ""){
			/*! \brief Database types array */
			$array = array(
				"mysql" => "MySQL",
				"sqlite" => "SQLite"
			);

			$this->dbType = "";

			/*! \brief Create a PDO Object according to the choosen type */
			if(isset($type) && strtolower($type) == strtolower($array["sqlite"])){
				/* SQLite */
				$this->dbType = $array["sqlite"];

				try {
					$this->db = new PDO("sqlite:" . $host);
				} catch(PDOException $e){
					error_log($this->dbType . ' connect error: ' . $e->getMessage());
					die();
				}
			} else if(isset($type) && strtolower($type) == strtolower($array["mysql"])){
				/* MySQL */
				$this->dbType = $array["mysql"];

				$hosts = explode(":", $host);
				$host = $hosts[0];

				if($host === "" || $name === ""){
					error_log("Please specify correctly the Bdd constructor's infos");
					die();
				}

				try {
					$command = "mysql:host=" . $host;
					if(isset($hosts[1])){ $command .= ";port=" . $hosts[1]; }
					$command .= ";dbname=" . $name . ";charset=UTF8;";
					$this->db = new PDO($command, $user, $pass);

					if(isset($GLOBALS["DEBUG"]) && $GLOBALS["DEBUG"] == true){ error_log($command); }
				} catch(PDOException $e){
					error_log($this->dbType . ' connect error: ' . $e->getMessage());
					die();
				}
			} else {
				/*! \brief On error, say the different possible types in the error_log file */
				$error_text = "BDD error: You have to choose a bdd type between ";

				foreach($array as $key => $val){
					$error_text .= strtolower($val) . " | ";
				}

				error_log($error_text);
				die();
			}
		}

		/*!
		* \brief Datas verification and protection
		*		\param[in]		$val			The value to secure
		*/
		private function secureValues($val){
			$val = explode("'", $val);
			$val = implode("\"", $val);

			return $val;
		}

		/*!
		* \brief Use the QUERY
		*		\param[in]		$command		The command to query
		*/
		public function query($command){
			try {
				$command = $this->secureValues($command);

				if(isset($GLOBALS["DEBUG"]) && $GLOBALS["DEBUG"] == true){ error_log($command); }

				if(!($this->req = $this->db->query($command))){
					return "";
				} else {
					$datas = $this->req->fetchAll(PDO::FETCH_ASSOC);
					$this->req->closeCursor();
				}

				if($datas === false){
					return "";
				} else {
					return $datas;
				}
			} catch(PDOException $e){
				error_log($this->dbType . ' query request error: ' . $e->getMessage());
				return false;
			}
		}

		/*! \brief Get the tables of the database */
		public function getTables(){
			try {
				$command = "SHOW TABLES";

				if(isset($GLOBALS["DEBUG"]) && $GLOBALS["DEBUG"] == true){ error_log($command); }

				if(!($this->req = $this->db->query($command))){
					return false;
				} else {
					$datas = $this->req->fetchAll(PDO::FETCH_ASSOC);
					$this->req->closeCursor();
				}

				if($datas === false){
					return false;
				} else {
					return $datas;
				}
			} catch(PDOException $e){
				error_log($this->dbType . ' tables show request error: ' . $e->getMessage());
				return false;
			}
		}

		/*!
		* \brief Get the columns of a table of the database
		*		\param[in]		$table			The table where to get the columns
		*/
		public function getTableColumns($table){
			try {
				$command = "SHOW COLUMNS FROM " . $table;

				if(isset($GLOBALS["DEBUG"]) && $GLOBALS["DEBUG"] == true){ error_log($command); }

				if(!($this->req = $this->db->query($command))){
					return "";
				} else {
					$datas = $this->req->fetchAll(PDO::FETCH_ASSOC);
					$this->req->closeCursor();
				}

				if($datas === false){
					return "";
				} else {
					return $datas;
				}
			} catch(PDOException $e){
				error_log($this->dbType . ' table\'s columns show request error: ' . $e->getMessage());
				return false;
			}
		}

		/*! \brief Recovery of the last autogenerated index */
		public function getId(){
			try {
				return $this->db->lastInsertId();
			} catch(PDOException $e){
				error_log($this->dbType . ' getId request error: ' . $e->getMessage());
				return false;
			}
		}

		/*!
		* \brief Use the SELECT
		*		\param[in]		$name			The table name
		*		\param[in]		$selection		The selection part of the command
		*		\param[in]		$opt			Other options for the command
		*/
		public function select($name, $selection, $opt=""){
			try {
				$command = "SELECT $selection FROM $name $opt";

				if(isset($GLOBALS["DEBUG"]) && $GLOBALS["DEBUG"] == true){ error_log($command); }

				if(!($this->req = $this->db->query($command))){
					return "";
				} else {
					$datas = $this->req->fetchAll(PDO::FETCH_ASSOC);
					$this->req->closeCursor();
				}

				if($datas === false){
					return "";
				} else {
					return $datas;
				}
			} catch(PDOException $e){
				error_log($this->dbType . ' select request error: ' . $e->getMessage());
				return false;
			}
		}

		/*!
		* \brief Use the SELECT and convert the answer in JSON format
		*		\param[in]		$name			The table name
		*		\param[in]		$selection		The selection part of the command
		*		\param[in]		$opt			Other options for the command
		*/
		public function selectJson($name, $selection, $opt=""){
			try {
				$data = $this->select($name, $selection, $opt);

				if($data !== ""){
					return json_encode($data);
				} else {
					return "";
				}
			} catch(PDOException $e){
				error_log($this->dbType . ' select request error: ' . $e->getMessage());
				return false;
			}
		}

		/*!
		* \brief Use the INSERT
		*		\param[in]		$name			The table name
		*		\param[in]		$val			The values to add
		*/
		public function insert($name, $val){
			try {
				$command = "INSERT INTO `$name` VALUES(" . $this->secureValues($val) . ")";
				$this->db->exec($command);

				if(isset($GLOBALS["DEBUG"]) && $GLOBALS["DEBUG"] == true){ error_log($command); }

				return true;
			} catch(PDOException $e){
				error_log($this->dbType . ' insert request error: ' . $e->getMessage());
				return false;
			}
		}

		/*!
		* \brief Use the UPDATE
		*		\param[in]		$name			The table name
		*		\param[in]		$val			The values to update
		*		\param[in]		$opts			Other options for the command
		*/
		public function update($name, $val, $opts=""){
			/*! \brief Put the datas in $val in the right shape */
				$columns = $this->getTableColumns($name);
				$cols = array();

				for($i = 0; $i < sizeOf($columns); ++$i){
					$field = $columns[$i]["Field"];
					$type = explode("(", $columns[$i]["Type"])[0];

					$cols[$field] = $type;
				}

				$vals = explode(", ", $val);
					for($i = 0; $i < sizeOf($vals); ++$i){
						if(strrpos($vals[$i], " = ") !== false){
							$valss = explode(" = ", $vals[$i]);
						} else {
							$valss = explode("=", $vals[$i]);
						}

						$valss[1] = $this->secureValues($valss[1]);
						if($cols[$valss[0]] === "date"){
							$valss[1] = dateSql($valss[1]);
						}
						$valss[1] = "'" . $valss[1] . "'";
						$valss[0] = "`" . $valss[0] . "`";

						$vals[$i] = implode(" = ", $valss);
					}
				$val = implode(", ", $vals);
			/********************************************/

			try {
				$command = "UPDATE `$name` SET $val $opts";
				$this->db->exec($command);

				if(isset($GLOBALS["DEBUG"]) && $GLOBALS["DEBUG"] == true){ error_log($command); }

				return true;
			} catch(PDOException $e){
				error_log($this->dbType . ' update request error: ' . $e->getMessage());
				return false;
			}
		}

		/*!
		* \brief Use the DELETE
		*		\param[in]		$name			The table name
		*		\param[in]		$where			The WHERE condition for the remove
		*/
		public function delete($name, $where){
			try {
				$command = "DELETE FROM `$name` WHERE $where";
				$this->db->exec($command);

				if(isset($GLOBALS["DEBUG"]) && $GLOBALS["DEBUG"] == true){ error_log($command); }

				return true;
			} catch(PDOException $e){
				error_log($this->dbType . ' delete request error: ' . $e->getMessage());
				return false;
			}
		}
	}
?>
