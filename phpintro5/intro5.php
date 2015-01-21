<?php

// function multiply($array, $multiple)
// {
// 	foreach ($array as $key => $value) {
// 		$newary = array();
// 		array_push($newary, $value * 5);
// 	}
// 	echo $newary;
// }

// $myarry = array(5,10,15,20);
// $mult = 6;

// // $newary = multiply($myarry, $mult);
// // echo $newary;

// multiply($myarry, $mult);

// function multiply($array, $multiple) {
// 	$newary = array();
// 	foreach ($array as $key => $value) {
// 		$value = $value * $multiple;
// 		array_push($newary, $value);
// 	}
// 	return $newary;
// }

// $A = [2,4,10,16];
// $mult = 5;

// $B = multiply($A, $mult);
// var_dump($B);

// OR YOU CAN DO IT LIKE THIS

function multiply($array, $multiple) {
	foreach ($array as $key => $value) {
		$array[$key] *= $multiple;
	}
	return $array;

}

$A = array(2,4,10,16);
// $mult = 5;
$B = multiply($A, 5);
var_dump($B);



?>