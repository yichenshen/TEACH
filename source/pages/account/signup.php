<?php
	$pageTitle = "Signup - TEACH";
	$titleLabel = "Signup";

	require $_SERVER['DOCUMENT_ROOT']."/models/level.model.php";
	$levels = Level::all();

	$mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/account/signup.layout.php";
	require($_SERVER['DOCUMENT_ROOT']."/layouts/shared/main.layout.php"); 
?>
