<?php
  $pageTitle = "";
  $loggedInUser = "User";

  $balance = 200;
  $fine = 0;

  $questions = array(1 => array("title" => "Why did the chicken cross the road?", 
  								"status" => "new"), 
  					 2 => array("title" => "What is 1+1?",
  					 			"status" => ""));

  $mainContent = $_SERVER['DOCUMENT_ROOT']."/account/dashboard.layout.php";
  include($_SERVER['DOCUMENT_ROOT']."/templates/main.layout.php"); 
?>
