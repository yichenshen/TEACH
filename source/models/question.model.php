<?php	
	class Question
	{
		//Dummy data
		static $questions = array(array("id" => 1,
										"title" => "Why did the chicken cross the road?",
										"content" => "I really can't think of a reason for it to do so!\nHelp Me!",
  										"status" => "answered",
  										"answer" => "To get to the other side.",
  										"clarificationCount" => 0,
  										"subject" => "Biology",
  										"level" => "Primary",
  										"serviceLevel" => 1,
  										"answerTime" => "2015-05-29 17:12:23",
  										"studentsUsername" => "user",
  										"staffUsername" => "Alice"), 
  					 			  array("id" => 2,
  					 			  		"title" => "What is 1+1?",
  					 			  		"content" => "Is it equals to the question ID of this question?",
  					 					"status" => "modified",
  					 					"answer" => "Very smart observation. \n\n Now stop wasting your money.",
  					 					"clarificationCount" => 0,
  					 					"subject" => "Maths",
  					 					"level" => "O-Levels",
  					 					"serviceLevel" => 1,
  										"answerTime" => "2015-05-29 17:12:23",
  					 					"studentsUsername" => "user",
										"staffUsername" => "staff"),
  					 			  array("id" => 3,
  					 			  		"title" => "Can I ask a question?",
  					 			  		"content" => "It's a really interesting question!\n\nI really want to ask it!",
  					 			  		"status" => "open",
  					 			  		"subject" => "Chemistry",
  					 			  		"level" => "N-Levels",
		 			  					"serviceLevel" => 2,
  										"answerTime" => "2015-05-27 17:22:04",
  					 			  		"studentsUsername" => "user"),
  					 			  array("id" => 4,
  					 			  		"title" => "This is a long and really really really really really really really really really old question.",
  					 			  		"content" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porttitor ut ex quis posuere. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis dapibus ullamcorper. Curabitur sagittis sapien in nisl ornare sodales. Sed sodales erat in arcu maximus, id ultrices risus scelerisque. Etiam dictum dolor mi, eu finibus nisi tristique et. Suspendisse orci massa, fermentum rhoncus dolor vel, gravida tempus odio. Suspendisse ut arcu efficitur, dignissim massa ut, congue sem. Ut et dolor urna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris faucibus aliquet nibh sed cursus. Integer lacinia scelerisque dui, interdum viverra odio rutrum vitae. Vivamus quis eros pretium, vehicula orci nec, cursus nisl. Phasellus ac imperdiet lorem. Maecenas luctus purus id congue vulputate. \n\nMorbi placerat elit ac diam eleifend imperdiet. Integer a cursus felis, vel lobortis ante. Donec commodo facilisis fermentum. Vestibulum ut augue faucibus, euismod risus ut, volutpat ligula. Proin eu ullamcorper mi. Nulla sit amet pretium orci, vel pretium nisi. Maecenas id elit iaculis, tempus lectus id, convallis felis. Suspendisse mollis mi lectus, ut gravida leo condimentum quis. Nunc vehicula libero vitae ipsum placerat volutpat. Pellentesque id sem a arcu tristique gravida non eu eros. Phasellus ultrices, lectus eget mollis elementum, neque mauris ullamcorper massa, id tempor orci diam ut sem. Sed placerat tortor et ornare ultrices. Duis interdum neque non sagittis tempus. Quisque quis euismod sem.\n\nPellentesque id erat nisi. Sed et felis tellus. Cras consequat neque mauris, eu mollis risus pulvinar quis. Aliquam vitae viverra ligula. Fusce interdum ipsum urna, et blandit tellus malesuada quis. In ac tortor nisl. Maecenas id dolor scelerisque, pulvinar ligula at, gravida magna. Sed mauris lorem, pretium ac aliquet vel, laoreet vitae risus. Vivamus porta enim sit amet.",
  					 			  		"status" => "read",
  					 			  		"answer" => "Uh I'm really sorry but can you repeat that again?",
  					 			  		"clarificationCount" => 0,
  					 			  		"subject" => "",
  					 			  		"rating" => "1",
  					 			  		"ratingComment" => "????",
  					 			  		"level" => "O-Levels",
  					 			  		"serviceLevel" => 1,
  										"answerTime" => "2015-05-29 17:22:04",
  					 			  		"studentsUsername" => "Jack",
  					 			  		"staffUsername" => "staff"),
								  array("id" => 5,
								  		"title" => "Zombie cat?", 
								  		"content" => "Schrödinger wrote:\n\n A cat is penned up in a steel chamber, along with the following device (which must be secured against direct interference by the cat): in a Geiger counter, there is a tiny bit of radioactive substance, so small, that perhaps in the course of the hour one of the atoms decays, but also, with equal probability, perhaps none; if it happens, the counter tube discharges and through a relay releases a hammer that shatters a small flask of hydrocyanic acid. If one has left this entire system to itself for an hour, one would say that the cat still lives if meanwhile no atom has decayed. The psi-function of the entire system would express this by having in it the living and dead cat (pardon the expression) mixed or smeared out in equal parts.\n\nSo is the cat alive or dead?",
								  		"status" => "fined",
								  		"answer" => "There are many explanations to this question.\n\nThe most popular of which is the Copenhagen interpretation, which states that the system will cease to be in a superposition of states upon observation. This implies that until you open the box (or find out for certain if the cat is alive or dead), the cat is indeed, both dead and alive. (Zombie cat ftw)\n\nThe other popular interpretation is the many worlds interpretation. In this case, the cat is alive in one world and dead in the other.",
								  		"clarificationCount" => 0,
								  		"subject" => "Physics",
								  		"level" => "N-Levels",
								  		"finalLevel" => "A-Levels",
								  		"serviceLevel" => 1,
  										"answerTime" => "2015-05-29 17:22:04",
								  		"studentsUsername" => "user",
								  		"staffUsername" => "Alice"),
								  array("id" => 6,
								  		"title" => "CuSO4",
								  		"content" => "What is the molar mass (M) of Copper(II) Sulphate (CuSO4)?",
								  		"status" => "open",
								  		"subject" => "Chemistry",
								  		"level" => "O-Levels",
								  		"serviceLevel" => 1,
  										"answerTime" => "2015-05-29 17:22:04",
								  		"studentsUsername" => "Jack",
								  		"staffUsername" => "staff"),
								  array("id" => 7,
  					 			  		"title" => "Marble in a Bowl",
  					 			  		"content" => "Consider the following. A hollow sphere of radius r is placed in a hollow hemispherical bowl of radius R, (R > r). The smaller sphere is given a small perturbation in its angle, and subsequently rolls without slipping in the bowl. Find the angular frequency of oscillation.\n\n__[Clarification]__\nWhich solution is recommended?",
  					 			  		"status" => "clarify",
  					 			  		"answer" => "Refer to document below",
  					 			  		"clarificationCount" => 1,
  					 			  		"subject" => "Physics",
  					 			  		"rating" => "4",
  					 			  		"ratingComment" => "Solution is complete, but complicated.",
  					 			  		"level" => "A-Levels",
  					 			  		"serviceLevel" => 3,
  										"answerTime" => "2015-05-31 22:07:10",
  					 			  		"studentsUsername" => "user",
  					 			  		"staffUsername" => "staff",
  					 			  		"attachments" => array(	array("type" => "question", "fileName" => "Marble_in_a_bowl.png"),
  					 			  								array("type" => "answer", "fileName" => "Marble_in_a_bowl.pdf"),
  					 			  								array("type" => "answer", "fileName" => "Working.pdf"))));

		//User/student queries
		public static function all($user){
			return array_filter(self::$questions, function($val) use($user){
				return $val['studentsUsername'] == $user;
			});
		}

		public static function getActiveQuestionsLabel($user) {
			return array_filter(self::all($user), function ($val) {
				return self::active($val["status"]);
			});
		}

		public static function getFinedQuestionsLabel($user){
			return array_filter(self::all($user), function($val){
				return $val["status"] == "fined";
			});
		}

		public static function getQuestion($ID, $user){
			foreach (self::all($user) as $question) {
				if ($question["id"] == $ID) {
					return $question;
				}
			}
			return null;
		}

		public static function searchQuestions($t, $user){
			return array_filter(self::all($user), function($val) use($t){
				return self::filterByTerm($val, $t);
			});
		}

		//Staff queries
		public static function staffOpenToAll(){
			return array_filter(self::$questions, function($val){
				return self::unaccepted($val);
			});
		}

		public static function staffAnswered($staff){
			return array_filter(self::$questions, function($val) use($staff){
				return isset($val['staffUsername']) && $val['staffUsername'] == $staff && self::answered($val['status']) && $val['status'] != "clarify";
			});
		}

		public static function staffAccepted($staff){
			return array_filter(self::$questions, function($val) use($staff){
				return isset($val['staffUsername']) && $val['staffUsername'] == $staff && self::reqResponse($val['status']);
			});
		}

		public static function staffGetQuestion($ID, $staff){
			$eligible = array_filter(self::$questions, function($val) use($staff){
				return self::unaccepted($val) || $val['staffUsername'] == $staff;
			});

				
			foreach ($eligible as $eQns) {
				if ($eQns["id"] == $ID) {
					return $eQns;
				}
			}
			return null;
		}

		//Generic query helpers
		public static function active($status){
			return $status == "answered" || $status == "modified" || $status == "fined";
		}

		public static function answered($status){
			return $status == "read" || $status == "clarify" ||self::active($status);
		}

		public static function reqResponse($status){
			return $status == "open" || $status == "clarify"; 
		}

		public static function unaccepted($question){
			return $question['status'] == "open" && (!isset($question['staffUsername']) || empty($question['staffUsername']));
		}

		public static function filterByTerm($question, $term){
			return stripos($question["title"], $term) !== false || stripos($question["subject"], $term) !== false;	
		}
	}
?>
