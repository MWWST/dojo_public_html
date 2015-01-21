<?php

$number = rand(50,100);
$score = $number;

if ($score <70) {
	echo "<h1> Your Score:"." ".$score."/100</h1><br/><h2>Your Grade Is: D</h2>";
}
elseif ($score >70 && $score<80) {
	echo "<h1> Your Score:"." ".$score."/100</h1><br/><h2>Your Grade Is: C</h2>";
}
elseif ($score >80 && $score<90) {
	echo "<h1> Your Score:" ." ".$score."/100</h1><br/><h2>Your Grade Is: B</h2>";
	if ($score == 80){
		echo "<h1> Your Score:"." ".$score."/100</h1><br/><h2>Your Grade Is: B</h2>";
	}
}
elseif ($score >=90) {
	echo "<h1> Your Score:"." ".$score."/100</h1><br/><h2>Your Grade Is: A</h2>";
}

?>