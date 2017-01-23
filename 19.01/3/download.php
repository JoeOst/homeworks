<?php 
if ($_POST) {
	$file = $_POST['picture'];
	
	$readStat = file_get_contents("stat.txt");
	
	if (!empty($readStat)) {
		$stats = unserialize($readStat);
		

		foreach ($stats as &$value) {
			if ($value['filename'] == $file) {
				$value['downloadCount']+=1;
				goto add;
			}
		}

		$stats[] = [
			'filename' => $file,
			'downloadCount' => 1
		];
	add:
	
	$statsSerialized = serialize($stats);
	
	file_put_contents('stat.txt',$statsSerialized);

	} else {

	$stats[] = [
		'filename' => $file,
		'downloadCount' => 1
	];

	$statsSerialized = serialize($stats);

	
	file_put_contents('stat.txt',$statsSerialized);
	
	}
}


	if (file_exists($file)) {
	    header('Content-Description: File Transfer');
	    header('Content-Type: image/jpeg');
	    header('Content-Disposition: attachment; filename="'.basename($file).'"');
	    header('Expires: 0');
	    header('Cache-Control: must-revalidate');
	    header('Pragma: public');
	    header('Content-Length: ' . filesize($file));
	    readfile($file);
	    exit;
	}


?>