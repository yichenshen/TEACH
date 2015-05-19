<?php
	$pageTitle = "Ask a Question!";
	$titleLabel = "Ask";

	$loggedInUser = "User";

	require $_SERVER['DOCUMENT_ROOT']."/models/subject.model.php";
	$subjects = Subject::all();

	require $_SERVER['DOCUMENT_ROOT']."/models/level.model.php";
	$levels = Level::all();
	$defaultLevel = 3;

	$mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/question/create.layout.php";
	require($_SERVER['DOCUMENT_ROOT']."/layouts/shared/main.layout.php");
?>
