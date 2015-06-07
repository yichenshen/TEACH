<?php

	require_once $_SERVER['DOCUMENT_ROOT']."/models/user.model.php";

	class Question
	{
		//Dummy data
		static $questions = array(array("id" => 1,
										"title" => "Classification",
										"content" => "What is the system to classify life?\n\nHow do we get the scientific name of an organism?",
  										"status" => "answered",
  										"answer" => "Today, life is classfied with a system called the Linnean classification. The system classifies life based on 6 levels, namely(from broadly to specifically):\n 1. Kingdom\n 2. Phylum\n 3. Class\n 4. Order\n 5. Family\n 6. Genus\n 7. Species\n\n> You can remember it with this mnemonic: __K__a__P__o __Class__ __O__f __F__at __G__irl__S__ \n\nThe scientic name of a species is just the Genus and then the Species. _E.g. Homo sapiens_",
  										"clarificationCount" => 0,
  										"subject" => "Biology",
  										"rating" => "5",
  										"level" => "O-Levels",
  										"serviceLevel" => 1,
  										"answerTime" => "2015-05-29 17:12:23",
  										"studentsUsername" => "user",
  										"staffUsername" => "Alice"), 
  					 			  array("id" => 2,
  					 			  		"title" => "Partial Fractions",
  					 			  		"content" => "Express \\[\\frac{2x+1}{\\left ( x+1 \\right ) \\left ( x^2-2x+1 \\right )}\\] in partial fractions.",
  					 					"status" => "modified",
  					 					"answer" => "__Simplify the expression__ to \\[\\frac {2x+1}{\\left(x+1 \\right )\\left(x^2-2x+1 \\right )} = \\frac {2x+1}{\\left(x+1 \\right )\\left(x-1 \\right )^2} = \\frac{A}{x+1} + \\frac{B}{x-1} + \\frac{C}{\\left(x-1 \\right )^2}\\]\n\n__Multiply both sides by the denominator__ in the second step and: \\[2x+1 = A\\left(x-1 \\right )^2+B\\left(x-1 \\right )\\left(x+1 \\right )+C\\left(x+1 \\right )\\]\n\nIf we __sub in the correct values for x__,\\[\\\\x=1\\rightarrow C=\\frac{3}{2} \\\\ \\\\x=-1\\rightarrow A=-\\frac{1}{4}\\]\n\nAnd finally if we __compare the coefficients of x<sup>2</sup>__, we obtain\\[B=\\frac{1}{4}\\]\n\nPutting everything together, we obtain: \\[\\frac{2x+1}{\\left(x+1 \\right )\\left(x-1 \\right )^2} = -\\frac{1}{4\\left(x+1 \\right )} + \\frac{1}{4\\left(x-1 \\right )}+\\frac{3}{2\\left(x-1 \\right )^2}\\]\nWhich is our answer.",
  					 					"clarificationCount" => 0,
  					 					"subject" => "Maths",
  					 					"rating" => "5",
  					 					"ratingComment" => "Thanks",
  					 					"level" => "O-Levels",
  					 					"serviceLevel" => 1,
  										"answerTime" => "2015-05-29 17:12:23",
  					 					"studentsUsername" => "user",
										"staffUsername" => "staff"),
  					 			  array("id" => 3,
  					 			  		"title" => "Ducks and Chickens",
  					 			  		"content" => "The ratio of the number of ducks to the number of chickens was 9 : 5. \n\nWhen 20 ducks and 22 chickens were added, the birds were distributed into groups of 7. In each group, there were 4 ducks. \n\nFind the number of birds at first.",
  					 			  		"status" => "open",
  					 			  		"subject" => "Maths",
  					 			  		"level" => "Primary",
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
  					 			  		"content" => "Consider the following. A hollow sphere of radius r is placed in a hollow hemispherical bowl of radius R, (R > r). The smaller sphere is given a small perturbation in its angle, and subsequently rolls without slipping in the bowl. The acceleration due to gravity is g. Find the angular frequency of oscillation.\n\n__[Clarification]__\nWhich solution is recommended?",
  					 			  		"status" => "clarify",
  					 			  		"answer" => "The final answer is \\[\\omega = \\sqrt{\\frac{5g}{7\\left(R-r \\right )}}\\]\n\nThe steps to obtain this answer is rather complicated. Please refer to the documents below for reference.",
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
  					 			  								array("type" => "answer", "fileName" => "Working.pdf"))),
								  array("id" => 8,
								  		"title" => "Cheryl's Birthday",
								  		"content" => "Albert and Bernard just became friends with Cheryl, and they want to know when her birthday is. Cheryl gives them a list of 10 possible dates:\n\n| |\n| - |\n| | 15 May | 16 May | | | 19 May |\n| | | | 17 June | 18 June | |\n| 14 July | | 16 July | | | |\n| 14 August | 15 August | | 17 August | | |\n\nCheryl then tells Albert and Bernard separately the month and the day of her birthday respectively.\n\nAlbert: I don't know when Cheryl's birthday is, but I know that Bernard doesn't know too.\nBernard: At first I don't know when Cheryl's birthday is, but I know now.\nAlbert: Then I also know when Cheryl's birthday is.\n\nSo when is Cheryl's birthday?",
								  		"status" => "answered",
								  		"answer" => "Cheryl's birthday is on `July 16`.\n\n> Albert: I don’t know when Cheryl’s birthday is, but I know that Bernard doesn’t know too.\n\nAlbert knows only the month, and Bernard knows only the day.\nIf the day was to be 18 or 19, Bernard will know the full date immediately, as they only appear once. Since Albert is confident that Bernard does not know the date, the month told to him must not include 18 or 19, this leaves us with\n\n| |\n| - |\n| 14 July | | 16 July | |\n| 14 August | 15 August | | 17 August | \n\nBoth Bernard now knows the month is either July or August.\n\n> Bernard: At first I don’t know when Cheryl’s birthday is, but now I know.\n\nFrom this we can rule out both `14 July` and `14 August`, since if the day was 14, it would be impossible for Bernard to deduce the date.\n\n> Albert: Then I also know when Cheryl’s birthday is.\n\nThis gives us `16 July` since Albert is only able to rule out 14, but could deduce the final date. This means that the month has to be July, or he will not be able to determine between `15 August` and `17 August` as the final date.",
								  		"clarificationCount" => 0,
								  		"subject" => "Maths",
								  		"rating" => "5",
								  		"level" => "O-Levels",
								  		"serviceLevel" => 1,
								  		"answerTime" => "2015-06-10 14:48:13",
								  		"studentsUsername" => "Jack",
								  		"staffUsername" => "staff"));

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
		public static function staffOpenToAll($staff){
			$subjects = User::getStaff($staff)['subjects'];
			return array_filter(self::$questions, function($val) use($subjects){
				return self::unaccepted($val) && self::filterBySubject($val, $subjects);
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

		public static function searchAnswered($term){
			$archives = array_filter(self::$questions, function($val){
				return self::answered($val['status']);
			});

			if(!empty($term)){
				return array_filter($archives, function($qns) use($term){
					return self::filterByTerm($qns, $term);
				});
			} else {
				return $archives;
			}
		}

		public static function staffGetQuestion($ID, $staff){
			$subjects = User::getStaff($staff)['subjects'];

			$eligible = array_filter(self::$questions , function($val) use($staff, $subjects){
				return 	(self::unaccepted($val) && self::filterBySubject($val, $subjects)) || 
						(isset($val['staffUsername']) && $val['staffUsername'] == $staff) || 
						self::answered($val['status']);
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

		public static function filterBySubject($question, $subjects){
			return in_array($question['subject'], $subjects);
		}
	}
?>
