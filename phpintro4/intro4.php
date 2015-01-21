<?php

function multiples($number,$low, $high){
	for ($i=$low; $i <$high ; $i++) { 
		echo $number *$i. "<br>" ;
	}
}

$num  = 5;
$min  = 5;
$limit = 5001;

multiples($num,$min,$limit);

?>