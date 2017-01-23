<?php 
	function sieveOfEratosthenes($num) {
		$primes = array_fill(2,$num,true);
		
		for ($n = 2; $n < $num; $n++) {
			if ($primes[$n]) {
			    for ($i = $n*$n; $i < $num; $i += $n) {
					$primes[$i] = false;
			    }
			} else {
				unset($primes[$n]);
			}
    	}

		return $primes;
	}
	
	print_r(sieveOfEratosthenes(150));
?>