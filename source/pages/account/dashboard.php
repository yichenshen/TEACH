<?php
  $pageTitle = "Dashboard - TEACH";
  $loggedInUser = "User";

  $balance = 200;
  $fine = 0;

  include($_SERVER['DOCUMENT_ROOT']."/models/question.model.php");
  $questions = Question::getActiveQuestionsLabel();

  $mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/account/dashboard.layout.php";
  include($_SERVER['DOCUMENT_ROOT']."/layouts/main.layout.php"); 
?>
