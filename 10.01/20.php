<?php 
	function whatNumeric($num) {
		$length = strlen($num);
		if ($num <= 999 && $num >=1) {
			if ($length == 1) {
				if ($num%2) {
					return("нечетное однозначное число");
				} else {
					return("четное однозначное число");
				}
			}
			if ($length == 2) {
				if ($num%2) {
					return("нечетное двузначное  число");
				} else {
					return("четное двузначное  число");
				}
			}
			if ($length == 3) {
				if ($num%2) {
					return("нечетное трехзначное  число");
				} else {
					return("четное трехзначное  число");
				}
			}
		}
	}

	echo whatNumeric(100);
	echo "<br>";
	echo whatNumeric(51);
	echo "<br>";
	echo whatNumeric(8);
	echo "<br>";
	echo whatNumeric(2589);
?>