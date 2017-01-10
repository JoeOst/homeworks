<?php 
	$arr = ['a', 'b', 'c', 'd', 'e'];
	function toUpperCase ($a) {
		return strtoupper($a);
	}
	print_r(array_map("toUpperCase", $arr));
?>