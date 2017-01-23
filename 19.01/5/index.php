<?php 
session_start();

if (!isset($_SESSION['LastVisit'])) {
	$_SESSION['LastVisit'] = time();
} else {
	$lastVisit = $_SESSION['LastVisit'];
	$_SESSION['LastVisit'] = time();
	$seconds = $_SESSION['LastVisit'] - $lastVisit;
	echo "Your last visiting was {$seconds} seconds ago.";
}


?>