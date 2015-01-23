<?php
session_start();
// var_dump($_SESSION['rando']);

	if(isset($_POST['guessnumber'])) {
		if ($_POST['guessnumber'] == $_SESSION['rando']){
		$_SESSION['answercorrect'] = "Great job, you guessed right, now play again";
		?> 
		<form action="number.php" method="post">
		<input type="submit" value="Submit">
		<input type="hidden" name="action" value="correct">
		</form>
<?php   session_destroy();
		die();

		}
		else {
			$_SESSION['answerwrong'] = "ummm you are cray";
			$_SESSION['rando'] = rand(0,100);
			header('location: number.php');
			die();
		}
	}
	else {
		$_SESSION['error'] ="you need to try";
		header('location: number.php');
		die();
	}

