<?php
session_start();

	if(isset($_POST['action']) && $_POST['action'] == 'email') {
	$_SESSION['email'] = $_POST['email'];
	$errors = array();

	if(empty($_POST['email'])) {
		$errors[] = "Please enter a valide email address";
	}

	if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
	{
		$errors[] = "your email address is bad";
	}

	if (count($errors) > 0)
	{
		$_SESSION['errors'] = $errors;
		header('location: index.php');
		die();
	}

	else {
		$_SESSION['success'] = "Congrats you are good";
		header('location: success.php');
		die();
	}
}
	
?>