<?php 
	function checkInterval($num) {
		if ($num>=50 && $num<=100) {
			return("Число {$num} содержится в интервале.");
		} else {
			return("Число {$num} не  содержится в интервале.");
		}
	}

	echo checkInterval(78);
	echo "<br>";
	echo checkInterval(5);
?>