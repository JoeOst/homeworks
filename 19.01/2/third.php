<?php 
session_start();
$_SESSION['visited'][] = "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
?>
<a href="fourth.php">Fourth page</a>