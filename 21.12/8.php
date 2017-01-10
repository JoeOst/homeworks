<?php 
	function what_year($year) {
		if (($year%4 == 0 && $year%100 != 0) || ($year%400 == 0)){
			return("This is a leap year");
		} else
			return("This is an ordinary year");
	}

	echo what_year(1600);
?>