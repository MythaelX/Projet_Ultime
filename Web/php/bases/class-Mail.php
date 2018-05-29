<?php

/****************************************************************/
/*																*/
/*			File : class-Mail.php								*/
/*				Created by Mathias CABIOCH-DELALANDE			*/
/*					Last modification : 21/04/2018				*/
/*																*/
/*				Authorization : use only						*/
/*																*/
/****************************************************************/

	class Mail {
		private $subject;
		private $msg;
		private $to;
		private $headers;
		private $parameters;
		private $from;
		
		/* Class constructor */
		public function __construct($to = "", $subject = "", $msg = ""){
			$this->to = $to;
			$this->subject = $subject;
			$this->msg = $msg;
			$this->headers = "MIME-Version: 1.0" . "\r\n" . "Content-type:text/html;charset=UTF-8" . "\r\n";
			$this->parameters = "";
			
			$this->from = false;
		}
		
		public function setReceiver($to){
			$this->to = $to;
		}
		
		public function setSubject($subject){
			$this->subject = $subject;
		}
		
		public function setMsg($msg){
			$this->msg = $msg;
		}
		
		public function setHeaders($headers){
			$this->headers = $headers;
		}
		
		public function setSender($from){
			$this->addHeader("From: " . $from);
			$this->from = true;
		}
		
		public function setCC($cc){
			$this->addHeader("CC: " . $cc);
		}
		
		public function setBCC($bcc){
			$this->addHeader("BCC: " . $bcc);
		}
		
		public function addHeader($header){
			$this->headers .= $header . "\r\n";
		}
		
		public function setParameters($parameters){
			$this->parameters = $parameters;
		}
		
		public function addParameter($parameter){
			$this->parameters .= $parameter;
		}
		
		public function send($to = "", $subject = "", $msg = ""){
			if($to !== ""){ $this->to = $to; }
			if($msg !== ""){ $this->msg = $msg; }
			if($subject !== ""){ $this->subject = $subject; }
			
			if($this->to !== "" || $this->msg !== "" || $this->subject !== "" || $this->from === false){
				mail($this->to, $this->subject, $this->msg, $this->headers, $this->parameters);
			} else {
				error_log("Please fill at least the sender, the receiver, the subject and the message of your mail");
			}
		}
	}
?>
