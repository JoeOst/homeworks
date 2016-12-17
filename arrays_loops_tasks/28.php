<?php 
	echo "<table border = '1'>";
	for ($i=1; $i <=20 ; $i++) { 
		echo "<tr>";
		for ($j=1; $j <=20 ; $j++) { 
			echo "<td>" . $i*$j . "</td> ";
		}
		echo "</tr>";
	}
	echo "</table>";
?>