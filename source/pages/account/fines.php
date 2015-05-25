<?php
	require $_SERVER['DOCUMENT_ROOT']."/helpers/login.helper.php";

	$loggedInUser = getLogin("user");

	if(isset($loggedInUser)){
		$pageTitle = "Fines - TEACH";
		$titleLabel = "Fines";

		$user = User::getUser($loggedInUser);
		$balance = $user['balance'];
		$fine = $user['fine'];

		require($_SERVER['DOCUMENT_ROOT']."/models/question.model.php");
		$questions = Question::getFinedQuestionsLabel($loggedInUser);

		$mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/account/fines.layout.php";
	  	require($_SERVER['DOCUMENT_ROOT']."/layouts/shared/main.layout.php");
	} else{
		header("Location: /pages/account/login.php");
	}
?>
