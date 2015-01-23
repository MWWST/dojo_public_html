<?php
session_start();

if(isset($_POST['action']) && $_POST['action'] == 'email') {
	

	//empty array to collect validation errors
	$errors =array();
	//first name validation
	if (strlen($_POST['first_name']) < 2) {
	
		//add error to array
		$errors[] ="your first name must be at least 2 chars";
	}
	//validate email
	if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
	{
		$errors[] = "your email address is bad";
	}
	// if there are any errors at all
	if (count($errors) > 0)
	{
		$_SESSION['errors'] = $errors;
		header('location: user.php');
		die();
	}

	else {
		$_SESSION['success'] = "Congrats you are good";
		header('location: success.php');
		die();
	}

}

?>