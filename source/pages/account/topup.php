<?php

	require $_SERVER['DOCUMENT_ROOT']."/helpers/login.helper.php";

	$loggedInUser = getLogin("user");

	if(isset($loggedInUser)){
		$pageTitle = "Account Topup - TEACH";
		$titleLabel = "Topup";

		$balance = User::getUser($loggedInUser)['balance'];

		$mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/account/topup.layout.php";
		require($_SERVER['DOCUMENT_ROOT']."/layouts/shared/main.layout.php"); 
	} else{
		header("Location: /pages/account/login.php");
	}

?>
