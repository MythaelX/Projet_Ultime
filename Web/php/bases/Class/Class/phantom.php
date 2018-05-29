<?php

/****************************************************************/
/*																*/
/*			File : phantom.php									*/
/*				Created by Mathias CABIOCH-DELALANDE			*/
/*					Last modification : 21/04/2018				*/
/*																*/
/*				Authorization : use only						*/
/*																*/
/****************************************************************/

	/* test d'utilisation du programme phantomJS */
	function phantomRun($script, $args = "", $path = "./"){
		$phantom = "php/bases/phantomjs";
		$out = false;
		
		try{
			$cmd = $path . $phantom;
			$cmd .= ' ';
			$cmd .= $path . $script;
			if($args !== ""){
				$cmd .= ' ' . $args;
			}
			
			exec($cmd . ' 2>&1', $out);
			
			return $out;
		} finally {}
		
		return false;
	}
?>
