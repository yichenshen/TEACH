<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		require_once($_SERVER['DOCUMENT_ROOT']."/models/user.model.php");
		$user = User::getUser($_POST['username']);

		if(!isset($user) || $user['password'] != $_POST['password']){
			$error = "Invalid Username/Password!";			
		} else{
			session_start();
			$_SESSION['user'] = $user['username'];
			header("Location: /pages/account/dashboard.php");
		}
	}

	require $_SERVER['DOCUMENT_ROOT']."/helpers/login.helper.php";

	$loggedInUser = getLogin("user");

	if(isset($loggedInUser)){
		header("Location: /pages/account/dashboard.php");
	}

	$pageTitle = "Login - TEACH";
	$titleLabel = "Login";

	$mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/account/login.layout.php";
	require($_SERVER['DOCUMENT_ROOT']."/layouts/shared/main.layout.php"); 
?>
