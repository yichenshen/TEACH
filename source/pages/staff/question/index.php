<?php
	require $_SERVER['DOCUMENT_ROOT']."/helpers/login.helper.php";

	$loggedInUser = getLogin("staff");

	if(isset($loggedInUser)){
		$pageTitle = "Questions Finder - TEACH";
		$titleLabel = "Finder";

		$term = trim(isset($_GET['search']) ? $_GET['search'] : "");

		require_once $_SERVER['DOCUMENT_ROOT']."/models/question.model.php";
		$acceptedQuestions = Question::staffAccepted($loggedInUser);
		$answeredQuestions = Question::staffAnswered($loggedInUser);
		$openQuestions = Question::staffOpenToAll($loggedInUser);

		$mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/staff/question/index.layout.php";
		require($_SERVER['DOCUMENT_ROOT']."/layouts/shared/main.layout.php"); 	
	} else{
		header("Location: /pages/account/login.php");
	}
?>
