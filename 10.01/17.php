<?php 
	function anotherNumber($a, $b, $c) {
		if ($a != $b && $a != $c) {
			return("1");
		} elseif ($b != $a && $b != $c) {
			return("2");
		} elseif ($c != $a && $c != $b) {
			return("3");
		}
	}

	echo anotherNumber(4,8,8);
	echo "<br>";
	echo anotherNumber(2,2,6);
?>