<?php 
	function even_or_odd($num) {
		if ($num % 2 == 0) {
			return("Number is even");
		} else
			return("Number is odd");
	}
	echo (even_or_odd(22));
?>