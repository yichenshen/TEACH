<?php
	require $_SERVER['DOCUMENT_ROOT']."/helpers/login.helper.php";

	$loggedInUser = getLogin("user");

	if(isset($loggedInUser)){
		$pageTitle = "Questions Index - TEACH";
		$titleLabel = "Questions";

		$term = trim(isset($_GET['search']) ? $_GET['search'] : "");

		require($_SERVER['DOCUMENT_ROOT']."/models/question.model.php");
		$questions = Question::all();

		$mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/question/index.layout.php";
	  	require($_SERVER['DOCUMENT_ROOT']."/layouts/shared/main.layout.php"); 
	} else{
		header("Location: /pages/account/login.php");
	} 
?>
