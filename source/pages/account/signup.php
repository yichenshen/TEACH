<?php
	require $_SERVER['DOCUMENT_ROOT']."/helpers/login.helper.php";

	$loggedInUser = getLogin("all");

	if(isset($loggedInUser)){
		header("Location: /pages/account/login.php");
	}

	$pageTitle = "Signup - TEACH";
	$titleLabel = "Signup";

	require $_SERVER['DOCUMENT_ROOT']."/models/level.model.php";
	$levels = Level::all();

	$mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/account/signup.layout.php";
	require($_SERVER['DOCUMENT_ROOT']."/layouts/shared/main.layout.php"); 
?>
