<?php 
	function today() {
		$d = date('j');
		$month = month(date('n'));
		$day = day(date('N'));
		return("{$d} {$month}, {$day}");
	}

	function month($m) {
		switch ($m) {
			case 1:
				return("января");
				break;
			case 2:
				return("февраля");
				break;
			case 3:
				return("марта");
				break;
			case 4:
				return("апреля");
				break;
			case 5:
				return("мая");
				break;
			case 6:
				return("июня");
				break;
			case 7:
				return("июля");
				break;
			case 8:
				return("августа");
				break;
			case 9:
				return("сентября");
				break;
			case 10:
				return("октября");
				break;
			case 11:
				return("ноября");
				break;
			case 12:
				return("декабря");
				break;
		}
	}

	function day($d) {
		switch ($d) {
			case 1:
				return("понедельник");
				break;
			case 2:
				return("вторник");
				break;
			case 3:
				return("среда");
				break;
			case 4:
				return("четверг");
				break;
			case 5:
				return("пятница");
				break;
			case 6:
				return("субота");
				break;
			case 7:
				return("воскресенье");
				break;
		}
	}

echo today();
?>