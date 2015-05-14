<?php 
	$pageTitle = "Questions Index - TEACH";
	$titleLabel = "Questions";
	$loggedInUser = "User";

	include($_SERVER['DOCUMENT_ROOT']."/models/question.model.php");
	$questions = Question::allLabels();

	$mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/question/index.layout.php";
  	include($_SERVER['DOCUMENT_ROOT']."/layouts/main.layout.php"); 
?>
