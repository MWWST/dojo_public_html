<?php
session_start();
// echo "COOKIE INFO:<br>";
// var_dump($_COOKIE);
// ECHO "SESSION INFO <br/>";
// var_dump($_SESSION);
?>

<html>
<head>
<style>

#message {
margin: 0 auto;
padding-top: 10%;
width:500px;
height:100px;
text-align: center;
}

#message h1 {
	font-size: 50px;
}

#message h2 {
	font-size: 20px;

}
#count {
	border: 1px solid #000000;
	width:200px;
	height:100px;
	font-size: 50px;
	margin-left:30%
	
}

#belowmessage {
	margin-top: 155px;
	display: block;
	margin-left: 44%;
	width:200px;
	height:300px;
	text-align: center;
}

input.button {
	background-color: blue;
	border-radius: 5px;
	border:none;
	width:140px;
	height:40px;
	color: #FFFFFF;
}
</style>
<title>

</title>
</head>
<body>
<div id="message">
	<h1>You visited the site</h1>
<div id="count">

<?php if(isset($_SESSION['counter'])) {

	echo $_SESSION['counter'];
	$_SESSION['counter']++;
}
else {
	$_SESSION['counter'] =1;
	echo "0";
	}

?>
	</div>
</div>
<div id="belowmessage">
	<h2>times</h2>
<form action='counterprocess.php' method='post'>
<input class="button" type='submit' value ='reset'>
</form>

</div>
</body>
</html>


