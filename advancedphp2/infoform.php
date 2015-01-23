<?php
session_start();
if (isset($_POST['reset']) && $_POST['reset'] =='goback') {
	$_SESSION['counter'] = 1 ;
	}

?>

<html>
<head>
	<title>Michaels Info Form Session Counter</title>

<style>

form {
	background-color: blue;
	color: white;
	height: 400px;
	width: 400px;
	border-radius: 5px;
	padding-top: 15px;
	
}

div.name {
	margin-bottom: 10px;
}

div.name input {
	width: 200px;

}

#container {
	width: 980px;
	margin: 0px auto;
}

#success {

}

</style>

</head>
<body>
<div id="container">
<div id="success">

</div>

<form action="infosuccess.php" method="post" enctype="multipart/form">
	<div class="labels">
		<label for="name">Your Name:</label>
		<input type="text" name="yourname" placehodler="name">
	</div>
	<div class="location">
		<label for"location">Dojo Location:</label>
		<select name ="dojo">
			<option value ="Jan Jose">San Jose</option>
			<option value ="So Cal">So Cal</option>
			<option value="Seattle">Seattle</option>
		</select>
	</div>
	<div class="favlang">
		<label for"favoritelang">Favorite Language:</label>
		<select name ="language">
			<option value ="Javascript">Javascript</option>
			<option value ="PHP">PHP</option>
			<option value="Python">Python</option>
			<option value="Ruby">Ruby</option>
			<option value="Other">Other</option>
		</select>
	</div>
	<div class="comment">
		<label for"comment">Comments:</label>
		<textarea name="comment"> </textarea>
		<input type ="submit" value="SUBMIT!">
		<input type ="hidden" name="action" value ="register">
	</div>
	</form>
</div>
</body>
</html>