<?php
	class ServiceLevel
	{
		static $serviceLevels = array(	array(	"id" => 1,
												"name" => "Normal",
												"costMultiplier" => 1,
												"answerTime" => "72:00:00"),
										array(	"id" => 2,
												"name" => "Premium",
												"costMultiplier" => 1.5,
												"answerTime" => "24:00:00"),
										array(	"id" => 3,
												"name" => "Priority",
												"costMultiplier" => 2,
												"answerTime" => "12:00:00"));

		public static function all(){
			return self::$serviceLevels;
		}

		public static function getServiceLevel($id){
			foreach (self::$serviceLevels as $sl) {
				if ($sl["id"] == $id) {
					return $sl;
				}
			}

			return null;
		}
	}