<?php
	require $_SERVER['DOCUMENT_ROOT']."/helpers/login.helper.php";

	$loggedInUser = getLogin("user");

	if(isset($loggedInUser)){
		$pageTitle = "Dashboard - TEACH";
		$titleLabel = "Dashboard";

		$user = User::getUser($loggedInUser);
		$balance = $user['balance'];
		$fine = $user['fine'];
		$email = $user['email'];

		require_once $_SERVER['DOCUMENT_ROOT']."/models/question.model.php";
		$disputeNum = count(Question::getFinedQuestionsLabel($loggedInUser));
		$questions = Question::getActiveQuestionsLabel($loggedInUser);

		$mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/account/dashboard.layout.php";
		require($_SERVER['DOCUMENT_ROOT']."/layouts/shared/main.layout.php"); 	
	} else{
		header("Location: /pages/account/login.php");
	}
?>
