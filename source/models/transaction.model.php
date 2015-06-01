<?php
	class Transaction
	{
		//Dummy data
		static $transactions = array(array(	"code" => 5,
											"type" => "VISA",
											"extID" => "00023124237",
											"amount" => 100.00,
											"createTime" => "2015-05-01 12:23:11",
											"studentUsername" => "Jack"),
									array(	"code" => 4,
											"type" => "Paypal",
											"extID" => "VADE0B248932",
											"amount" => 10.00,
											"createTime" => "2015-05-31 12:39:12",
											"studentUsername" => "user"),
									array(	"code" => 3,
									  		"type" => "MasterCard",
									  		"extID" => "000006248627",
									  		"amount" => 100.00,
									  		"createTime" => "2015-05-29 22:14:51",
									  		"studentUsername" => "user"),
									array(	"code" => 2,
									  		"type" => "Refund",
									  		"amount" => 1.00,
									  		"createTime" => "2015-05-26 17:41:40",
									  		"studentUsername" => "user"),
									array(	"code" => 1,
									  		"type" => "Coupon",
									  		"amount" => 100.00,
									  		"extID" => "def3242sdsd2",
											"createTime" => "2015-05-02 10:32:26",
											"studentUsername" => "user"));

		public static function all($user){
			return array_filter(self::$transactions, function($t) use($user){
				return $t['studentUsername'] == $user;
			});
		}
	}
?>
