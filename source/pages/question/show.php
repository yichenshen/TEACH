<?php
	require $_SERVER['DOCUMENT_ROOT']."/helpers/login.helper.php";

	$loggedInUser = getLogin("user");

	if(isset($loggedInUser)){
		$qID = $_GET["id"];

		require($_SERVER['DOCUMENT_ROOT']."/models/question.model.php");

		$question = Question::getQuestion($qID);

		$pageTitle = $question["title"]." - TEACH";
		$titleLabel = "Question";
		$loggedInUser = "User";

		$answered = Question::answered($question["status"]);

		$mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/question/show.layout.php";
	  	require($_SERVER['DOCUMENT_ROOT']."/layouts/shared/main.layout.php");
	} else{
		header("Location: /pages/account/login.php");
	}
?>
