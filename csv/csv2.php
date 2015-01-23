<?php 
ini_set("auto_detect_line_endings",true);




// function csvextract($file) {
$file = fopen('us-500.csv', "r");
$header = fgetcsv($file);
while (($line= fgetcsv($file)) !== FALSE) {
	print_r($line[1]);

}
fclose($file);
?>
// csvextract($myfile);


// $csv = array_map(csvextract, file("us-500.csv",FILE_SKIP_EMPTY_LINES));
// $keys= array_shift($csv);

// foreach ($csv as $i => $row) {
// 	$csv[$i] = array_combine($keys, $row);
// 	var_dump($csv);
// }
