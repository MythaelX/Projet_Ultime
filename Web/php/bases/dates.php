<?php
	/*!
	*
	*	\file		dates.php
	*	\author		Mathias CABIOCH-DELALANDE
	*	\date		08 juin 2018
	*
	*/
	/*!
	*	\brief Convert a date DD/MM/YYYY to YYYY-MM-DD
	*		\param[in]		$date			The date to convert
	*		\return			Return the SQL shape of the date
	*/
	function dateSql($date){
		$datas = explode("/", $date);

		if(sizeOf($datas) == 3){
			$date = $datas[2] . "-" . $datas[1] . "-" . $datas[0];
		}

		return $date;
	}

	/*!
	*	\brief Convert a date YYYY-MM-DD to DD/MM/YYYY
	*		\param[in]		$date			The date to convert
	*		\return			Return the FR shape of the date
	*/
	function sqlDate($date){
		$datas = explode("-", $date);

		if(sizeOf($datas) == 3){
			$date = $datas[2] . "/" . $datas[1] . "/" . $datas[0];
		}

		return $date;
	}
?>
