<?php

/****************************************************************/
/*																*/
/*			File : class-Paypal.php								*/
/*				Created by Mathias CABIOCH-DELALANDE			*/
/*					Last modification : 16/05/2018				*/
/*																*/
/*				Authorization : use only						*/
/*																*/
/****************************************************************/

	class Paypal {
		private $version;
		private $user;
		private $pass;
		private $signature;
		private $debug;
	
		/* Class constructor */
		public function __construct($debug = false){
			$this->version = 78.0;
			$this->debug = $debug;
		}
	
		public function setInformations($user, $pass, $signature){
			if(!isset($user) || !isset($pass) || !isset($signature)){
				error_log("Please complete correctly the paypal informations");
				die;
			}
		
			$this->user = $user;
			$this->pass = $pass;
			$this->signature = $signature;
		}
	
		public function getUrl(){
			if($this->debug === true){
				$api_paypal = 'https://api-3t.sandbox.paypal.com/nvp?';
			} else {
				$api_paypal = 'https://api-3t.paypal.com/nvp?';
			}
		
			return $api_paypal . 'VERSION=' . $this->version . '&USER=' . $this->user . '&PWD=' . $this->pass . '&SIGNATURE=' . $this->signature;
		}
		
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
