<?php 
	function speed($S, $t, $unitOfMeasurement = "km/h") {
		if ($unitOfMeasurement == "km/h") {
			$speed = round($S/$t,1);
			return("Speed of car: {$speed} km/h");
		} elseif ($unitOfMeasurement == "m/s") {
			$speed = ($S*1000)/($t*3600);
			$speed = round($speed,1);
			return("Speed of car: {$speed} m/s");
		}
	}

	echo speed(185,2, "m/s");
	echo "<br>";
	echo speed(185,2);
	echo "<br>";
	echo speed(492,12);
?>