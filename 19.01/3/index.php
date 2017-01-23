<?php 
	if (!isset($_COOKIE['auth'])) {
		header("Location: login.php");
	}

	if (isset($_COOKIE['auth']) == 'ok') : ?>
		<link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
			<form action='exit.php' method='post'>
				<input type='submit' name='exit' value='exit' class='btn btn-default'>
			</form>

			<form enctype="multipart/form-data" action="upload.php" method="post">
				<input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
				<div class="form-group">
					Picture:<input type="file" name="userfile" >
				</div>
				
				<div class="form-group">
					<input type='submit' name='send' value='Download pictures' class='btn btn-default'>
				</div>
				
			</form>
			<a href="picture.php"><button class='btn btn-default'>Show gallery</button></a>
			
<?php endif;
?>