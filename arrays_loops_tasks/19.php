<?php 
	$days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
	$day = 'Saturday';
	foreach ($days as $value) {
		if ($value == $day) {
			echo "<b>{$value}</b> <br>";
			continue;
		}
		echo "{$value} <br>";
	}
?>