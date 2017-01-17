<?php 
	function percentCorection(array $arr, $percent) {
		if ($percent<0) {
			return("Your enter incorrect percent(it can't be less then zero). Please, fix it!");
		}
		foreach ($arr as $key => $value) {
			$value = $percent*$value;
			$arr[$key] =$value;

		}
		return $arr;
	}
	echo "<pre>";
	print_r(percentCorection([5, 6.5, 10, 3.355, 400, 9.43, 45, 9.78, 468, 0.78, 15, 47, 233, 555, 798.6666], 0.64));
	echo "</pre>";
?>