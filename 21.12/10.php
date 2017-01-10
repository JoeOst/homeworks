<?php
	function n_str($string, $n) {
		$return = mb_substr($string, 0, $n);
		return("{$return}...");
	}

	$string = "hello everyone";
	$string1 = "привет всем да будет вам счастье";
	echo n_str($string, 7);
	echo "<br>";
	echo n_str($string1, 15);
?>