<!DOCTYPE html>
<html>
<head>
	<title>Gallerry</title>
	<meta charset="utf-8">
	<link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
</head>
<body>
<div class="container">
	<h1>Gallerry</h1>



<?php 
	$path = 'upload_pictures/';
	chdir($path);
	$pictures = glob('*');
	
	foreach ($pictures as  $picture) : ?>
		<img src="<?=$path . $picture; ?>" class = 'img-responsive img-thumbnail' width = "250px">
		<form action="download.php" method="post">
			<input type="hidden" name="picture" value="<?=$path . $picture; ?>">
			<input type="submit" name="download" value="Download" class='btn btn-default'>
		</form>
		
<?php endforeach;
?>
</div>
</body>
</html>
