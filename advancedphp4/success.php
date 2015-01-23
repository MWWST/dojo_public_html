<?php
session_start();
?>

<html>
<head>
	<title></title>

<style>
#container {
	width: 980px;
	margin: 0px auto;
}

#successmsg {
	margin-top: 10%;
	background-color: green;
	border: 1px solid #000000;
	color: #FFFFFF;
	padding: 50px;
}
</style>	
</head>
<body>
<div id="container">
	<div id="successmsg">
		The email address you entered:
		<?= $_SESSION['email']?> is a VALID email address! Thank you.
	</div>
</div>
</body>
</html>