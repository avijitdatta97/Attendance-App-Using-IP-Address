<?php

session_start();

require_once("bdconnect.php");

if(isset($_REQUEST["search_name"]) && isset($_REQUEST["search_month"]) && isset($_REQUEST["search_year"]))
	{
		$_SESSION['search_name'] = $_REQUEST["search_name"];
		$_SESSION['search_month'] = $_REQUEST["search_month"];
		$_SESSION['search_year'] = $_REQUEST["search_year"];
		header('location:show_data.php');
	}
	else{
		echo"<script>
					alert('Enter All Input. Please try again..!');
					window.location = 'search_data.php';
				</script>";
	}
?>