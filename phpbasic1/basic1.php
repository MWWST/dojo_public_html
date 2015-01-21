<?php

$number = rand(50,100);
// echo $number;

if ($number <70) {
	echo "<h1> Your Score:"." ".$number."/100</h1><br/><h2>Your Grade Is: D</h2>";
}
elseif ($number >=70 && $number<80) {
	echo "<h1> Your Score:"." ".$number."/100</h1><br/><h2>Your Grade Is: C</h2>";
}
elseif ($number >=80 && $number<90) {
	echo "<h1> Your Score:" ." ".$number."/100</h1><br/><h2>Your Grade Is: B</h2>";
	// if ($number == 80){
	// 	echo "<h1> Your Score:"." ".$number."/100</h1><br/><h2>Your Grade Is: B</h2>";
	// }
}
elseif ($number >=90) {
	echo "<h1> Your Score:"." ".$number."/100</h1><br/><h2>Your Grade Is: A</h2>";
}

?>