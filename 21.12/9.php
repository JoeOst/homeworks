<?php 
	function even($arr)
	{
	    return(!($arr%2));
	}

	$array = range(12, 26);

	print_r(array_filter($array, "even"));
?>