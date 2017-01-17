<?php 
	function generate_key($arr) {
		$key = $arr;
		shuffle($key);
		$cypherKey =array_combine($arr,$key);
		return $cypherKey;
	}

	function cypher($str, $arr) {
		return strtr($str,$arr);
	}

	function decipher($str, $arr) {
		$arr = array_flip($arr);
		return strtr($str, $arr);
	}

	$alphabet = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',];
	
	
	$string = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
?>
<pre>
<?php 
	
	print_r($key = generate_key($alphabet));
	echo $cypherString = cypher($string, $key);
	echo "<br>";
	echo decipher($cypherString, $key);
?>
</pre>