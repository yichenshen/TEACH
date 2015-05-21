<?php
	$pageTitle = "Fines - TEACH";
	$titleLabel = "Fines";

	$loggedInUser = "User";
	$balance = 200;
	$fine = 1;

	require($_SERVER['DOCUMENT_ROOT']."/models/question.model.php");
	$questions = Question::getFinedQuestionsLabel();

	$mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/account/fines.layout.php";
  	require($_SERVER['DOCUMENT_ROOT']."/layouts/shared/main.layout.php");
?>
