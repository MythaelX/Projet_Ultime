<?php
	/*!
	*
	*	\file		errors.php
	*	\author		Mathias CABIOCH-DELALANDE
	*	\date		07 juin 2018
	*
	*/
	/*!
	* \brief Return an error and exit the script if \a $exit = true
	*		\param[in]		$error			The error type
	*		\param[in]		$exit			\b true or \a false
	*/
	function setError($error, $exit){
		header('HTTP/1.1 ' . $error);

		if($exit === true){
			exit;
		}
	}

	/*! \brief Bad request error */
	function badRequest($exit = true){
		setError("400", $exit);
	}

	/*! \brief Unauthorized error */
	function unauthorized($exit = true){
		setError("401", $exit);
	}

	/*! \brief Forbidden access error */
	function forbidden($exit = true){
		setError("403", $exit);
	}

	/*! \brief Not found error */
	function notFound($exit = true){
		setError("404", $exit);
	}

	/*! \brief I am a teapot */
	function laugth($exit = true){
		setError("418 I'm a teapot", $exit);
	}

	/*! \brief Internal server error */
	function serverError($exit = true){
		setError("500", $exit);
	}

	/*! \brief Not implemented error */
	function notImplemented($exit = true){
		setError("501", $exit);
	}

	/*! \brief Bad gateway error */
	function badGateway($exit = true){
		setError("502", $exit);
	}

	/*! \brief Unavailable error */
	function unavailable($exit = true){
		setError("503", $exit);
	}

	/*! \brief General error */
	function error($exit = true){
		setError("520", $exit);
	}
?>
