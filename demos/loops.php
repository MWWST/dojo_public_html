<?php

// 				$students = array(
// 					array("Randall", "Frisk" , 27), 
// 					array("Michael", "Wetizman", 30), 
// 					array("Charles","Hoffman",50)
// 			);

// for($i = 0; $i < count($students); $i++)
// {
// 	for($j = 0; $j < count($students[$i]); $j++)
// 	{
// 		echo $students[$i][$j] .' ';
// 	}
// 	echo '<br>';
// }

$students = array(
				array("first_name" => "Randall", "last_name" =>"Frisk" , "age" => 27),
				array("first_name" => "Michael", "last_name" =>"Weitzman" , "age" => 30),
				array("first_name" => "Jimmy", "last_name" =>"Jun" , "age" => 25),
			);

foreach ($students as $row) 
{
	foreach ($row as $info => $value) 
	{
		echo $value;
	}
	echo '<br>';
}
// 
// $i = 1;
// while ($i <= 10) {
//     echo $i++;   the printed value would be
//                    $i before the increment
//                    (post-increment) 
// }

// $i = 1;
// while ($i <= 10):
//     echo $i;
//     $i++;
// endwhile;

// for($i=0; $i<10; $i++)
// {
	
// 	for($j =0; $j<5;$j++)
// 	{
		
// 	echo $j;
// 	}
//  	echo '<br>';
// }

?>

