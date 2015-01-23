<?php
session_start();
?>

<html>
<head>
	<title></title>
<style>

div.emailerror {
	background-color: red;
	border: 1px solid black;
	color:#ffffff;
}


</style>

</head>
<body>
	<div class="form">
		<form action="process.php" method="post" enctype ="multipart/form">
		
<?php if(isset($_SESSION['emailerrors'])){
	// var_dump($_SESSION['emailerrors']);
?>		<div class="emailerror">
			<label for="email">Email:</label>
			<input type="text" name="email">

<?php 		foreach ($_SESSION['emailerrors'] as $key => $value) {
				echo $value;

} session_destroy(); ?>	</div>
<?php ;}
	 else { 
?> 		<div class="email">
			<label for="email">Email:</label>
			<input type="text" name="email">
		</div>
<?php } ?>


		<div class="first_name">
			<label for="first_name">First Name:</label>
			<input type="text" name="first_name">
		</div>
		<div>
			<label for="last_name">Last Name:</label>
			<input type="text" name="last_name">
		</div>
		<div>
			<label for="password">Password:</label>
			<input type="text" name="password">
		</div>
		<div>
			<label for="confirm">Confirm Password:</label>
			<input type="text" name="confirm_password">
		</div>
		<div>
			<label for="bday">Birth Date:</label>
			<input type="text" name="birth_date">
		</div>
		<div>
			<label for="pic">Profile Photo:</label>
			<input type="file" name="profile_picture">
		</div>

			<input type="submit" name="submit">
			<input type="hidden" name="action" value="register">
		</form>

	</div>

</body>
</html>