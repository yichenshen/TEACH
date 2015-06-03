<?php
	require $_SERVER['DOCUMENT_ROOT']."/helpers/login.helper.php";

	$loggedInUser = getLogin("staff");

	if(isset($loggedInUser)){
		$pageTitle = "Question Archives - TEACH";
		$titleLabel = "Archive";

		$term = trim(isset($_GET['search']) ? $_GET['search'] : "");

		require_once $_SERVER['DOCUMENT_ROOT']."/models/question.model.php";
		$archives = Question::searchAnswered($term);

		$mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/staff/question/archive.layout.php";
		require($_SERVER['DOCUMENT_ROOT']."/layouts/shared/main.layout.php"); 	
	} else{
		header("Location: /pages/account/login.php");
	}
?>
