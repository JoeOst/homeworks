<?php 
	if ($_POST['submit'] == 'Enter') {
		auth();
	}

	function auth() {
		$login = $_POST['login'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		if ($login == 'admin' && $password == 'admin' && $email == 'admin@admin') {
			setcookie('auth','ok');
			header("Location: index.php");
		} else {
			echo "Fail authorization!";
		}

	}
?>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<h3>Please login</h3>
	<form action="" method="post" class="form-inline">
<div class="form-group">
	<label for="login">Login:</label>
	<input type="text" name="login" id="login" class="form-control">
</div>
<div class="form-group">
	<label for="password">Password:</label>
	<input type="password" name="password" id="password" class="form-control">
</div>
<div class="form-group">
	<label for="email">Email:</label>
	<input type="email" name="email" id="email" class="form-control">
</div>
	<div class="form-group"> 
		<input type="submit" name="submit" class="btn btn-default" value="Enter">
	</div>
</form>

