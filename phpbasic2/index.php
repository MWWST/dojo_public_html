<?php 

// create a new menu in html using regular for loop that displays the different states.
// create a new menu in html using foreach loop
// add three new states to the array
// creat a third menu with the new states
//This first one works but I want to see if I can use a for loop to create the selects as well

function select($array){
	
	echo "<select>";
	for ($i=0; $i<count($array);$i++){
		echo "<option>". $array[$i] . "</option>";
	}
	echo "<select>";
}

$states= array('CA','WA','VA','UT','AZ');

select($states);

//The first one above is just my initial iteration, i needed to create the selects first without the for loop.

function select2($array) { //create a function that can generate the drop down list for any array we may want to pass to it

	for ($i=0; $i<1; $i++){
		echo "<select>";
		for ($j=0; $j<count($array); $j++) {
		echo "<option>". $array[$j] . "</option>";
		}
	for ($k=0; $k<1; $k++){
		echo "</select>";
		}
	}
}

$states= array('CA','WA','VA','UT','AZ');
select2($states);

//okay that worked! now lets try with a foreach

function select3($array) {
	
	foreach ($array as $key => $value) {
		if ($key == 0){
			echo "<select> <option>". $value ."</option>";
		}
		elseif ($key < count($array)) {
			echo "<option>". $value . "</option>";
		}
			
	}
	echo "</select>";  // I think you have to close the select outside of the loop. I tried to do if == to count($array) but it never gets to that point
}

$states= array('CA','WA','VA','UT','AZ');
select3($states);


function select4($array, $newarray) {  //new function allows passing a new variable called $newwarray for the additional states

	foreach ($newarray as $key => $value) {  // loop through the values in the add on array
		
		array_push($array, $value);  // push those values into the existing array
	}
	
	foreach ($array as $key => $value) {  // loop through the values in the array now with the new values from the addon array
		
		if ($key == 0){  //if the index is at 0, open the select statment in html and place the first option
		echo "<select><option>". $value. "</option>";
		}
		elseif ($key < count($array)) {
			echo "<option>". $value . "</option>";  //else just put in the options for each key value
		}
	}	
	echo "</select>";  //once all of the options are placed, close the select
}

$states= array('CA','WA','VA','UT','AZ');
$addon= array('NJ','NY','DE');
select4($states,$addon);

?>

