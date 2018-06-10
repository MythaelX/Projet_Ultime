<?php
	/*!
	*
	*	\file		scraper.php
	*	\author		Mathias CABIOCH-DELALANDE
	*	\date		07 juin 2018
	*
	*/
	require_once("./php/bases/_functions.php");

	/*!
	*	\brief Get an element by id
	*		\param[in]		$code		The code to treat
	*		\param[in]		$id			The id to get
	*		\return			Return the element that have this id
	*		\todo			Create the function
	*/
	function getElementById($code, $id){
		//$out = strstr($code, "id=\"".$id."\"");

		print_all($out);
	}

	/*!
	*	\class Scraper
	*	\brief A class to scrap content from another page
	*	\todo Create the class
	*/
	class Scraper {
		private $url;
		private $header;

		function __constructor(){
			$this->header = "Accept-language: fr\r\n";
		}

		/*! \brief Set the page url */
		public function url($url){
			$this->url = $url;
			return $this;
		}

		/*! \brief Set the page header */
		public function header($header){
			$this->header .= $header . "\r\n";
			return $this;
		}

		/*! \brief Return the object and do \a $func */
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
