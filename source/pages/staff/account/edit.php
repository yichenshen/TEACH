<?php
	require $_SERVER['DOCUMENT_ROOT']."/helpers/login.helper.php";

	$loggedInUser = getLogin("staff");

	if(isset($loggedInUser)){
		$pageTitle = "Account Settings - TEACH";
		$titleLabel = "Account";

		$user = User::getStaff($loggedInUser);
		$email = $user['email'];

		$mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/staff/account/edit.layout.php";
		require($_SERVER['DOCUMENT_ROOT']."/layouts/shared/main.layout.php"); 	
	} else{
		header("Location: /pages/account/login.php");
	}
?>