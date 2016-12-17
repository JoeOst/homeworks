<?php 
	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

	foreach ($arr as $value) {
		$count += 1;
		if ($count == 4) {
			echo "<br>";
			$count = 1;
		} elseif ($count == 3) {
			echo "{$value}";
			continue;
		} 
			echo "{$value}, ";
	}
?>