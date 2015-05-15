<?php
  $pageTitle = "Dashboard - TEACH";
  $titleLabel = "Dashboard";
  $loggedInUser = "User";

  $balance = 200;
  $fine = 0;

  require($_SERVER['DOCUMENT_ROOT']."/models/question.model.php");
  $questions = Question::getActiveQuestionsLabel();

  $mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/account/dashboard.layout.php";
  require($_SERVER['DOCUMENT_ROOT']."/layouts/shared/main.layout.php"); 
?>
