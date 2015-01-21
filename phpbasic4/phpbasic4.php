<?php

function get_max_and_min($array){
	$min =$array[0];
	$max =$array[0];
	

	foreach ($array as $key => $value) {
		if ($value > $max) {
			$max = $value;
		}
		elseif ($value < $min) {
			$min = $value;
		}
	}

	$minmax = array('max' => $max , 'min' => $min);
	return $minmax;  // return works, echo does not, not sure why, be sure to ask.
} 
	


$sample = array(135,2.4,2.67,1.23,332,2,1.02);
$output = get_max_and_min($sample);
var_dump($output);

?>