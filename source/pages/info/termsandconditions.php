<?php 
	require $_SERVER['DOCUMENT_ROOT']."/helpers/login.helper.php";

	$loggedInUser = getLogin("all");

	$pageTitle = "Terms and Condtions - TEACH";

	$termsAndConditions = file_get_contents($_SERVER['DOCUMENT_ROOT']."/resources/templates/terms_and_conditions.md");

	$mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/info/termsandconditions.layout.php";
	require($_SERVER['DOCUMENT_ROOT']."/layouts/shared/main.layout.php"); 
?>
