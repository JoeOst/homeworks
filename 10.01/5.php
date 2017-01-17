<?php 
	function palindrome($str) {
		$str = strtolower($str);
		$str = preg_replace('~[^-a-zA-Z0-9_]+~u', '', $str);
		$text = strrev($str);
		if ($str == $text) {
			return("This string is palindrome <br>");
		} else {
			return("It isn't palindrome <br>");
		}
	}

	echo palindrome("Was it a car or a cat I saw");
	echo palindrome("A palindrome is a word, phrase, number, or other sequence of characters which reads the same backward or forward");

?>