<?php 
	require_once $_SERVER['DOCUMENT_ROOT']."/models/user.model.php";

	function getLogin($accessRight){
		session_start();

		if (!isset($_SESSION['user']) || $_SESSION['user'] == "") {
			return null;
		}

		$loggedInUser = $_SESSION['user'];
		
		if(($accessRight == "user" && !User::isUser($loggedInUser)) 
			|| ($accessRight == "staff" && !User::isStaff($loggedInUser))){
			return null;
		}

		return $loggedInUser;
	}
?>