<?php
	require $_SERVER['DOCUMENT_ROOT']."/helpers/login.helper.php";

	$loggedInUser = getLogin("all");

	$pageTitle = "Affiliates - TEACH";

	$affiliates = array(array("name" => "TWK Learning Center",
							  "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
							  "url" => "https://www.comp.nus.edu.sg/~tanwk/"),
						array("name" => "Tangent World Knowledge",
							  "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
							  "url" => "https://sg.linkedin.com/in/weekektan"),
						array("name" => "PopOut Tuition Center",
							  "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
							  "url" => "https://www.facebook.com/tanweekek/"),
						array("name" => "Cloud Nine Learning Center",
							  "desc" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
							  "url" => "http://www.cloudcommerce.sg/"));

	$mainContent = $_SERVER['DOCUMENT_ROOT']."/layouts/info/affiliates.layout.php";
	require($_SERVER['DOCUMENT_ROOT']."/layouts/shared/main.layout.php"); 
?>
