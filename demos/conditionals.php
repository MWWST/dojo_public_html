<?php

// false
//'' 
// 0
// NULL

// $some_value = 5;
// $another_value = 5;

// if ($some_value == $another_value)
// {
// 	echo 'this is the truth';
// }
// else
// {
// 	echo 'this is not a lie';
// }




$name ='Sarah';
$on_guest_list = false;
$guest_number = 11;
$age = 33;

if ($on_guest_list)
{
	$party_message = 'Hey ' . $name . '!' .'Welcome to the party!';
}


else if($name == 'Joey' || $name == 'Sarah') 
{

	$party_message = ' sorry' .' '.$name. '. you are not allowed';
}


else if ($guest_number >10)
{

$party_message = ' sorry' .' '.$name. '. but we have too many partiers here'	;
}

else if ($age <= 20)
{
	$age_difference = 21 -$age;
	$party_message = ' sorry' .' '.$name. '. but you have ' . $age_difference . 'more years to go';

}

else 
{
	$pary_message = 'hey' .' '. $name . 'we hare happy to have you';
}

echo $party_message;



$number  = 3;

switch($number)
{
	case 1:
		echo ' '.'red ' . ' '.$number;
	break;
	case 2:
		echo ' '.'orange' . ' '.$number;
	break;

	case 3:
		echo ' '.'yellow ' . ' ' . $number;
	break;
	case 4:
		echo ' '.'green ' . ' '.$number;
	break;
	case 5:
		echo ' '.'blue ' . ' '.$number;
	break;
	case 6:
		echo ' '.'purpose ' . ' '.$number;
	break;
}













?>