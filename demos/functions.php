<?php

function print_array($array)
{

	echo "There are" . count($array). " values in the array.<br />";
	foreach ($array as $value) 
	{

		echo $value . "<br />";
	}
}

// $samples = array("abc", "def","ghi");
// print_array($samples);



$samples2 = array("Michael", "Jimmy","Paul");
print_array($samples2);
// echo "There are" . count($samples). " values in the array.<br />";
// foreach ($samples as $value) 
// {

// 	echo $value . "<br />";
// }

// $samples = array("John", "Noah","Mark");
// print_array($samples);
// echo "There are" . count($samples). " values in the array.<br />";
// foreach ($samples as $value) 
// {

// 	echo $value . "<br />";
// }
// 


// $samples = array(13,52,22);
// print_array($samples);
// echo "There are" . count($samples). " values in the array.<br />";
// foreach ($samples as $value) 
// {
// 	echo $value . "<br />";
// }

// ?>