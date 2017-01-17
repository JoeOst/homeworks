<?php 
	function whatNumber($num) {
		if ($num%2==0 && $num<0) {
			return("отрицательное четное число");
		} elseif ($num%2 && $num<0) {
			return("отрицательное нечетное число");
		} elseif ($num==0) {
			return("нулевое число");
		} elseif ($num%2==0 && $num>0) {
			return("положительное  четное число");
		} elseif ($num%2 && $num>0) {
			return("положительное нечетное число");
		}
	}

	echo whatNumber(100);
	echo "<br>";
	echo whatNumber(-51);
	echo "<br>";
	echo whatNumber(0);
?>