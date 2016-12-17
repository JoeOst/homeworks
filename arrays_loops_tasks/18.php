<?php 
	$days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
	foreach ($days as $day) {
		if ($day == "Saturday" || $day == "Sunday") {
			echo "<b>{$day}</b> <br>";
			continue;
		}
		echo "{$day} <br>";
	}
?>