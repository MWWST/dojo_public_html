<?php 

// print factorial();
// 	function factorial($number) {
// 		if ($number == 0) return 1;
// 		return $number * factorial($number-1);
// 	}


// $fib = array(1,1,2,3,4,5,6,7,8,9);

print fibonacci(7);
	function fibonacci($n) {
		if ($n ==0 || $n ==1) return 1;
		return fibonacci($n-2) + fibonacci($n -1 );
}

?>


