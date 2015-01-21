<?php

// first we need to create ul tags around the array
// then we need to loop through each itme
// on each loop we need to add an open <li> and if possible a close </li> to the value in that index

function print_lists($array) {
	echo '<ul>';
	foreach ($array as $key => $value) 
	{
		echo "<li>{$value}</li>";
	}
	echo '</ul>';


}

$myarray = array(2,3,'hello');
print_lists($myarray);

?>

