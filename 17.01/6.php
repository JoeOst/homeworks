<?php
//)Пользователю предлагается ввести имя каталога в локальной файловой системе сервера. Сценарий PHP выводит содержимое этого каталога в следующем формате: пиктограмма, указывающая на тип файла, имя файла, размер (или специальная пометка, если файл является каталогом), дата и время последней модификации. 
	function allFilesInCatalog($dir) {
		$files = scandir($dir);
		echo "<table>";
		
		foreach ($files as $file) {
			$type = filetype($file);
			$size = filesize($file);
			if (is_dir($file)) {
				$size = "*";
			}
			
			$lastModification = date ("F d Y H:i:s.", filemtime($file));
			echo "<tr><td>$type</td><td>$file</td><td>$size</td><td>$lastModification</td></tr>";
		}
		echo "</table>";
	}

	allFilesInCatalog('.');
?>