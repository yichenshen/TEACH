<?php
	$qID = $_GET["id"];

	include($_SERVER['DOCUMENT_ROOT']."/models/question.model.php");

	$question = Question::getQuestion($qID);

	$pageTitle = $question["title"]." - TEACH";
	$titleLabel = "Question";
	$loggedInUser = "User";

	$answered = Question::answered($question["status"]);

	$mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/question/show.layout.php";
  	include($_SERVER['DOCUMENT_ROOT']."/layouts/main.layout.php");
?>
