<?php

$sum= 0;
$ary = array(1,2,5,10,255,3);

foreach ($ary as $i => $value) {
	$sum += $ary[$i];
}
echo $sum;

?>