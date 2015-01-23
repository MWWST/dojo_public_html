<?php

//create a function to create the image
//generate a totally random string
//md 5 is 32 characters but we can trim that down using substr to get values 0-5
//set the image width and height in variables
// use the ImageCreate function to make the image, we pass width and height variables to this as parameters
// create some colors
// fill the image background 
//Add randmoly generated string above in white to the image
// Optional, add some lines to make it hard for bots to read
// tell browser what type of file this is
//output the new image in jpeg format
//call the function


// $array = array(1,3,5,7,9);
// 	var_dump($array)

for ($i=0;$i<5; $i++){

function create_image()
{

	$rando = md5(rand(0,9999));
	$chars = substr($rando, 0,5);

	$imgwidth = 100;
	$imgheight =100;

	$image = ImageCreate($imgwidth,$imgheight);

	$white =imagecolorallocate($image, 255, 255, 255);
	$black =imagecolorallocate($image, 0, 0, 0);
	$grey =imagecolorallocate($image, 204, 204, 204);


	imagefill($image, 0, 0, $black);
	imagestring($image, 3, 30, 30, $chars, $white);

	header("Content-Type: image/jpeg");

	imagejpeg($image);

	imagedestroy($image);

}
echo create_image();
}


?>