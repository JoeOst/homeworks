<?php 
	//Дан файл. Каждая строка содержит имя, пароль и email, разделенные символами ':' (двоеточие). Удалить строки с повторами email. Удалить строки, в которых имена совпадают.
	$file = file('user.txt');
	
	
	foreach ($file as $value) {
		$file_explode[] = explode(":", $value);
	}
	
	
	for ($i=0; $i < count($file_explode); $i++) { 
		$email = trim($file_explode[$i][2]);
		$name = trim($file_explode[$i][0]);
		foreach ($file_explode as $key => $value) {
			
			if ($key != $i && trim($value[2]) == $email) {

				unset($file_explode[$key]);
			}
			if ($key != $i && trim($value[0]) == $name) {
				unset($file_explode[$key]);
				
			}
		}
	}
	foreach ($file_explode as $key => $value) {
		$newFile[] = implode(":",$value);
	}
	
	$openFile = fopen("user.txt",w);
	foreach ($newFile as  $value) {
		fwrite($openFile, $value);
	}
	
?>