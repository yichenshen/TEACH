<?php	
	class Question
	{
		//Dummy data
		static $questions = array(1 => array("id" => 1,
											 "title" => "Why did the chicken cross the road?",
											 "content" => "I really can't think of a reason for it to do so!\nHelp Me!",
  											 "status" => "answered",
  											 "answer" => "To get to the other side."), 
  					 			  2 => array("id" => 2,
  					 			  			 "title" => "What is 1+1?",
  					 			  			 "content" => "Is it equals to the question ID of this question?",
  					 						 "status" => "modified",
  					 						 "answer" => "Very smart observation. \n\n Now stop wasting your money."),
  					 			  3 => array("id" => 3,
  					 			  			 "title" => "Can I ask a question?",
  					 			  			 "content" => "It's a really interesting question!\n\nI really want to ask it!",
  					 			  			 "status" => "open"));

		public static function getActiveQuestions() {
			return array_filter(self::$questions, function ($val) {
				return $val["status"] == "answered" || $val["status"] == "modified";
			});
		}

		public static function getQuestion($ID){
			return self::$questions[$ID];
		}

		public static function answered($status){
			return $status == "answered" || $status == "modified" || $status == "read";
		}
	}
?>
