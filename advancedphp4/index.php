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

<?php if(isset($_SESSION['errors'])) 
{ ?>
#message {
	background-color: red;
	border: 1px solid #000000;
	color: #FFFFFF;
	padding: 50px;
}

<?php } ?>


#form {
	width: 500px;
	margin-left: 200px;
	margin-top:250px;
}

form input {
	width: 400px;
}

input.button {
	height: 80px;
	width:  80px;
	
}

#submit {
	margin-left: 350px
}


</style>	
</head>
<body>
<div id="container">
<div id="message">
<?php if(isset($_SESSION['errors'])) 
		{
		 echo "The email address you entered". $_SESSION['email'] . "is not valid";
			unset($_SESSION['errors']);
} ?>
</div>

<div id="form">
	<h1> Please enter a valid email address </h1>
<form action="process.php" method="post" enctype="multipart/form">
<input type="text" name="email" placeholder="email address">
</div>
<div id="submit">
<input class="button" type ="submit" value="Submit">
<input type ="hidden" name="action" value ="email">
</form>
</div>
</div>
</div>
</body>
</html>