<?php

function print_average($array)
	{
		$item_count = count($array);
		$sum = 0;
		foreach ($array as $value) 
		{
			$sum += $value;
		}
		$average = $sum / $item_count;
		echo $average;
}


$a = array(1,2,5,10,255,3);

print_average($a);

?>





