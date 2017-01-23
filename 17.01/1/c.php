<?php 
include_once('1.php');
//c пункт
touch('cFile.txt');
//чомусь находить не завжди... 
	
	function searchAndAddRepeatValue($array) {
		$newThirdFile = fopen('cFile.txt', a);
		foreach ($array as $value) {
			$keyCounts = array_keys($array, $value);
			$count = count($keyCounts);
			if ($count <= 2) continue;
			//$valueToFile = $value;
			fwrite($newThirdFile, $value);
			foreach ($keyCounts as $keyCount) {
				array_splice($array, $keyCount, 1);
			}
		}
		return "Add to file...";
	}

	echo searchAndAddRepeatValue($firstFile);
	echo searchAndAddRepeatValue($secondFile);
?>