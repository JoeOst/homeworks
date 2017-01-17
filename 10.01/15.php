<?php 
	function dayInYear($year) {
		if (($year%4 == 0 && $year%100 != 0) || ($year%400 == 0)){
			return("Количество дней в году: 365");
		} else
			return("Количество дней в году: 366");
	}

	echo dayInYear(1600);
	echo "<br>";
	echo dayInYear(2014);
	echo "<br>";
	echo dayInYear(2016);
?>