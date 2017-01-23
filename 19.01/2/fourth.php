<?php 
session_start();
$_SESSION['visited'][] = "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
?>
<b>Вы посетили такие страници:</b>
<ul>
	<?php foreach ($_SESSION['visited'] as $value) {
		echo("<li> {$value} </li>");
	} ?>
</ul>