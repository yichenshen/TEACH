<?php
	class Level
	{
		//Dummy data
		static $levels = array(	array("id" => 1,
									  "name" => "Primary"),
								array("id" => 2,
									  "name" => "N-Levels"),
								array("id" => 3,
							  		  "name" => "O-Levels"),
							  	array("id" => 4,
							  		  "name" => "A-Levels"));

		public static function all(){
			return self::$levels;
		}

		public static function getID($name){
			foreach (self::$levels as $val) {
				if ($val["name"] == $name) {
					return $val['id'];
				}
			}

			return null;
		}
	}
?>
