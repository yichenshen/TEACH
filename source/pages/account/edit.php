<?php
	require $_SERVER['DOCUMENT_ROOT']."/helpers/login.helper.php";

	$loggedInUser = getLogin("user");

	if(isset($loggedInUser)){
		$pageTitle = "Account Settings - TEACH";
		$titleLabel = "Account";

		$user = User::getUser($loggedInUser);
		$email = $user['email'];

		require_once $_SERVER['DOCUMENT_ROOT']."/models/level.model.php";
		$levels = Level::all();
		$defaultLevel = Level::getID(User::getUser($loggedInUser)['level']);

		$mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/account/edit.layout.php";
		require($_SERVER['DOCUMENT_ROOT']."/layouts/shared/main.layout.php"); 	
	} else{
		header("Location: /pages/account/login.php");
	}
?>
