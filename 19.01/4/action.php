<?php 
if ($_POST) {
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$phonenumber = $_POST['phonenumber'];
}
	

	
	setcookie('user[name]',$name);
	setcookie('user[surname]',$surname);
	setcookie('user[phonenumber]',$phonenumber);
	
?>