<?php 
	function closeToTen(int $num1, int $num2) {
		$a = abs(10-$num1);
		$b = abs(10-$num2);
		
		if ($a <= $b) {
			return "$num1 ближайшее к десяти";
		} else {
			return "$num2 ближайшее к десяти";
		}
	}

	echo closeToTen(256,-150);
?>