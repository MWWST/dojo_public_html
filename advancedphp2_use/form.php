<?php
session_start();
echo "COOKIE INFO:<br>";
var_dump($_COOKIE);
ECHO "SESSION INFO <br/>";
var_dump($_SESSION);

?>

<!doctype html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="process.php" method="post" enctype="multipart/form">
		<div>
			<label for="color">What is your favoriet color?</label>
			<input type="text" name ="color" placeholder="put your color here">
		</div>
		<div>
			<label for "color"> What is your favorite type of music?</label>
			<select name ="music">
				<option value ="hip hop"> Hip Hop</opdion>
				<option value ="pop">POP</opdion>
				<option value ="rock">Rock</opdion>
				<option value ="alternative">Alternative</opdion>
				<option value ="country"> Country</opdion>
				<option value ="new age"> New Age</opdion>
				<option value ="classical"> Classical</opdion>
			</select>
		</div>
	<div>
		<label for ="file"> Chose File</label>
		<input type ="file" name="file" placeholder="pu your color here">
	</div>
	<div>
		<input type ="submit" value="Submit">
	</div>
</form>
</body>
</html>

<?php
unset($_SESSION['music']);