<?php
session_start();

if (isset($_POST['action']) && ($_POST['action'] == 'register')){

$emailerrors = array();

	if (empty($_POST['email'])){
		$emailerrors[] = "You must enter a valid email address";
	}

	else {
	header("location: success.php");
	(die);

}

if ($emailerrors > 1) {
	$_SESSION['emailerrors'] = $emailerrors;
	header("location: regnodb.php");
	var_dump($_SESSION['emailerrors']);
	(die);
}


}


?>