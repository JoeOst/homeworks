<?php session_start(); ?>

<form action="" method="post">
	Enter your name:<input type="text" name="username">
	<input type="submit" name="submit" value="Send">
</form>
<a href="hello.php"><button>Hello</button></a>

<?php 
	if ($_POST) {
		$_SESSION['name'] = $_POST['username'];
	}

?>