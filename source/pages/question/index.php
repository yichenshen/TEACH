<?php 
	$pageTitle = "Questions Index - TEACH";
	$titleLabel = "Questions";
	$loggedInUser = "User";


	require($_SERVER['DOCUMENT_ROOT']."/models/question.model.php");
	$search = trim(isset($_GET['search'])? $_GET['search'] : "");
	if ($search == "") {
		$questions = Question::allLabels();
	} else{
		$questions = Question::searchQuestions($search);
	}

	$mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/question/index.layout.php";
  	require($_SERVER['DOCUMENT_ROOT']."/layouts/shared/main.layout.php"); 
?>
