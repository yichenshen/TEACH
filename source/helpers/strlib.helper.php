<?php 
	function truncate($string, $max){
		if(strlen($string) > $max){
			return substr($string, 0, $max)."...";
		} else {
			return $string;
		}
	}
?>
