<?php 
//Дан файл со словами. Упорядочить слова по алфавиту.
$file = file('file.txt');
sort($file);
$fileResource = fopen('file.txt', w);
foreach ($file as $value) {
	fwrite($fileResource, $value);
}

?>