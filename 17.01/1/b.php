<?php 
include_once('1.php');
//b пункт

$newSecondFile = fopen('bFile.txt', x) or die('Couldnt open file');
	
foreach ($firstFile as $firstText) {
	foreach ($secondFile as $secondText) {
		if ($firstText === $secondText) {
			fwrite($newSecondFile, $firstText);
		} 
	}
	
}
?>
