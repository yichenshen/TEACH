<?php
	require $_SERVER['DOCUMENT_ROOT']."/helpers/login.helper.php";

	$loggedInUser = getLogin("user");

	$qID = $_GET["id"];

	require_once $_SERVER['DOCUMENT_ROOT']."/models/question.model.php";

	$question = Question::getQuestion($qID, $loggedInUser);
	
	if(isset($loggedInUser) && isset($question)){

		$pageTitle = $question["title"]." - TEACH";
		$titleLabel = "Question";

		$answered = Question::answered($question["status"]);

		$mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/question/show.layout.php";
	  	require($_SERVER['DOCUMENT_ROOT']."/layouts/shared/main.layout.php");
	} else{
		header("Location: /pages/account/login.php");
	}
?>
