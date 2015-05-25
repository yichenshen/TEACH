<?php
	class User
	{
		static $users = array(array("username" => "user",
									"password" => "password",
									"balance" => 200,
									"fine" => 1),
							  array("username" => "Jack",
									"password" => "jackjack",
									"balance" => 100,
									"fine" => 0));
		static $staff = array(array("username" => "staff",
									"password" => "password"));

		public static function getUser($username){
			$return = null;
			foreach (self::$users as $user) {
				if ($user["username"] == $username) {
					$return = $user;
				}
			}
			return $return;
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