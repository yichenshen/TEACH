<?php
	class Subject
	{
		//Dummy data
		static $subjects = array(1 => "Maths",
								 2 => "Physics",
								 3 => "Biology",
								 4 => "Chemistry",
								 5 => "Science");

		public static function all(){
			return self::$subjects;
		}
	
	}
?>
