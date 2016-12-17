<?php 
	$i=1;
	while ($i <= 9) {
		$j = 1;
		while ( $j<= $i) {
			$draw .= "{$i}";
			$j++;
		}
		echo "{$draw} <br>";
		$draw = "";
		$i++;
	}
?>