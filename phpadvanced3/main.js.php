<?php
header("Content-type: text/javascript");
//get a random number for our first number
//get a random number for our second number
//multiply first and second number
//print number 1 x number 2 = result to a variable
//in html file select the div element
// insert the script into that element
?>


<?php
	$numbers = array(0,1,2,3,4,5,6,7,8,9);
	
	for ($i=0;$i<=1;$i++){
		$random1 = rand(0,10);
		$random2 = rand(0,10);
		$result  = $random1 * $random2;
		
	}
		
	$output = "$(document).ready(function(){
 	    	alert('$random1 * $random2 = $result') });";
	
	echo $output;


	// $output = '<script type="text/javascript">'.$random1."*".$random2."=".($result).'</script>';

?>
