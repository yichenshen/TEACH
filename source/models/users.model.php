<?php
	class User
	{
		static $users = array(array("username" => "user",
									"password" => "password",
									"balance" => 200,
									"fine" => 0));

		public static function getUser($username){
			$return = null;
			foreach (self::$users as $user) {
				if ($user["username"] == $username) {
					$return = $user;
				}
			}
			return $return;
		}
	}