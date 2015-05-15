<?php 
	$pageTitle = "Questions Index - TEACH";
	$titleLabel = "Questions";
	$loggedInUser = "User";

	require($_SERVER['DOCUMENT_ROOT']."/models/question.model.php");
	$questions = Question::allLabels();

	$mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/question/index.layout.php";
  	require($_SERVER['DOCUMENT_ROOT']."/layouts/shared/main.layout.php"); 
?>
