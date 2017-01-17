<?php 
	function trafficLight($t) {
		if ($t%5 >= 0 && $t%5 < 3) {
			return("зеленый");
		} elseif ($t%5 >= 3 && $t%5 < 4) {
			return("желтый");
		} elseif ($t%5 >= 4 && $t%5 < 5) {
			return("красный");
		}
	}

	echo trafficLight(2.5);
	echo "<br>";
	echo trafficLight(3);
	echo "<br>";
	echo trafficLight(4);
	echo "<br>";
	echo trafficLight(5);
	echo "<br>";
	echo trafficLight(58);
	echo "<br>";
	echo trafficLight(29);