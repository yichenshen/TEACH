<?php 
	require $_SERVER['DOCUMENT_ROOT']."/helpers/login.helper.php";

	$loggedInUser = getLogin("staff");

	$qID = $_GET["id"];

	require($_SERVER['DOCUMENT_ROOT']."/models/question.model.php");

	$question = Question::staffGetQuestion($qID, $loggedInUser);

	if(isset($loggedInUser) && isset($question) && !Question::unaccepted($question)){
		$pageTitle = "Edit - TEACH";
		$titleLabel = "Answer";

		$answer = isset($question['answer'])? $question['answer'] : "";

		require $_SERVER['DOCUMENT_ROOT']."/models/level.model.php";
		$levels = Level::all();
		$defaultLevel = Level::getID($question['level']);

		$mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/staff/question/edit.layout.php";
		require($_SERVER['DOCUMENT_ROOT']."/layouts/shared/main.layout.php"); 	
	} else{
		header("Location: /pages/account/login.php");
	}
?>
