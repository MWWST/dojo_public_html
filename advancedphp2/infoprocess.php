<?php 	
session_start();

	if(isset($_POST['action']) && $_POST['action'] =='register') {
		if(isset($_SESSION['counter'])){
			$_SESSION['success'] ="you have submited this form" .$_SESSION['counter']."times";
			$_SESSION['counter']++;
			// var_dump($_POST);
			// var_dump($_SESSION);
			header('location: infosuccess.php');
		// if(isset($_SESSION['success'])) {
			
		}
			

		else {	
			var_dump($_SESSION['counter']);
			$_SESSION['counter'] =1;
				echo "0 times";
				
			}

	}
			
?>			