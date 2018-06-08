<?php
	/*!
	*
	*	\file		arrays.php
	*	\author		Mathias CABIOCH-DELALANDE
	*	\date		08 juin 2018
	*
	*/
	/*!
	*	\brief Function that replace something by something else in a string or an array
	*		\param[in]		$from			The string to replace
	*		\param[in]		$to				The string for replacement
	*		\param[in]		$in				The string in which to do the replacement
	*		\return			Return the replaced string or array
	*/
	function replace_all($from, $to, $in){
		if(gettype($in) === "string"){
			return implode($to, explode($from, $in));
		} else if(gettype($in) === "array"){
			foreach($in as $key => $val){
				$out[$key] = replace_all($from, $to, $val);
			}

			return $out;
		}
	}

	/*!
	*	\brief Function that delete the specified index of the map array
	*		\param[in]		$in				The map array
	*		\param[in]		$index			The index to delete
	*		\return			Return the map array without the given index
	*/
	function deleteMapIndex($in, $index){
		if(gettype($in) !== "array"){
			return $in;
		}

		$out = array();

		foreach($in as $key => $value){
			if($key !== $index){
				$out[$key] = $value;
			}
		}

		return $out;
	}

	/*!
	*	\brief Function that delete the specified index of the array
	*		\param[in]		$in				The array
	*		\param[in]		$index			The index to delete
	*		\return			Return the array without the given index
	*/
	function deleteIndex($in, $index){
		if(gettype($in) !== "array"){
			return $in;
		}

		$out = array();
		$i = 0;
		$size = sizeOf($in);

		foreach($in as $key => $value){
			if($i !== $index){
				$out[$key] = $value;
			}

			++$i;
		}

		return $out;
	}

	/*!
	*	\brief Function that delete the first index of an array
	*		\param[in]		$in				The array
	*		\return			Return the array without the first index
	*/
	function deleteFirst($in){
		return deleteIndex($in, 0);
	}

	/*!
	*	\brief Function that delete the last index of an array
	*		\param[in]		$in				The array
	*		\return			Return the array without the last index
	*/
	function deleteLast($in){
		return deleteIndex($in, sizeOf($in)-1);
	}

	/*!
	*	\brief Convert a type/value array in an index/value array
	*		\param[in]		$in				The type/value array
	*		\return			Return an index/value array
	*/
	function typeValue_array($in){
		$out = array();

		if(!isset($in) || gettype($in) !== "array"){
			return $out;
		}

		foreach($in as $k => $v){
			if(gettype($v) === "array"){
				$out[$k] = typeValue_array($v);
			} else {
				$out[$in["type"]] = $in["value"];
			}
		}

		return $out;
	}

	/*!
	*	\brief Return the given value in the array if it exists
	*		\param[in]		$index			The index to get
	*		\param[in]		$array			The array to search the index
	*		\return			Return \b false or the value
	*/
	function get_in_array($index, $array){
		if(!isset($index) || !isset($array)){
			return false;
		}

		if(gettype($array) !== "array"){
			return false;
		}

		if(!isset($array[$index])){
			foreach($array as $a){
				if(gettype($a) === "array"){
					$ans = get_in_array($index, $a);

					if($ans !== false){
						return $ans;
					}
				}
			}

			return false;
		}

		return $array[$index];
	}

	/*!
	*	\brief Verify if an index exists in an array with a * possible
	*		\param[in]		$index			The index to verify, it allow the * to search as regex
	*		\param[in]		$array			The array in which to search
	*		\return			Return \b false or the key
	*/
	function it_exists($index, $array){
		if(!isset($index) || !isset($array)){
			return false;
		}

		if(gettype($array) !== "array"){
			return false;
		}

		if(strpos($index, "*") !== false){
			$index = explode("*", $index)[0];
		}

		foreach($array as $key => $val){
			if(strpos($key, $index) !== false){
				return $key;
			}

			if(gettype($val) === "array"){
				$ans = it_exists($index, $array);

				if($ans !== false){
					return $ans;
				}
			}
		}

		return false;
	}

	/*!
	*	\brief Put an array to the error_log as a string
	*		\param[in]		$array			The array to print
	*		\return			Print all the array as a string in error_log
	*/
	function error_log_array($array){
		$out = "";

		foreach($array as $k => $v){
			if(gettype($v) === "array"){
				error_log_array($v);
			} else {
				$out .= "['" . $k . "'] = '" . $v . "'\n";
			}
		}

		error_log($out);
	}
?>
