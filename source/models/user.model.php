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
									"email" => "alice@teach.com"),
							  array("username" => "Alice",
							  		"password" => "wonderland",
							  		"email" => "staff@teach.com"));

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

		//TODO add staff list
		public static function isStaff($username){
			foreach (self::$staff as $s) {
				if($s["username"] == $username){
					return true;
				}
			}
			return false;
		}

		public static function rankStaffRating(){

			$staffRating = array();

			foreach (self::$staff as $s) {
				$questions = Question::staffAnswered($s['username']);

				$totalRating = 0;
				$totalQns = 0;

				foreach ($questions as $qns) {
					if(isset($qns['rating']) && $qns['rating'] != 0){
						$totalRating += $qns['rating'];
						$totalQns++;
					}
				}
				if($totalQns > 0){
					$staffRating[$s['username']] = 1.0 * $totalRating / $totalQns;
				} else{
					$staffRating[$s['username']] = 0;
				}
			}

			arsort($staffRating);

			return $staffRating;
		}

		public static function rankStaffAnswer(){
			$staffRating = array();

			foreach (self::$staff as $s) {
				$questions = Question::staffAnswered($s['username']);

				$staffRating[$s['username']] = count($questions);
			}

			arsort($staffRating);

			return $staffRating;
		}
	}
