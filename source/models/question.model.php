<?php	
	class Question
	{
		static $questions = array(1 => array("title" => "Why did the chicken cross the road?", 
  											 "status" => "answered"), 
  					 			  2 => array("title" => "What is 1+1?",
  					 						 "status" => "modified"),
  					 			  3 => array("title" => "Can I ask a question?",
  					 			  			 "status" => "open"));

		public static function getActiveQuestions() {
			return array_filter(self::$questions, function ($val) {
				return $val["status"] == "answered" || $val["status"] == "modified";
			});
		}
	}
?>
