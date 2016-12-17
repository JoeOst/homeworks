<?php 
	$arr = [];
	for ($i=0; $i <= 15; $i++) { 
		$arr[] = rand(1,100);
	}
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	
	$s = 1;
	foreach ($arr as $key => $value) {
		if ($key%2 == 0) {
			$s *= $value;
		} else {
			$n .= $value . ", ";
		}
	}
	echo "Произведение элементов с паным индексом: {$s} <br>";
	echo "Элементы с непарным индексом: {$n}";
?>