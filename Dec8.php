<!DOCTYPE html>
<html>
<head>
	<title>Homework</title>
	<meta charset="utf-8">
</head>
<body>
	<pre>
	<?php 
		$a = 7;
		$b = 4;
		$c = 6;
		echo ($a+$b)."\n";
		echo ($a*$b)."\n";

		echo ($a**2 + $b**2)."\n";

		echo (($a+$b+$c)/3)."\n";

		echo ($a%3)."\n";
		echo ($a%5)."\n";

		echo ($a*1.3)."\n";
		echo ($a*2.2)."\n";

		echo ($a*0.4 + $b*0.84)."\n";
	?>
	</pre>
	
	<pre><?php 
		$name = 'Julia';
		$age = 21;

		echo "My name:  $name"; 
		echo "\n";
		echo "I am $age years old";
	?></pre>

	<pre>
	<?php 
		const CONSTANT = 'Hello';
		echo defined ('CONSTANT');
		echo "\n";
		echo CONSTANT;
		const CONSTANT = 5;
		echo "\n";
		echo CONSTANT;
	?>
	</pre>

	<?php 
		$age1 = 34;

		if ($age1 >= 18 && $age1 <=59) {
			echo "Вам еще работать и работать";
		} elseif ($age1 >59) {
			echo "Вам пора на пенсию";
		} elseif ($age1 >=1 && $age1 <= 17) {
			echo "Вам еще рано работать";
		} else {
			echo "Неизвестный возраст";
		}
	?>
</body>
</html>