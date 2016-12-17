<?php 
	$arr = [26, 17, 136, 12, 79, 15];
	foreach ($arr as $value) {
		$square = $value ** 2;
		$result += $square;
	}
	echo "Сумма квадратов: {$result}";
?>