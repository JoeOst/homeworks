<?php 
	function col(...$arg) {
		return(count($arg));
	}

	echo col(1,5,8,9,5,12);
?>