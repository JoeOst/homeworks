<?php 
	$number = 54899627967918;
	$num = 6;
	$count = 0;
	$number_array = str_split($number);
	foreach ($number_array as $value) {
		if ($value == $num) {
			$count++;
		}
	}
	echo "Число {$num} входит в число &quot;{$number}&quot; {$count} раз(a).";
?>