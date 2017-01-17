<?php 
	function whichCoordinateQuarter($x, $y) {
		if ($x > 0 && $y >0) {
			return("1");
		} elseif ($x > 0 && $y < 0) {
			return("2");
		} elseif ($x < 0 && $y < 0) {
			return("3");
		} elseif ($x < 0 && $y > 0) {
			return("4");
		}
	}

	echo whichCoordinateQuarter(2,-7);
	echo "<br>";
	echo whichCoordinateQuarter(-11,-5);
?>