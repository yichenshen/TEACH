<?php
	require $_SERVER['DOCUMENT_ROOT']."/helpers/login.helper.php";

	$loggedInUser = getLogin("staff");

	if(isset($loggedInUser)){
		$pageTitle = "Staff Dashboard - TEACH";
		$titleLabel = "Dashboard";

		$user = User::getUser($loggedInUser);

		require_once $_SERVER['DOCUMENT_ROOT']."/models/question.model.php";
		$questions = Question::staffAccepted($loggedInUser);

		$mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/staff/account/dashboard.layout.php";
		require($_SERVER['DOCUMENT_ROOT']."/layouts/shared/main.layout.php"); 	
	} else{
		header("Location: /pages/account/login.php");
	}
?>
