<?php 
//Даны два файла, состоящие из предложений. Создать третий файл, содержащий все предложения, которые есть хотя бы в одном из файлов. Повторы не добавлять в третий файл.
$firstFile = file('file1.txt');
$secondFile = file('file2.txt');

function createNewFileAndAddSentences($firstFile, $secondFile) {
	touch('file3.txt');
	$allSentences = array_merge($firstFile, $secondFile);
	
	$thirdFile = fopen('file3.txt', a);
	$allSentences = array_unique($allSentences);
	foreach ($allSentences as $sentence) {
		fwrite($thirdFile, $sentence);
	}
	
	return("All sentences were added");
}

echo createNewFileAndAddSentences($firstFile, $secondFile);
?>