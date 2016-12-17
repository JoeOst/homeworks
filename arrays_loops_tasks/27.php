<?php 
	$row = 12;
	$colors = ['red','yellow','blue','gray','maroon','brown','green'];
	echo "<table>";
	while ($row > 0) {
		echo "<tr>";
		$cols = 20;
		while ($cols > 0) {
			$color = $colors[array_rand($colors,1)];
			$num = rand();
			echo "<td style = 'background-color: {$color}'>{$num}</td>";
			$cols--;
		}
		echo "</tr>";
		$row--;
	}
	echo "</table>";
?>