<?php
	require $_SERVER['DOCUMENT_ROOT']."/helpers/login.helper.php";

	$loggedInUser = getLogin("staff");

	$qID = $_GET["id"];

	require($_SERVER['DOCUMENT_ROOT']."/models/question.model.php");

	$question = Question::staffGetQuestion($qID, $loggedInUser);

	if(isset($loggedInUser) && isset($question)){
		$pageTitle = $question["title"]." - TEACH";
		$titleLabel = "Question";

		$answered = Question::answered($question["status"]);
		$unaccepted = Question::unaccepted($question);

		$mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/staff/question/show.layout.php";
		require($_SERVER['DOCUMENT_ROOT']."/layouts/shared/main.layout.php"); 	
	} else{
		header("Location: /pages/account/login.php");
	}
?>
