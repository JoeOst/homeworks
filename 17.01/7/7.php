<!-- Пользователь загружает текстовый файл со списком ссылок. Добавить в базу (файл на сервере) из этого файла только те ссылки, которых нет ни в базе, ни в файле с запрещенными ссылками.-->
<form enctype="multipart/form-data" action="" method="post">
	<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
	Отправить файл: <input name="userfile" type="file" />
    <input type="submit" name="submit" value="Send File" />
</form>
<?php 
	if (($_POST['submit']) == "Send File") {
		addUserLink();
	}
	
	

function addUserLink() {
	print_r($_FILES);
	$userFile = file($_FILES['userfile']['tmp_name']);
	
	function delNum($a) {
		$a = preg_replace("/^[1-9][.)]/",'', $a);
		return $a;
	}

	$userFile = array_map('delNum',$userFile);
	
	$baseLink = file('link.txt');
	$taboo = file('linkTaboo.txt');
	$baseOpen = fopen('link.txt',a);
	foreach ($userFile as $value) {
		foreach ($baseLink as $base) {
			if (trim($value) == trim($base)) {
				continue 2;
			}
		}
		foreach ($taboo as $tabooValue) {
			if (trim($value) == trim($tabooValue)) {
				continue 2;
			}
		}
		fwrite($baseOpen, $value);
	}

}
?>