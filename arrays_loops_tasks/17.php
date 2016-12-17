<?php 
	$months = ['January', 'February', 'March', 'April',	'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
	$month = 'December';
	foreach ($months as $mon) {
		if ($mon == $month) {
			echo "<b>{$mon}</b> <br>";
			continue;
		}
		echo "{$mon} <br>";
	}
?>