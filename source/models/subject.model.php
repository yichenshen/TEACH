<?php
	class Subject
	{
		//Dummy data
		static $subjects = array(1 => "Math",
								 2 => "Physics",
								 3 => "Biology",
								 4 => "Chemistry");

		public static function all(){
			return self::$subjects;
		}
	
	}
?>
