<?php

	require $_SERVER['DOCUMENT_ROOT']."/helpers/login.helper.php";

	$loggedInUser = getLogin("user");

	if(isset($loggedInUser)){
		$pageTitle = "Transactions - TEACH";
		$titleLabel = "Transactions";

		$balance = User::getUser($loggedInUser)['balance'];

		require $_SERVER['DOCUMENT_ROOT']."/models/transaction.model.php";
		$transactions = Transaction::all($loggedInUser);

		$mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/account/transactions.layout.php";
		require($_SERVER['DOCUMENT_ROOT']."/layouts/shared/main.layout.php"); 
	} else{
		header("Location: /pages/account/login.php");
	}
?>
