<?php 
session_start();
	if(isset($_SESSION['success'])) {
		echo($_SESSION['success']);
		unset($_SESSION['success']);
	}

	else //malicious users!~

	header('location: user.php');

?>