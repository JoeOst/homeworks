<?php 
	function sameNumber($num1, $num2, $num3) {
		if ($num1 === $num2 && $num1 === $num3 ) {
			return("{$num1} {$num2} {$num3}");
		} elseif ($num1 === $num2) {
			return("{$num1} {$num2}");
		} elseif ($num1 === $num3) {
			return("{$num1} {$num3}");
		} elseif ($num2 === $num3) {
			return("{$num2} {$num3}");
		} else {
			return("Одинаковых чисел нет");
		}
	}

	echo sameNumber(2,7,2);
	echo "<br>";
	echo sameNumber(9,9,9);
	echo "<br>";
	echo sameNumber(2,7,4);
?>