<?php	
	class Question
	{
		//Dummy data
		static $questions = array(array("id" => 1,
										"title" => "Why did the chicken cross the road?",
										"content" => "I really can't think of a reason for it to do so!\nHelp Me!",
  										"status" => "answered",
  										"answer" => "To get to the other side."), 
  					 			  array("id" => 2,
  					 			  		"title" => "What is 1+1?",
  					 			  		"content" => "Is it equals to the question ID of this question?",
  					 					"status" => "modified",
  					 					"answer" => "Very smart observation. \n\n Now stop wasting your money."),
  					 			  array("id" => 3,
  					 			  		"title" => "Can I ask a question?",
  					 			  		"content" => "It's a really interesting question!\n\nI really want to ask it!",
  					 			  		"status" => "open"),
  					 			  array("id" => 4,
  					 			  		"title" => "This is a long and really really really old question.",
  					 			  		"content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porttitor ut ex quis posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis dapibus ullamcorper. Curabitur sagittis sapien in nisl ornare sodales. Sed sodales erat in arcu maximus, id ultrices risus scelerisque. Etiam dictum dolor mi, eu finibus nisi tristique et. Suspendisse orci massa, fermentum rhoncus dolor vel, gravida tempus odio. Suspendisse ut arcu efficitur, dignissim massa ut, congue sem. Ut et dolor urna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris faucibus aliquet nibh sed cursus. Integer lacinia scelerisque dui, interdum viverra odio rutrum vitae. Vivamus quis eros pretium, vehicula orci nec, cursus nisl. Phasellus ac imperdiet lorem. Maecenas luctus purus id congue vulputate. \n\nMorbi placerat elit ac diam eleifend imperdiet. Integer a cursus felis, vel lobortis ante. Donec commodo facilisis fermentum. Vestibulum ut augue faucibus, euismod risus ut, volutpat ligula. Proin eu ullamcorper mi. Nulla sit amet pretium orci, vel pretium nisi. Maecenas id elit iaculis, tempus lectus id, convallis felis. Suspendisse mollis mi lectus, ut gravida leo condimentum quis. Nunc vehicula libero vitae ipsum placerat volutpat. Pellentesque id sem a arcu tristique gravida non eu eros. Phasellus ultrices, lectus eget mollis elementum, neque mauris ullamcorper massa, id tempor orci diam ut sem. Sed placerat tortor et ornare ultrices. Duis interdum neque non sagittis tempus. Quisque quis euismod sem.\n\nPellentesque id erat nisi. Sed et felis tellus. Cras consequat neque mauris, eu mollis risus pulvinar quis. Aliquam vitae viverra ligula. Fusce interdum ipsum urna, et blandit tellus malesuada quis. In ac tortor nisl. Maecenas id dolor scelerisque, pulvinar ligula at, gravida magna. Sed mauris lorem, pretium ac aliquet vel, laoreet vitae risus. Vivamus porta enim sit amet.",
  					 			  		"status" => "read",
  					 			  		"answer" => "Uh I'm really sorry but can you repeat that again?"));

		public static function getActiveQuestionsLabel() {
			return array_filter(self::$questions, function ($val) {
				return self::active($val["status"]);
			});
		}

		public static function allLabels(){
			return self::$questions;
		}

		public static function getQuestion($ID){
			$return = null;
			foreach (self::$questions as $question) {
				if ($question["id"] == $ID) {
					$return = $question;
				}
			}
			return $return;
		}

		public static function active($status){
			return $status == "answered" || $status == "modified";
		}

		public static function answered($status){
			return $status == "read" || self::active($status);
		}
	}
?>
