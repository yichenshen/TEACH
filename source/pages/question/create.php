<?php
	require $_SERVER['DOCUMENT_ROOT']."/helpers/login.helper.php";

	$loggedInUser = getLogin("user");

	if(isset($loggedInUser)){
		$pageTitle = "Ask a Question!";
		$titleLabel = "Ask";

		require $_SERVER['DOCUMENT_ROOT']."/models/subject.model.php";
		$subjects = Subject::all();

		require $_SERVER['DOCUMENT_ROOT']."/models/level.model.php";
		$levels = Level::all();
		$defaultLevel = Level::getID(User::getUser($loggedInUser)['level']);

		require $_SERVER['DOCUMENT_ROOT']."/models/service.model.php";
		$serviceLevels = ServiceLevel::all();

		$mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/question/create.layout.php";
		require($_SERVER['DOCUMENT_ROOT']."/layouts/shared/main.layout.php");
	} else{
		header("Location: /pages/account/login.php");
	}
?>
