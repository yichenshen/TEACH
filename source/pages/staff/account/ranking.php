<?php
	require $_SERVER['DOCUMENT_ROOT']."/helpers/login.helper.php";

	$loggedInUser = getLogin("staff");

	if(isset($loggedInUser)){
		$pageTitle = "Staff Rankings - TEACH";
		$titleLabel = "Rankings";

		require_once $_SERVER['DOCUMENT_ROOT']."/models/user.model.php";

		$rankRating = User::rankStaffRating();
		$rankAnswer = User::rankStaffAnswer();

		$mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/staff/account/ranking.layout.php";
		require $_SERVER['DOCUMENT_ROOT']."/layouts/shared/main.layout.php" ; 	
	} else{
		header("Location: /pages/account/login.php");
	}
?>
