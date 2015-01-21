<?php



echo "<b><u>Starting The Program</u></b><br/>";  //start the program with a message
$heads = 0;  // set our heads counter to 0
$tails = 0;  // set our tails counter to 0
for ($i=0;$i<50001;$i++) {  // we are flipping 5,000 times so we need to loop through
	$chance = floor(rand(1,2)); //define our 50/50 chance of heads or tails by randomly selecting between 1 and 2.
	if ($chance ==1) { //if chance is 1 then it's heads
		$heads += 1;  // increment our heads counter by 1
		echo "Attempt #" ." ".$i. "  ". "Throwing a coin...it's a head!... Got". " " . $heads ." " . " heads so far and"." " .$tails. " "."tails so far <br />";
	}   // , 
	elseif ($chance == 2) { // if chance is 2 then it's tails
		$tails += 1;
		echo "Attempt # ".$i." ". "Throwing a coin... it's a tail!...Got". " ". $tails ." " . " tails so far and"." " .$heads." "."heads so far <br />";

	}
}
echo "<b><u>Ending The Program - thank you</b></u>"  //end the program

?>