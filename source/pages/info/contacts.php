<?php
	require $_SERVER['DOCUMENT_ROOT']."/helpers/login.helper.php";

	$loggedInUser = getLogin("all");

	$pageTitle = "Contact Us - TEACH";
	$titleLabel = "Contacts";

	$mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/info/contacts.layout.php";
	require($_SERVER['DOCUMENT_ROOT']."/layouts/shared/main.layout.php"); 	
?>
