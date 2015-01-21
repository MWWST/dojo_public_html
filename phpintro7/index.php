<?php


function uservalues($array){
	foreach ($array as $key => $value) {
		echo "The value in the key: {$key}  is  {$value} .";
	}
}


$users = array("first_name" =>"Michael","last_name" => "Weitzman");
	

uservalues($users);



?>