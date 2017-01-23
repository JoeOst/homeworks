<?php 
session_start();
	$userName = $_SESSION['name'];
	echo "Привет, $userName!";

	
?>