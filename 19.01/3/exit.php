<?php 
	if ($_POST['auth'] == 'ok') {
	setcookie('auth','',time()-3600);
}
header("Location: login.php");
?>