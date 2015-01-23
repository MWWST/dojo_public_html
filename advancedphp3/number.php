<?php 
session_start();
if(!isset($_SESSION['rando'])){
$_SESSION['rando'] =  rand(0,100);
}
if (isset($_POST['action']) && $_POST['action'] =='correct'){
			// session_destroy();
}

if (isset($_POST['action']) && $_POST['action'] =='compare'){
		$_SESSION['guess'] = $_POST['guessnumber'];
}
	if (isset($_POST['guessnumber'])) {
		if (strlen($_POST['guessnumber'])<1){
		?> 
		<div id="correct"></div>
		<form action="#" method="post">
		<input type="submit" value="Try Again!">
		<input type="hidden" name="action" value="correct">
		</form> 
		<?php   session_unset($_POST['guessnumber']);
		var_dump($_POST['guessnumber']);
	}
		elseif ($_POST['guessnumber'] == $_SESSION['rando']){
		$_SESSION['answercorrect'] = "Great job, you guessed right, now play again";
		?> 
		<div id="correct"></div>
		<form action="#" method="post">
		<input type="submit" value="Play Again!">
		<input type="hidden" name="action" value="correct">
		</form> 
		<?php   session_destroy();

		}
		elseif ($_POST['guessnumber'] != $_SESSION['rando']) {
			$_SESSION['error'] = "sorry wrong number";
			echo $_SESSION['error'];
			session_unset($_POST['guessnumber']);
			$_SESSION['rando'] = rand(0,100);
		}
		else if (!isset($_POST['guessnumber'])) {
			echo "enter a value";
		}
	}

// elseif  (isset($_SESSION['answerwrong'])){
// 	echo $_SESSION['answerwrong'];
// 	session_destroy();
// }
var_dump($_SESSION['rando']);
?>
<html>
<head>
	<title></title>

<style>
#container {
	width:980;
	margin: 0 auto;
}
<?php 
if (!isset($_POST['guessnumber'])){
?> 
#goodjob {
	visibility: hidden;
	border: 1px solid #000000;
	background-color: green;
}
	#toolow {
	visibility: hidden;
	border: 1px solid #000000;
	background-color: green;
	}
	#toohigh {
	visibility: hidden;
	border: 1px solid #000000;
	background-color: red;
	}


<?php } 

if (isset($_SESSION['answercorrect'])){
?> 
#goodjob {
	visibility: visible;
	border: 1px solid #000000;
	background-color: green;
}
	#toolow {
	visibility: hidden;
	border: 1px solid #000000;
	background-color: green;
	}
	#toohigh {
	visibility: hidden;
	border: 1px solid #000000;
	background-color: red;
	}


<?php } 

elseif (isset($_SESSION['error'])){
?> 
#goodjob {
	visibility: hidden;
	border: 1px solid #000000;
	background-color: green;
	}


<?php } 

if ($_POST['guessnumber'] > $_SESSION['rando']) {
?>
	#goodjob {
	visibility: hidden;
	border: 1px solid #000000;
	background-color: green;
	}
	#toolow {
	visibility: hidden;
	border: 1px solid #000000;
	background-color: green;
	}
	#toohigh {
	visibility: visible;
	border: 1px solid #000000;
	background-color: red;
	}

<?php } ?>

<?php if ($_POST['guessnumber'] < $_SESSION['rando']) {
?>
	#goodjob {
	visibility: hidden;
	border: 1px solid #000000;
	background-color: green;
	}
	#toolow {
	visibility: visible;
	border: 1px solid #000000;
	background-color: red;
	}
	#toohigh {
	visibility: hidden;
	border: 1px solid #000000;
	background-color: red;
	}
<?php } ?>
<?php if (!isset($_POST['guessnumber'])) {
?>
	#goodjob {
	visibility: hidden;
	border: 1px solid #000000;
	background-color: green;
	}
	#toolow {
	visibility: hidden;
	border: 1px solid #000000;
	background-color: red;
	}
	#toohigh {
	visibility: hidden;
	border: 1px solid #000000;
	background-color: red;
	}
<?php } ?>


</style>
</head>
<body>
	<div id="container">
	<h1>Welcome to the great number game!</h1>
	<h2>I am thinking of a number between 1 and 100</h2>
	<h3>Take a guess</h3>	

	<form action ="#" method="post" encytype="multipart/form">
			<input type="text" name="guessnumber">
			<input type="submit" value="Submit">
			<input type="hidden" name="action" value="compare">
	</form>
</div>
<div id="toolow">
too low
</div>
<div id="toohigh">
too high
</div>
<div id="goodjob">
	great work
</div>
</div>
</div>
</body>
</html>
