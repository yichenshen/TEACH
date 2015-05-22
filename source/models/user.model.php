<?php
	class User
	{
		static $users = array(array("username" => "user",
									"password" => "password",
									"balance" => 200,
									"fine" => 1));

		public static function getUser($username){
			$return = null;
			foreach (self::$users as $user) {
				if ($user["username"] == $username) {
					$return = $user;
				}
			}
			return $return;
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
			return false;
		}
	}