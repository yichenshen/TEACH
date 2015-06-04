<?php
	require $_SERVER['DOCUMENT_ROOT']."/helpers/login.helper.php";

	$loggedInUser = getLogin("all");

	$pageTitle = "About Us - TEACH";
	$titleLabel = "About";

	$mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/info/about.layout.php";
	require($_SERVER['DOCUMENT_ROOT']."/layouts/shared/main.layout.php"); 
?>
