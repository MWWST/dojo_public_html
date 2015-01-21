<?php

// string functions

$str ="i am a string with many words";

// echo strlen($str);

// echo "The amount of characters in the above string is" .' ' .strlen($str).'<br>';
// echo "The text in all lower case looks like:" .'  '. strtolower($str).'<br>';
// echo " First letter of eachword uppercase would look like " . ' ' . ucwords($str).'<br />';
// echo "The above string with underscores in the places of spaces: " .str_replace(' ','_',$str); '<br>'; 
// echo "The above string strating with the first accourance of the word 'with': " . stristr($str, 'am'). '<br/>';
// echo "The word string starts at the index character: " . strpos($str, 'string') . '<br>';

$ary = explode(' ', $str);

	echo "exploaded array".'<br>';
	foreach($ary as $index => $value)
	{
		echo "index: ".$index .",value: ".$value."<br>";
	}


// echo " The number of items in this array are: " . count($ary). '<br>';


// sort($ary);
// 	// echo "sorted array" . '<br>';
// 	// foreach ($ary as $index => $value) 

// 	// {
// 	// 	echo "index: ".$index .", value: ".$value."<br>";

// 	// }

// echo "New string in alphabetical order: ". implode(' ', $ary);

// numeric functions

// echo "is the string numeric : " . is_numeric($str) . '<br>';
// echo "is the array numeric : " . is_numeric($ary) . '<br>';
// $number = 55;

// echo "is the number numeric : " . is_numeric($number) . '<br>';


// $empy_value ='';

// echo "is the empty string empty : " .empty($empty_value) . '<br>';
// echo "is the empty string set : " .isset($empty_value) . '<br>';
// echo "is the non existent variable set : " .isset($some_other_variable) . '<br>';

















?>