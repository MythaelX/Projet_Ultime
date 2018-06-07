<?php
	/*!
	*
	*	\file		class-Mail.php
	*	\author		Mathias CABIOCH-DELALANDE
	*	\date		07 juin 2018
	*
	*/
	/*!
	* \class Mail
	* \brief A class to send mails
	*/
	class Mail {
		private $subject;
		private $msg;
		private $to;
		private $headers;
		private $parameters;
		private $from;

		/*! \brief The constructor */
		public function __construct($to = "", $subject = "", $msg = ""){
			$this->to = $to;
			$this->subject = $subject;
			$this->msg = $msg;
			$this->headers = "MIME-Version: 1.0" . "\r\n" . "Content-type:text/html;charset=UTF-8" . "\r\n";
			$this->parameters = "";

			$this->from = false;
		}

		/*! \brief Set the mail receiver */
		public function setReceiver($to){
			$this->to = $to;
		}

		/*! \brief Set the mail subject */
		public function setSubject($subject){
			$this->subject = $subject;
		}

		/*! \brief Set the mail message */
		public function setMsg($msg){
			$this->msg = $msg;
		}

		/*! \brief Set the mail headers */
		public function setHeaders($headers){
			$this->headers = $headers;
		}

		/*! \brief Set the mail sender */
		public function setSender($from){
			$this->addHeader("From: " . $from);
			$this->from = true;
		}

		/*! \brief Set a mail CC */
		public function setCC($cc){
			$this->addHeader("CC: " . $cc);
		}

		/*! \brief Set a mail BCC */
		public function setBCC($bcc){
			$this->addHeader("BCC: " . $bcc);
		}

		/*! \brief Add a mail header */
		public function addHeader($header){
			$this->headers .= $header . "\r\n";
		}

		/*! \brief Set mail parameters */
		public function setParameters($parameters){
			$this->parameters = $parameters;
		}

		/*! \brief Add mail parameters */
		public function addParameter($parameter){
			$this->parameters .= $parameter;
		}

		/*! \brief Send the mail */
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
