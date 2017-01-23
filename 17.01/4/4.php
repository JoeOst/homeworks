<?php 
	//Дан файл. Каждая строка содержит имя, пароль и email, разделенные символами ':' (двоеточие). Удалить строки с повторами email. Удалить строки, в которых имена совпадают.
	$file = file('user.txt');
	
	
	foreach ($file as $value) {
		$name = strstr($value,':',true);
		$names[] = $name;
		
		
		//$arr[$name] = $email;
	}
	
	$countName = array_count_values($names);
	echo "<pre>";
	 print_r($file);
	 print_r($names);
	 print_r($countName);
	 echo "</pre>";

	 foreach ($variable as $key => $value) {
	 	# code...
	 }

	
?>