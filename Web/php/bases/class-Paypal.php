<?php
	/*!
	*
	*	\file		class-Paypal.php
	*	\author		Mathias CABIOCH-DELALANDE
	*	\date		10 juin 2018
	*
	*/
	/*!
	* \class	Paypal
	* \brief	A class to talk with the Paypal API
	* \todo		Recreate the API communication part
	*/
	class Paypal {
		private $version;
		private $user;
		private $pass;
		private $signature;
		private $debug;

		/* \brief Class constructor */
		public function __construct($debug = false){
			$this->version = 78.0;
			$this->debug = $debug;
		}

		/*! \brief Set the \a $user, \a $pass, \a signature for the API */
		public function setInformations($user, $pass, $signature){
			if(!isset($user) || !isset($pass) || !isset($signature)){
				error_log("Please complete correctly the paypal informations");
				die;
			}

			$this->user = $user;
			$this->pass = $pass;
			$this->signature = $signature;
		}

		/*! \brief Return the url of ask */
		public function getUrl(){
			if($this->debug === true){
				$api_paypal = 'https://api-3t.sandbox.paypal.com/nvp?';
			} else {
				$api_paypal = 'https://api-3t.paypal.com/nvp?';
			}

			return $api_paypal . 'VERSION=' . $this->version . '&USER=' . $this->user . '&PWD=' . $this->pass . '&SIGNATURE=' . $this->signature;
		}

		/*!
		* \brief Return the request asked
		*		\param[in]		$cancelUrl			The callback url on cancel
		*		\param[in]		$returnUrl			The callback url on success
		*		\param[in]		$amount				The mount of the order
		*		\param[in]		$desc				The optional description of the order
		*		\return			Return the request
		*/
		public function getRequest($cancelUrl, $returnUrl, $amount, $desc = ""){
			$api = $this->getUrl();

			$request = $api .
					   "&METHOD=SetExpressCheckout" .
					   "&CANCELURL=".urlencode($cancelUrl).
					   "&RETURNURL=".urlencode($returnUrl).
					   "&AMT=".$amount.
					   "&CURRENCYCODE=EUR";

			if(isset($desc) && $desc !== ""){
				$request .= "&DESC=".urlencode($desc);
			}

			$request .= "&LOCALECODE=FR";

			return $request;
		}
	}
?>
