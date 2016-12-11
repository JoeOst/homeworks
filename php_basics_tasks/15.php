<!DOCTYPE html>
<html>
<head>
	<title>Exercise 15</title>
	<meta charset="utf-8">
</head>
<body>
<form action="" method="post">
	Введите первое число: <input type="number" name="number_a">
	Введите второе число: <input type="number" name="number_b">
	Введите операцию: 
	<select name="operation">
		<option>+</option>
		<option>-</option>
		<option>*</option>
		<option>/</option>
		<option>%</option>
	</select>
	<input type="submit" name="submit" value="Calculate">
</form>
<pre>
	<?php 
	$a = $_POST['number_a'];
	$b = $_POST['number_b'];
	$operator = $_POST['operation'] ;

	switch ($operator) {
		case '+':
			echo "$a + $b = ".($a+$b)."\n";
			break;

		case '-':
			echo "$a - $b = ".($a-$b)."\n";
			break;
		
		case '/':
			if ($b == 0) {
				echo "На ноль делить нельзя";
			} else {
				echo "$a + $b = ".($a+$b)."\n";
			}
			break;

		case '*':
			echo "$a * $b = ".($a*$b)."\n";
			break;

		case '%':
			echo "$a % $b = ".($a%$b)."\n";
			break;

		default:
			echo "Проверьте правильность ввода данных";
			break;
	}
?>
</pre>
</body>
</html>