<?php
	class Level
	{
		//Dummy data
		static $levels = array(array("id" => 1,
									"name" => "Primary"),
							  array("id" => 2,
							  		"name" => "O-Levels"),
							  array("id" => 3,
							  		"name" => "A-Levels"));

		public static function all(){
			return self::$levels;
		}
	}
?>
