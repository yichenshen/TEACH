<?php

	require_once $_SERVER['DOCUMENT_ROOT']."/models/question.model.php";

	class User
	{
		static $users = array(array("username" => "user",
									"password" => "password",
									"balance" => 205.50,
									"fine" => 1,
									"level" => "A-Levels",
									"email" => "user@teach.com"),
							  array("username" => "Jack",
									"password" => "jackjack",
									"balance" => 98.00,
									"fine" => 0,
									"level" => "O-Levels",
									"email" => "jack@hotmail.com"));
		static $staff = array(array("username" => "staff",
									"password" => "password",
									"email" => "staff@teach.com",
									"subjects" => array("Physics", "Chemistry", "Maths")),
							  array("username" => "Alice",
							  		"password" => "wonderland",
							  		"email" => "alice@teach.com",
							  		"subjects" => array("Biology", "Physics")));

		public static function getUser($username){
			foreach (self::$users as $user) {
				if ($user["username"] == $username) {
					return $user;
				}
			}

			return null;
		}

		public static function getStaff($username){
			foreach (self::$staff as $s) {
				if($s["username"] == $username){
					return $s;
				}
			}

			return null;
		}

		public static function isUser($username){
			foreach (self::$users as $user) {
				if ($user["username"] == $username) {
					return true;
				}
			}
			return false;
		}

		public static function isStaff($username){
			foreach (self::$staff as $s) {
				if($s["username"] == $username){
					return true;
				}
			}
			return false;
		}

		public static function staffAverageRating($staff){
			$questions = Question::staffAnswered($staff);

			$totalRating = 0;
			$totalQns = 0;

			foreach ($questions as $qns) {
				if(isset($qns['rating']) && $qns['rating'] != 0){
					$totalRating += $qns['rating'];
					$totalQns++;
				}
			}

			if($totalQns > 0){
				return 1.0 * $totalRating / $totalQns;
			} else {
				return 0;
			}
		}

		public static function staffQuestionAnswered($staff){
			return count(Question::staffAnswered($staff));
		}

		public static function rankStaffRating(){

			$staffRating = array();

			foreach (self::$staff as $s) {
				$staffRating[$s['username']] = self::staffAverageRating($s['username']);
			}

			arsort($staffRating);

			return $staffRating;
		}

		public static function rankStaffAnswer(){
			$staffRating = array();

			foreach (self::$staff as $s) {
				$staffRating[$s['username']] = self::staffQuestionAnswered($s['username']);
			}

			arsort($staffRating);

			return $staffRating;
		}
	}
