<?php 
//Написать функцию, которая будет показывать список всех файлов в данной папке (поиск файлов происходит и во всех вложенных уровнях).


function showListOfFile($dir) {

	chdir("$dir");

	$allFiles = glob("*");
	foreach ($allFiles as $file) {
		if (is_dir($file)) {
			showListOfFile($file);
			chdir("..");
		} else echo "$file <br>";
	}
	
}

showListOfFile(".");

?>