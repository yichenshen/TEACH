<?php
	require $_SERVER['DOCUMENT_ROOT']."/helpers/login.helper.php";

	$loggedInUser = getLogin("all");

	$pageTitle = "TEACH";

	$mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/index.layout.php";
	require($_SERVER['DOCUMENT_ROOT']."/layouts/shared/main.layout.php"); 
?>
