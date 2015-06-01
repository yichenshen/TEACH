<?php
	class User
	{
		static $users = array(array("username" => "user",
									"password" => "password",
									"balance" => 205.50,
									"fine" => 1,
									"level" => "A-Levels"),
							  array("username" => "Jack",
									"password" => "jackjack",
									"balance" => 98.00,
									"fine" => 0,
									"level" => "O-Levels"));
		static $staff = array(array("username" => "staff",
									"password" => "password"));

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
	}
