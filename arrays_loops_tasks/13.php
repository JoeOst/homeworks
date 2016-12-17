<?php 
	$i = 1;
	echo "<table border = '1'>";
	while ($i <= 15) {
		echo "<tr>";
		$j = 1;
		while ($j <= 15) {
			echo "<td>" . $i*$j . "</td> ";
			$j++;
		}
		echo "</tr>";
		$i++;
	}
	echo "</table>";
?>
