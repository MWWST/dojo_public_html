<?php
session_start();

if(isset($_POST['action']) && $_POST['action'] == 'register'){
// var_dump($_SESSION);

	// collect validation errors

	// if(strlen($_POST['yourname']) <2) {

	// 	//add error to array

	// 	$errors[] ="your first name needs to have at least 2 chars";
	// }
	
		// if(count($errors)>0){
		// 	$_SESSION['errors'] = $errors;
		// 	header('location: infoform2.php');
		// 	die();
		// }
			if (isset($_SESSION['counter'])) {
				// echo $_SESSION['success'] ="you have submitted this form ".$_SESSION['counter']."Times";
				$_SESSION['counter']++;
				$_SESSION['name'] = $_POST['yourname'];
				$_SESSION['location'] = $_POST['dojo'];
				$_SESSION['language'] = $_POST['language'];
				$_SESSION['comment'] = $_POST['comment'];
				header('location: infosuccess2.php');
				die();
			}

			else { 
				$_SESSION['counter'] =1;
			// $_SESSION['counter']++;
			header('location: infosuccess2.php');
			die();
		}
	}

?>