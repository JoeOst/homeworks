<?php 
	function diffTime($firstDate, $secondDate) {
		#var_dump(($firstDate) < ($secondDate));
		if (strtotime($firstDate) >= strtotime($secondDate)) {
			$second = substr($firstDate, -2, 2) - substr($secondDate, -2, 2);
			$minute = substr($firstDate, -5, 2) - substr($secondDate, -5, 2);
			$hour = substr($firstDate, -8, 2) - substr($secondDate, -8, 2);
			$day = substr($firstDate, 8, 2) - substr($secondDate, 8, 2);
			$month = substr($firstDate, 5, 2) - substr($secondDate, 5, 2);
			$year = substr($firstDate, 0, 4) - substr($secondDate, 0, 4);

			if ($second < 0) {
				$minute--;
				$second = 60 + $second;
			}

			if ($minute < 0) {
				$hour--;
				$minute = 60 + $minute;
			}

			if ($hour < 0) {
				$day--;
				$hour = 24 + $hour;
			}

			if ($day < 0) {
				$month--;
				$day = 30 + $day;
			}

			if ($month < 0) {
				$year--;
				$month = 12 + $month;
			}
			$difference = [];
			$difference['y'] = $year;
			$difference['m'] = $month;
			$difference['d'] = $day;
			$difference['h'] = $hour;
			$difference['i'] = $minute;
			$difference['s'] = $second;

			return($difference);
		} else {
			$second = substr($secondDate, -2, 2) - substr($firstDate, -2, 2);
			$minute = substr($secondDate, -5, 2) - substr($firstDate, -5, 2);
			$hour = substr($secondDate, -8, 2) - substr($firstDate, -8, 2);
			$day = substr($secondDate, 8, 2) - substr($firstDate, 8, 2);
			$month = substr($secondDate, 5, 2) - substr($firstDate, 5, 2);
			$year = substr($secondDate, 0, 4) - substr($firstDate, 0, 4);

			if ($second < 0) {
				$minute--;
				$second = 60 + $second;
			}

			if ($minute < 0) {
				$hour--;
				$minute = 60 + $minute;
			}

			if ($hour < 0) {
				$day--;
				$hour = 24 + $hour;
			}

			if ($day < 0) {
				$month--;
				$day = 30 + $day;
			}

			if ($month < 0) {
				$year--;
				$month = 12 + $month;
			}
		}

		$difference = [];
			$difference['y'] = $year;
			$difference['m'] = $month;
			$difference['d'] = $day;
			$difference['h'] = $hour;
			$difference['i'] = $minute;
			$difference['s'] = $second;
		
		return($difference);
	}
	echo "<pre>";
	print_r(diffTime('2010-12-21 00:55:01', '2012-12-20 12:40:00'));
	echo "</pre>";
?>