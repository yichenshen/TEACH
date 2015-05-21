<?php 
	$pageTitle = "Questions Index - TEACH";
	$titleLabel = "Questions";
	$loggedInUser = "User";

	$term = trim(isset($_GET['search']) ? $_GET['search'] : "");

	require($_SERVER['DOCUMENT_ROOT']."/models/question.model.php");
	$questions = Question::all();

	$mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/question/index.layout.php";
  	require($_SERVER['DOCUMENT_ROOT']."/layouts/shared/main.layout.php"); 
?>
