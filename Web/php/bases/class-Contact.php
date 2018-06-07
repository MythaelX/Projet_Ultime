<?php
	/*!
	*
	*	\file		class-Contact.php
	*	\author		Mathias CABIOCH-DELALANDE
	*	\date		07 juin 2018
	*
	*/
	/*!
	* \class Contact
	* \brief A class to create a contact page
	* \todo
	*/
	class Contact {
		private $pro;
		private $content;

		/*! \brief Constructor */
		public function __construct(){
			$this->pro = false;
			$this->content = array();
		}

		/*! \brief Set if the user can be a professional user */
		public function canBePro(){
			$this->pro = true;
		}

		/*!
		* \brief Add an input to the form
		*		\param[in]		$name			The name of the input
		*		\param[in]		$label			The label for the input
		*		\param[in]		$type			The type of the input
		*		\param[in]		$required		Set to true or false if the input is required
		*		\param[in]		$value			The default value for the input
		*		\param[in]		$placeholder	A placeholder for the input
		*/
		private function add($name, $label, $type, $required = "", $value = "", $placeholder = ""){
			$i = sizeOf($this->content);
			$c = array();

			$c["label"] = $label;

			if($required === "required"){
				$c["label"] .= "*";
			}

			$c["name"] = $name;
			$c["input"] = array();
				$c["input"]["type"] = $type;
				$c["input"]["value"] = $value;
				$c["input"]["required"] = $required;
				$c["input"]["placeholder"] = $placeholder;

			$this->content[$i] = $c;
		}

		/*!
		* \brief Add the contact form to the page
		*/
		public function show(){
			$out = "";

			$this->add("name", "Nom", "text", "required");
			$this->add("email", "Email", "mail", "required");
			$this->add("phone", "Téléphone", "phone");

			$out .= '<form class="form contact-form" method="" action="" target="_self">';
				$out .= '<div class="form-item form-label">';
					foreach($this->content as $c){
						$out .= '<label for="' . $c["name"] . '">' . $c["label"] . ' :</label>';
					}
				$out .= '</div><div class="form-item form-input">';
					foreach($this->content as $c){
						$out .= '<input '
							  . 'type="' . $c["input"]["type"] .
							  '" name="' . $c["name"] .
							  '" id="' .  $c["name"].
							  '" value="' . $c["input"]["value"] .
							  '" placeholder="' . $c["input"]["placeholder"] .
							  '" ' . $c["input"]["required"] . '/>';
					}
				$out .= '</div>';
			$out .= '<form>';

			echo $out;
		}
	}
?>
