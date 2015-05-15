<?php
	$qID = $_GET["id"];

	require($_SERVER['DOCUMENT_ROOT']."/models/question.model.php");

	$question = Question::getQuestion($qID);

	$pageTitle = $question["title"]." - TEACH";
	$titleLabel = "Question";
	$loggedInUser = "User";

	$answered = Question::answered($question["status"]);

	$mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/question/show.layout.php";
  	require($_SERVER['DOCUMENT_ROOT']."/layouts/shared/main.layout.php");
?>
