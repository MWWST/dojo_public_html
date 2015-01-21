<?php
header("Content-type: text/css");
?>
<?php $letters = array (0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F');

$h1color = '#'. $letters[rand( 0, 15)].$letters[rand( 0, 15)].$letters[rand( 0, 15)].$letters[rand( 0, 15)].$letters[rand( 0, 15)].$letters[rand( 0, 15)];
$pcolor = '#'. $letters[rand( 0, 15)].$letters[rand( 0, 15)].$letters[rand( 0, 15)].$letters[rand( 0, 15)].$letters[rand( 0, 15)].$letters[rand( 0, 15)]; 	
// echo $color;
?>

h1 {
color: <?=$h1color;?>
}

p {
 color: <?=$pcolor;?>
}


