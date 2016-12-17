<!DOCTYPE html>
<html>
<head>
	<title>Task 23</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="" method="post">
		Введите число:<input type="number" name="number" placeholder="Введите число">
		<input type="submit" name="submit" value="Сумма цифр">
	</form>
	<?php 
		$number = $_POST['number'];
		$number_array = str_split($number);
		foreach ($number_array as $num) {
			$sum += $num;
		}
		if ($sum) {
			echo "$sum";
		}
	?>
</body>
</html>