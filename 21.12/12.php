<?php 
	function multi(int $num, $one, $two, $more) {
		switch ($num) {
			case 1:
				return("{$num} {$one}");
				break;
			case 2:
			case 3:
			case 4:
				return("{$num} {$two}");
				break;
			
			default:
				return("{$num} {$more}");
				break;
		}
	}

	echo multi(7, 'груша', 'груши', 'груш');
?>