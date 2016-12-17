<?php 
	$arr = [];
	for ($i=0; $i < 15; $i++) { 
		$arr[] = rand();
	}
	print_r($arr);
	$max = max($arr);
	$min = min($arr);
	
	$max_key = array_search($max,$arr);
	$min_key = array_search($min, $arr);
	echo "<br>";
	echo "[$min , $max]";
	$arr[$max_key] = $min;
	$arr[$min_key] = $max;
	echo "<br>";
	print_r($arr);
?>