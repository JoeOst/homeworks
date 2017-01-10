<?php 
	function counter($array) {
		$count = 0;
		foreach ($array as $value) {
			$count++;
		}
		return($count);
	}
	$arr = range(1,96);
	echo (counter($arr));
?>