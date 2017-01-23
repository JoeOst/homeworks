<?php 
include_once('1.php');
// а пункт
$newFile = fopen('aFile.txt', x) or die('Couldnt open file');
	
	foreach ($firstFile as $firstText) {
		foreach ($secondFile as $secondText) {
			if ($firstText === $secondText) {
				
				continue 2;
			} 
		}
		fwrite($newFile, $firstText);
	}
	
?>