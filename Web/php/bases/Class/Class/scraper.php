<?php
	require_once("./php/bases/_functions.php");
	
	function getElementById($code, $id){
		//$out = strstr($code, "id=\"".$id."\"");
		
		print_all($out);
	}
	
	class Scraper {
		private $url;
		private $header;
		
		function __constructor(){
			$this->header = "Accept-language: fr\r\n";
		}
		
		public function url($url){
			$this->url = $url;
			return $this;
		}
		
		public function header($header){
			$this->header .= $header . "\r\n";
			return $this;
		}
		
		public function get($func, $args = array()){
			$opts = array(
				'http' => array(
					'method' => "GET",
					'header' => $this->header,
					'user_agent' => $_SERVER["HTTP_USER_AGENT"]
				)
			);
	
			$context = stream_context_create($opts);
		
			$code = file_get_contents($this->url, FALSE, $context);
		
			$func($code, $args);
			
			return $this;
		}
	}
?>
