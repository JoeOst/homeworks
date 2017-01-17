<?php 
	function resistance($arr) {
		foreach ($arr as $value) {
			$result += $value;
		}
		return $result;
	}
	
	$electricChain = [];
	for ($i=0; $i < 20; $i++) { 
		$electricChain[] = rand(1,300);
	}
	

	echo resistance($electricChain);
?>