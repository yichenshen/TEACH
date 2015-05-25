<?php
	if($_SERVER['REQUEST_METHOD']=="POST"){
		require_once($_SERVER['DOCUMENT_ROOT']."/models/user.model.php");

		if(User::isUser($_POST['username'])){
			$user = User::getUser($_POST['username']);
		} elseif (User::isStaff($_POST['username'])) {
			$user = User::getStaff($_POST['username']);
		}

		if(!isset($user) || $user['password'] != $_POST['password']){
			$error = "Invalid Username/Password!";			
		} else{
			session_start();
			$_SESSION['user'] = $user['username'];
			header("Location: /pages/account/login.php");
		}
	}

	require $_SERVER['DOCUMENT_ROOT']."/helpers/login.helper.php";

	if(null !== getLogin("user")){
		header("Location: /pages/account/dashboard.php");
	}elseif(null !== getLogin("staff")){
		header("Location: /pages/staff/account/dashboard.php");
	}else{
		$pageTitle = "Login - TEACH";
		$titleLabel = "Login";

		$mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/account/login.layout.php";
		require($_SERVER['DOCUMENT_ROOT']."/layouts/shared/main.layout.php"); 
	}
?>
